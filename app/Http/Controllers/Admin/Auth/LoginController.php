<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\CmsModule;
use App\Models\CmsUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
//        if( $request['auth_token'] != config('constants.admin_auth_token') )
//            return abort(404);
        \Log::debug("LoginController.php");

//        if( $request->isMethod('post') )
//            return self::_login($request);
//
//
//        return $this->__cbAdminView('auth.login');
       $user =  User::first(
            [
                'id',
                'name',
                'email',
                'image_url'
            ]
        );
       // dd($user);
        return response()->json(['code' => 201,
        'data'=> [
            'user' => $user,
            'token' => 1234
        ]]);
    }

    private function _login($request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $auth = CmsUser::auth($request['email'],$request['password']);
        if( $auth )
            return redirect()->route('admin.dashboard');
        else
            return redirect()->back()->with('error','Invalid credential');

    }

    public function saveProduct(Request $request){
        Log::debug("",$request->all());

    }
}
