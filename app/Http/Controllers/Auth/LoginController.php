<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller

{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'customer_email' => 'required|email',
            'customer_password' => 'required|min:6'
        ];
        $messages = [
            'customer_email.required' => 'Email là trường bắt buộc',
            'customer_email.email' => 'Email không đúng định dạng',
            'customer_password.required' => 'Mật khẩu là trường bắt buộc',
            'customer_password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $customer_email = $request->input('customer_email');
            $customer_password = $request->input('customer_password');
           

            if (Auth::attempt(['customer_email' => $customer_email, 'customer_password' => $customer_password])) {

                // return redirect()->intended('/home');
                // return Redirect::intended();
                return redirect()->intended('defaultpage');

            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                // Session::flash();
                return redirect('login')->with('error', 'Email hoặc mật khẩu không đúng!');
            }
        }
    }
}
