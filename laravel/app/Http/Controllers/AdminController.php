<?php
/**
 * Created by PhpStorm.
 * User: meizhi
 * Date: 17-2-13
 * Time: 下午2:38
 */

namespace App\Http\Controllers;


use App\Admin;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;


class AdminController extends Controller{

    //登录界面
    public function adminLogin(){

       return view('admin.adminLogin');
    }

    //生成sessionId
    public function createSession($request){

       // Session::put('username',$username);
        //$request->session()->put('sessionId',md5(time()));

        $value = md5(time());

        Session::put($value,$request->username);

        setcookie('sessionId',$value);

    }

    //验证管理员
    public function adminConfirm(Request $request){

        $message = Admin::query()->where('admin_username',$request->username)->get();

        if($message == '[]'){

            return json_encode(array("success" => false));

        }


        foreach ($message as $aMessage){

            $DonNotAskMeWhy = $aMessage->admin_password;

        }

        if ($DonNotAskMeWhy == $request->password){


            $this->createSession($request);
            return json_encode(array("success"=>true,"location"=>"http://127.0.0.1/laravel/public/index.php/indexAdmin"));

        }else {

            $this->createSession($request);
            return json_encode(array("success" => false));

        }







    }

    //管理员主页;
    public function adminIndex(){

        return view('admin.adminIndex');

    }



}