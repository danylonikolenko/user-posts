<?php


namespace App\Http\Controllers\Api;



use App\Repositories\ArticleRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApiController
{
    protected $articleRepository;
    protected $userRepository;

    public function __construct(UserRepository $userRepository, ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {

        if (isset($request->id)){
            $id = $request->id;
            $user = $this->userRepository->getById($id)->first();
            if(!$user)
                return json_encode([
                    'error' => "user with id not found"
                ]);
            $lastArticle = $this->articleRepository->getByUserId($id)->first();
            $usersWithArticles = $this->userRepository->getWithArticlesById($id)->first();

            if(!$lastArticle){
                $title = '';
                $count = 0;
                $image = '';
            }else{
                $title = $lastArticle->title;
                $count = $usersWithArticles->article->count();
                $image = env('APP_URL') . "/" . $lastArticle->image;
            }

            return json_encode([
                'username' => $user->name,
                'last_post_title' =>$title ,
                'count_of_posts' => $count,
                'image' => $image
            ]);
        }else{
            return json_encode([
               'error' => "id is empty"
            ]);
        }

    }

}
