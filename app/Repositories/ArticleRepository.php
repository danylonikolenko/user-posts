<?php


namespace App\Repositories;


use App\Models\Article;
use App\Repositories\Interfaces\ArticleInterface;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ArticleRepository implements ArticleInterface
{

    public function save($request): Article
    {
        $article = new Article();
        $article->title = $request->title;
        $article->alt_text = $request->alt_text;
        $article->user_id = Auth::id();
        $article->image = $request->image;
        $article->save();

        return $article;
    }

    public function delete(int $id)
    {
       return Article::where('id' , $id)->delete();
    }

    public function allWithAuthor()
    {
        return Article::with('user')->get();
    }

    public function getByUserId(int $id)
    {
        return Article::where('user_id', $id)->latest();
    }

    public function update($request)
    {
        return Article::where('id', $request->id)->update([
           'image' => $request->image,
           'title' => $request->title,
            'alt_text' => $request->alt_text

        ]);
    }

    public function all()
    {
        return Article::all();
    }

    public function getById(int $id)
    {
        return Article::all()->where('id', $id);
    }
}
