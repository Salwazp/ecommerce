<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\otpservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Otpcontroller extends Controller
{
    public function showVerifyForm()
    {
        return view('auth.verify');
    }

    public function verify(Request $request, OTPService $otpService)
    {
        $request->validate([
            'otp' => 'required|integer',
        ]);

        $user = Auth::user();

        if ($otpService->verifyOTP($user, $request->otp)) {
            if ($user->email_verified_at == null){
                $user->email_verified_at == Carbon::now();
                $user->save();

                return redirect()->route('customerDashboard')->with('status', 'Email succesfully verified');
            }
            else
            {
                return redirect()->route('seller.KTP')->with('status','Email succesfully verified' );
            }
        }

        return back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
    }


    public function resend(Request $request)
    {
        // Logika untuk mengirim ulang kode OTP
        // Misalnya, Anda dapat mengambil pengguna yang saat ini sedang login
        $user = Auth::user();

        if ($user) {
            // Contoh: Logika untuk mengirim OTP bisa melalui SMS, email, dll.
            // $otp = rand(100000, 999999); // Contoh pembuatan OTP
            // Kirim OTP ke pengguna melalui layanan SMS/email dll.
            // $user->sendOtp($otp);

            // Jika pengiriman berhasil
            return response()->json(['success' => true]);

            // Jika pengiriman gagal
            // return response()->json(['success' => false], 500);
        }

        // Jika tidak ada pengguna yang terautentikasi
        return response()->json(['success' => false], 403);
    }
}