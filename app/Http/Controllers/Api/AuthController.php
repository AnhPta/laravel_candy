<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class AuthController extends ApiController
{
    protected $validationRules = [
        "name"             => "required",
        "email"            => "required|email|unique:users",
        "password"         => "required",
        "confirm_password" => "required|same:password",
    ];

    protected $validationMessages = [
        'name.required' => 'Vui lòng nhập tên',
        'email.required' => 'Vui lòng nhập email',
        'email.email' => 'Vui lòng nhập đúng định dạng email',
        'email.unique' => 'Email đã tồn tại',
        'password.required' => 'Vui lòng nhập mật khẩu',
        'confirm_password.required' => 'Vui lòng nhập lại mật khẩu',
        'confirm_password.same' => 'Nhập lại mật khẩu không đúng',
    ];

    public function signup(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->validate($request, $this->validationRules, $this->validationMessages);
            $input = $request->all();
            $input["password"] = bcrypt($input["password"]);
            $user = User::create($input);

            $success["name"] = $user->name;
            $success["email"] = $user->email;
            $success["token"] = $user->createToken("myApp")->accessToken;

            DB::commit();
            return $this->successResponse($success);
        } catch (\Illuminate\Validation\ValidationException $validationException) {
            DB::rollback();
            return $this->errorResponse([
                'errors' => $validationException->validator->errors(),
                'exception' => $validationException->getMessage()
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        } catch (\Throwable $t) {
            DB::rollback();
            throw $t;
        }
    }

    public function signin()
    {
        $auth = Auth::attempt([
            "email" => request("email"),
            "password" => request("password")
        ]);
        if ($auth) {
            $user = Auth::user();
            $success["token"] = $user->createToken("myApp")->accessToken;
            return response()->json(["success" => $success], 200);
        } else {
            return response()->json([
                "error "=> "Unauthorised"
            ], 401);
        }
    }
}
