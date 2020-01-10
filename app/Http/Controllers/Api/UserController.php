<?php

namespace App\Http\Controllers\Api;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Repositories\Users\UserRepository;

class UserController extends ApiController
{
    protected $validationRules = [
        "name"             => "required",
        "email"            => "required|email|unique:users",
        "password"         => "required",
        "confirm_password" => "required|same:password",
    ];

    protected $validationMessages = [
        'name.required'             => 'Tên không được để trống',
        'email.required'            => 'Email không được để trống',
        'email.email'               => 'Email không đúng định dạng',
        'email.unique'              => 'Email đã tồn tại',
        'password.required'         => 'Vui lòng nhập mật khẩu',
        'confirm_password.required' => 'Vui lòng nhập lại mật khẩu',
        'confirm_password.same'     => 'Nhập lại mật khẩu không đúng',
    ];

    /**
     * UserController constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $pageSize = $request->get('limit', 25);
        return $this->successResponse($this->user->getByQuery($request->all(), $pageSize));
    }
}
