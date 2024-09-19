<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $products = Product::with(['category'])
    //                 ->where([
    //                             [DB::RAW('status'), '<>', 'deleted']
    //                         ])
    //                 ->get();
    //     $categories = Category::all();
    //     $shop = Auth::user()->customers->sellers->shops;
    //     return ProductPicture::where('product_id', $products->)->get();
    //     return view('seller.kelolaProduk', compact('products', 'categories', 'shop'));
    // }
    
    public function index()
{
    // Ambil semua produk dengan kategori terkait, dan status selain 'deleted'
    $products = Product::with(['category'])
                ->where('status', '<>', 'deleted')
                ->get();
    
    // Ambil semua kategori
    $categories = Category::all();

    // Ambil shop yang terkait dengan user yang sedang login
    $shop = Auth::user()->customers->sellers->shops;

    // Mengambil gambar terkait produk
    $productPictures = ProductPicture::whereIn('product_id', $products->pluck('product_id'))->first();
    // Kembalikan data ke view
    return view('seller.kelolaProduk', compact('products', 'categories', 'shop', 'productPictures'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // return $request;
        $validatedData = $request->validate([
            'shop_id' => 'required|exists:shops,shop_id',
            'name' => 'required|string|max:255',
            'category_code' => 'required',
            'desc' => 'required',
            'weight' => 'required|integer',
            'price' => 'required',
            'stock' => 'required|integer',
            'pictures' => 'sometimes|array',
            'pictures.*' => 'required|mimes:jpg,jpeg,png|max:2048', // Validasi untuk setiap gambar
            ],
            [
                'shop_id' => 'salah',
                'name' => 'salah',
                'category_code' => 'salah',
                'desc' => 'salah',
                'weight' => 'salah',
                'price' => 'salah',
                'stock' => 'salah',
                'pictures' => 'salah',
                'pictures.*' => 'salah',
            ]
        );
        // dd($validatedData);
        // Buat produk baru
        $product = Product::create([
            'shop_id' => $validatedData['shop_id'],
            'name' => $validatedData['name'],
            'category_code' => $validatedData['category_code'],
            'desc' => $validatedData['desc'],
            'weight' => $validatedData['weight'],
            'price' => $validatedData['price'],
            'stock' => $validatedData['stock'],
        ]);

        // Jika ada gambar, simpan ke tabel product_pictures
        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $file) {
                // Simpan gambar ke direktori 'products/images'
                $shop = Auth::user()->customers->sellers->shops;
                $path = $shop->name;
                $directory = $file->store($path .'/products/images', 'public');
                // dd($directory);
     
                // Simpan data gambar ke tabel product_pictures
                ProductPicture::create([
                    'product_id' => $product->product_id, 
                    'directory' => $directory,
                ]);
            }
            
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($product)
    // {
         public function edit($id){

        if (!$product) {
            return redirect()->route('products.index')->withErrors('Product not found.');
        }

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $product)
    public function update(Request $request)
{
    // dd($request);die;
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'category_code' => 'required',
        'weight' => 'required|numeric',
        'stock' => 'required|integer',
        'price' => 'required|numeric',
        'status' => 'required|string',
        'desc' => 'required|string',
    ]);

    Product::where ([
                        'product_id' => $request->productid,
                    ])
    -> update([
        'name'              => $request->name,
        'category_code'     => $request->category_code,
        'weight'            => $request->weight,
        'stock'             => $request->stock,
        'price'             => $request->price,
        'status'            => $request->status,
        'desc'              => $request->desc
    ]);
    // $product = Product::findOrFail($request->productid);
    // $product->update($validatedData);

    if ($request->ajax()) {
        return response()->json(['success' => true, 'message' => 'Product updated successfully']);
    }

    return redirect()->route('products.index')->with('success', 'Product updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        // dd($product);die;
        // $product = Product::findOrFail($product);
        // $product = DB::table('product')
        //       ->where('id', 1)
        //       ->update(['votes' => 1]);
        Product::where([
                            'product_id' => $product,
                        ])
        -> update([
                        'status' => 'deleted'
                    ]);
        // $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }

    

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();  // Hapus produk; semua gambar terkait akan dihapus secara otomatis jika cascade delete diatur
            return response()->json(['message' => 'Product deleted successfully.']);
        }

        return response()->json(['message' => 'Product not found.'], 404);
    }


    public function search(Request $request)
    {
        // Tangkap input pencarian dari user
        $searchTerm = $request->input('search');

        // Lakukan pencarian pada kolom yang diinginkan, misalnya pada nama produk
        $products = Product::where('name', 'LIKE', '%' . $searchTerm . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('customer.shop', compact('products'));
    }
}
