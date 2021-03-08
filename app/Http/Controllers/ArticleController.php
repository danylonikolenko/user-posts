<?php


namespace App\Http\Controllers;


use App\Services\ArticleService;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        return view('home', [
            'articles' => $this->articleService->allWithAuthorName(),
        ]);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'alt_text' => 'required|string|min:5',
        ]);

        $this->articleService->update($request);

        return redirect('/');
    }

    public function delete(Request $request)
    {
        if ($this->articleService->delete($request->id)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:4024',
            'alt_text' => 'required|string|min:5',

        ]);
        $this->articleService->save($request);

        return redirect('/');
    }
}
