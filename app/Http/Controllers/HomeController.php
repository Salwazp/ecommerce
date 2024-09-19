<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Product;
use App\Models\ProductPicture;
use Illuminate\Support\Facades\Auth;
use App\Services\OTPService;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('customer.dashboard');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
    public function seller()
    {
        return view('seller.dashboard');
    }
    public function cart()
    {
        return view('customer.cart');
    }
    public function cus()
    {
        $products = Product::all();
        // dd($product); die;
        return view('customer.dashboard', compact('products'));
    }
    public function shop()
    {
         // Ambil semua produk dengan kategori terkait, dan status selain 'deleted'
    $products = Product::with(['category'])
    ->where('status', '<>', 'deleted')
    ->get();


// Mengambil gambar terkait produk
$productPictures = ProductPicture::whereIn('product_id', $products->pluck('product_id'))->first();
        return view('customer.shop', compact('products', 'productPictures'));
    }

    public function join()
    {
        $user = Auth::user();
        return view('customer.joinSeller', compact('user'));
    }
    protected function register(Request $request)
    {
        $user = Auth::user();
        $request->session()->flash('email', $request->input('email'));
        $otpService = new OTPService();
        $otpService->generateOTP($user);

        return redirect()->route('otp.verify');
    }

    protected function KTPForm()
    {
        $customer = Auth::user()->customers;
        return view('customer.daftarSeller', compact('customer'));
    }

    public function KTPFormAdd(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'ktp_nik' => 'required|digits:16',
            'customer_id' => 'required',
            'ktp_nama' => 'required|string|max:255',
            'ktp_tempat_lahir' => 'required|string|max:255',
            'ktp_birth' => 'required|date',
            'ktp_jk' => 'required|in:Laki-laki,Perempuan',
            'ktp_gol_darah' => 'required|string|max:2',
            'ktp_alamat' => 'required|string|max:255',
            'ktp_rt' => 'required|string|max:3',
            'ktp_rw' => 'required|string|max:3',
            'ktp_kel_desa' => 'required|string|max:255',
            'ktp_kecamatan' => 'required|string|max:255',
            'ktp_agama' => 'required|in:Islam, Protestan,Katolik,Buddha,Hindu,Khonghucu',
            'ktp_status_perkawinan' => 'required|in:Belum,Kawin,Cerai',
            'ktp_pekerjaan' => 'required|string|max:255',
            'ktp_kewarganegaraan' => 'required|in:WNI,WNA',
            'ktp_picture' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);
        // dd($validatedData);
        if ($request->hasFile('ktp_picture')) {
            $nik = $request->ktp_nik;
            $path = $request->file('ktp_picture')->store('ktp_pictures/'. $nik, 'public');
            $validatedData['ktp_picture'] = $path;
        }
        Seller::create($validatedData);

        return redirect()->route('seller.dashboard')->with('success', 'Data berhasil diperbarui.');
    }

    public function shopDetail()
    {
        $seller = Auth::user()->customers->sellers;
        return view('seller.daftartoko', compact('seller'));
    }

    public function shopDetailAdd(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'seller_ktp_nik' => 'required',
            'name' => 'required|string|max:255',
            'url_domain' => 'required|string|max:255',
            'description' => 'required',
            'kota' => 'required',
            'shop_icon' => 'required|mimes:jpg,jpeg,png,ico|max:2048'
        ]);

        if ($request->hasFile('shop_icon')) {
            $namatoko = $request->name;
            $path = $request->file('shop_icon')->store($namatoko . '/shopIcon', 'public');
            $validatedData['shop_icon'] = $path;
        }

        Shop::create($validatedData);

        return redirect()->route('seller.dashboard');
    }

    
}



