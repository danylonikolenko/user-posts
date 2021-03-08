<?php


namespace App\Services;


use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function edit($request):array
    {
        $request->request->add(['id' => Auth::id()]); //add request
        $this->userRepository->edit($request);
        return $this->userRepository->getById(Auth::id())->first()->toArray();
    }

    public function getUser(): array
    {
        return $this->userRepository->getById(Auth::id())->first()->toArray();
    }

}
