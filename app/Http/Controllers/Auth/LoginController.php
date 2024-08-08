<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout', 'showAccountForm', 'updateAccount','showConfirmAccount');
        $this->middleware('auth')->only('logout', 'showAccountForm', 'updateAccount','showConfirmAccount');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->status == '1') {
                Auth::logout();
                return redirect()->route('login')->with('status', 'Tài khoản của bạn đã bị khóa');
            }
    
            if ($user->role == '1') {
                return redirect()->route('admin');
            }
    
            return redirect()->route('home');
        }
    
        return redirect()->back()->withErrors(['email' => 'Email hoặc mật khẩu sai']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

   
    public function showAccountForm()
    {
        $user = Auth::user();
        return view('updateuser', compact('user'));
    }

  
    public function updateAccount(Request $request)
    {
       

        $user = Auth::user();
        $data = $request->only(['name', 'email', 'phone', 'address']);
      

        if ($request->hasFile('img')) {
            if ($user->img) {
                $imagePath = public_path($user->img);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $data['img'] = $imagePath;
        }


        
    
        $user->update($data);

        return redirect()->route('confirm.form')->with('status', 'Tài khoản được cập nhật thành công');
    }


    public function showConfirmAccount()
    {
        $user = Auth::user();
        return view('account', compact('user'));
    }
}
