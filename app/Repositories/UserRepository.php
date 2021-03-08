<?php


namespace App\Repositories;



use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

class UserRepository implements UserInterface
{

    public function all()
    {
       return User::all();
    }

    public function getById(int $id)
    {
        return User::all()->where('id', $id);
    }

    public function getWithArticlesById(int $id)
    {
        return User::with('article')->where('id', $id)->get();
    }

    public function edit($request)
    {
        $user = User::where('id', $request->id)->first()->update([
            'name' => $request->username,
            'surname' => $request->surname,
            'email' => $request->email
        ]);

        return $user;

    }
}
