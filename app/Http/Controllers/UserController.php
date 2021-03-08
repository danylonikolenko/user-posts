<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getUser()
    {
        return json_encode($this->userService->getUser());
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'string|max:40',
            'surname' => 'string|max:40',
            'email' => 'required|string|email|max:40',
        ]);

        echo json_encode($this->userService->edit($request));
    }

}
