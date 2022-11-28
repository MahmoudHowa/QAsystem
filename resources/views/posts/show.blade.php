@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <div class="card-body">
                        <h2 class="text-center text-bg-dark" style="border-radius: 20px">Q & A system</h2>
                        <br>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->description}}</p>
                        <hr style="background-color: #464343">
                        <h4 class="text-primary">Comments:</h4>
                        @include('posts.comments', ['comments'=>$post->comments, 'post_id'=>$post->id])
                        <hr style="background-color: #464343">
                        <form method="POST" action="{{route('comments.store')}}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="description"></textarea>
                                <input type="hidden" class="form-control" name="post_id" value="{{$post->id}}">
                                {{-- <input type="hidden" class="form-control" name="comment_id" value="{{$comment_id}}> --}}
                            </div>
                            <button type="submit" class="btn btn-primary">Add Comments</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
