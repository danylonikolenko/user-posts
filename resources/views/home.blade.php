@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addArticle">
                    Add post
                </button>
                @include('modals.addArticle')
                @include('modals.updateArticle')

                <div class="row  d-flex justify-content-around">

                    @foreach($articles as $article)

                        <td>
                            <div class="card" style="width: 18rem; margin-top: 10px " id="card{{$article['id']}}">
                                <img src="{{asset($article['image'])}}" class="card-img-top"
                                     alt="{{$article['alt_text']}}">
                                <input class="alt-text" type="hidden" value="{{$article['alt_text']}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{$article['title']}}</h5>
                                    <p class="">Author: {{$article['user']['name']}}</p>
                                </div>

                                <button type="button" data-toggle="modal" data-target="#updateArticle"
                                        class="update-but btn btn-secondary" data-update="{{$article['id']}}">Update
                                </button>
                                <button type="button"  class="delete-but btn btn-danger"
                                        data-delete="{{$article['id']}}">Delete
                                </button>
                            </div>
                        </td>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
