<?php


namespace App\Repositories\Interfaces;


use App\Models\Article;

interface ArticleInterface
{
    public function save($request);

    public function all();

    public function getById(int $id);

    public function update($request);
}
