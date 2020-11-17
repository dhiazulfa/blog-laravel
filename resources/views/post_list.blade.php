@extends('layouts.navbar')
    @section('content')
        <div class="container-fluid">
            <div class="row">
                @include('partials.sidenavbar')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">All Posts
                        </h1>
                        <a href="{{ route('create_post') }}" class="btn btn-primary float-right">Add Post</a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row row-table">
                        @foreach($posts as $post)

                        <div class="col-md-4 col-sm-6 mb-3 col-table">
                                <div class="card border-1 col-content bg">
                                    @if($post->image)
                                        <img class="card-img-top" src="{{ asset('images/'.$post->image) }}" width="140px" height="200px" alt="Blog Post Image">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title"> <b> {{ $post->title }} </b> by <small><i>{{ $post->writer->name }}</i></small></h5>
                                        <p class="card-text">
                                            {{ str_limit($post->body, 100) }}
                                        </p>
                                        <a href="{{ route('edit_post_form', ['post_id' => $post->id]) }}" class="card-link btn btn-primary">Edit</a>
                                        <form action="{{ route('delete_post', ['post_id' => $post->id]) }}" method="post"><br>
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger" >delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    @endsection