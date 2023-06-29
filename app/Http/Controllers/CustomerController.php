<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Booking;
use App\Models\Review;
use App\Models\Tour;
use App\Models\Custom;
use App\Models\Contract;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;
use Auth;
use Session;
class CustomerController extends Controller
{
    public function AuthLogin(){
    $customer_id=Session::get('customer_id');
    if($customer_id) Redirect::to('/');
    else Redirect::to('login-index')->send();
    }
    
    public function login_index(){
        return view('Page_Views.Account.Login');
    }
    public function login_customer(Request $request){
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);
        $result = Customer::where('customer_email', $customer_email)->where('customer_password', $customer_password)->first();
        if($result){
            Session::put('customer_name',$result->customer_name);
            Session::put('customer_email',$result->customer_email);
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_phone_number',$result->customer_phone_number);
            Session::put('customer_address',$result->customer_address);
            Session::put('customer_nationality',$result->customer_nationality);
            $_SESSION['status_login'] = true;
            return Redirect::to('/');
        }
        else {
            //Session::put('message','*Tài khoản hoặc mật khẩu không đúng');
            return back()->with('fail','*Tài khoản hoặc mật khẩu không đúng');}
    }
    public function register_index(){
        return view('Page_Views.Account.Register');
    }
    public function profile(){
        $this->AuthLogin();
   
       $customer = Session::get('customer_id');
       // $customer= Customer::where('customer_id',$customer_id)->first();
        //$customer= Customer::join('tbl_booking','tbl_booking.customer_id','=','tbl_customer.customer_id')->get();
        
        return view('Page_Views.Account.Profile')->with(compact('customer'));
    /* }
    else{
        Session::put('message','*you don\'t have this permission');
        return redirect()->back();
    } */
    }
    public function update_profile(Request $request,$customer_id){
        $customer =customer::find($request['customer_id']);
       
            $customer->customer_name=$request['customer_name'];
            $customer->customer_phone_domain=$request['customer_phone_domain'];
            $customer->customer_address=$request['customer_address'];

            $customer->customer_phone_number=$request['customer_phone_number'];
            $customer->customer_nationality=$request['customer_nationality'];
            //$customer = Customer::where('customer_phone_domain',$request['booking_customer_phone_domain'])
            //->where('customer_phone_number',$request['booking_customer_phone_number'])->first();
        $customer->customer_id=$customer->customer_id;
        $customer->save();
        Session::put('message','*Successfully updated');
        return Redirect::to('/profile');
    }  
    public function order($customer_id){
        if(Session::get('customer_id') != NULL ){
            $customer= Customer::where('customer_id',$customer_id)->first();
            $booking=Booking::where('customer_id',$customer_id)->get();
            $custom=Custom::where('customer_id',$customer_id)->get();
            //$order = Booking::where('customer_id',$customer_id)->join('tbl_customer','tbl_booking.customer_id','=','tbl_customer.customer_id')->get();
            return view('Page_Views.Account.Order')->with(compact('booking','customer','custom'));
         }else{
            Session::put('message','*Bạn phải đăng nhập');
            return Redirect::to('/login-index');
        } 

    }
    /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'customer_name' => ['required', 'string', 'max:100'],
            'customer_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'customer_password' => ['required', 'string', 'min:8', 'confirmed'],
          
        ],
        [
            'customer_name.required' => 'Họ và tên là trường bắt buộc',
            'customer_name.max' => 'Họ và tên không quá 100 ký tự',
            'customer_email.required' => 'Email là trường bắt buộc',
            'customer_email.email' => 'Email không đúng định dạng',
            'customer_email.max' => 'Email không quá 255 ký tự',
            'customer_email.unique' => 'Email đã tồn tại',
            'customer_password.required' => 'Mật khẩu là trường bắt buộc',
            'customer_password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            'customer_password.confirmed' => 'Xác nhận mật khẩu không đúng',
        ]
    );
    }

    protected function create(array $data)
    {
       
        return Customer::create([
            'customer_name' => $data['customer_name'],
            'customer_email' => $data['customer_email'],
            'customer_phone_number' => $data['customer_phone_number'],
            'customer_password' => Hash::make($data['customer_password']),
            
            'created_at' => date("Y-m-d H:i:s")
        ]);
    } */
    public function add_customer(Request $request){
     $request->validate([
        'customer_name' => ['required', 'string', 'max:100'],
        'customer_email' => ['required', 'string', 'email', 'max:255','unique:tbl_customer'],
        'customer_password' => ['required', 'string', 'min:6'],
        ], [
            'customer_name.required' => 'Họ và tên là trường bắt buộc',
            'customer_name.max' => 'Họ và tên không quá 100 ký tự',
            'customer_email.required' => 'Email là trường bắt buộc',
            'customer_email.email' => 'Email không đúng định dạng',
            'customer_email.max' => 'Email không quá 255 ký tự',
            'customer_email.unique' => 'Email đã tồn tại',
            'customer_password.required' => 'Mật khẩu là trường bắt buộc',
            'customer_password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            
        ]); 
        $customer= new Customer;
        $customer->customer_name=$request['customer_name'];
        $customer->customer_phone_number=$request['customer_phone_number'];
        $customer->customer_email=$request['customer_email'];
        $customer->customer_password=md5($request['customer_password']);
       
        $res = $customer->save();
        if($res){
         return Redirect::to('/login-index')->with('success','*Đăng ký thành công');
        }else{
            return back()->with('fail','*Đăng ký thất bại');
        }
        

    }
    public function logout(){
        $this->AuthLogin();
        Session::put('customer_name',null);
        Session::put('customer_id',null);
       
        Session::put('customer_email',null);
        return view('Page_Views.Account.Login');
    }
    /*them bài viết*/
    public function index(){
        return view('Page_Views.CustomerPost');
    }
    public function add(Request $request){
        $data=$request->all();
        $post= new Post;
        $post->post_title=$data['post_title'];
        $post->post_content=$data['post_content'];
        $post->post_desc=$data['post_desc'];
        //$post->post_meta_desc=$data['post_meta_desc'];
        $post->post_meta_keyword=$data['post_meta_keyword']; 
        $post->post_status=$data['post_status'];
    
        $get_thumb = $request->file('post_thumb');
        $get_banner = $request->file('post_banner');
        $get_name_thumb = $get_thumb->getClientOriginalName();
        $name_thumb = current(explode('.',$get_name_thumb));
        $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
        $get_thumb->move('uploads/posts/thumb',$new_thumb);
        $get_name_banner = $get_banner->getClientOriginalName();
        $name_banner = current(explode('.',$get_name_banner));
        $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
        $get_banner->move('uploads/posts/banner',$new_banner);
        $post->post_thumb=$new_thumb;
        $post->post_banner=$new_banner;
        Session::put('message','*Tải bài viết thành công');
        $post->save();
        Return Redirect::to('post');
    }
    
}