<?php


namespace App\Repositories\Interfaces;


use App\Models\User;

interface UserInterface
{
    public function all();

    public function getById(int $id);

    public function edit($request);
}
