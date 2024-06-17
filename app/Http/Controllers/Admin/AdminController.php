<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function reset_password() {
        return view('auth.reset-password');
    }

    public function update_password(Request $request) {
        $user = Auth::user();
       
        if(Hash::check($request->old_password, $user->password)) {
            // Password lama benar, lanjutkan dengan proses perubahan password
            // Di sini Anda dapat menggunakan Hash::make() untuk menghasilkan hash baru dari password baru
            $user->password = Hash::make($request->password);
            $user->save();
    
            // Jika password berhasil diperbarui, arahkan pengguna ke halaman dashboard
            return view ('admin.dashboard');
        } else {
            // Password lama tidak cocok
            return redirect()->back()->with('error', 'Password Salah');
        }
    }
    
}
