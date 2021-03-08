<?php


namespace App\Services;


use App\Repositories\ArticleRepository;

class ArticleService
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }


    public function all(): array
    {
        return $this->articleRepository->all()->toArray();
    }

    public function allWithAuthorName(): array
    {
        return $this->articleRepository->allWithAuthor()->toArray();
    }

    public function delete(int $id): bool
    {
        if ($this->articleRepository->delete($id)) {
            return true;
        }
        return false;
    }

    public function update($request): bool
    {
        $image = $this->saveImage($request);
        $request->request->add(['image' => $image]); //add request
        if($this->articleRepository->update($request)){
            return true;
        }
        return false;
    }


    public function save($request): bool
    {
        $image = $this->saveImage($request);
        $request->request->add(['image' => $image]); //add request
        if ($this->articleRepository->save($request)) {
            return true;
        }
        return false;
    }

    public function saveImage($request) : string
    {
        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            $image = '/storage/'. $path;
        }else{
            $article = $this->articleRepository->getById($request->id)->first();
            $image = $article->image;
        }
        return $image;
    }

}
