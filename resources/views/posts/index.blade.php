@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Posts</h1>
            <a href="{{route('posts.create')}}" class="btn btn-success" style="float: right">Create</a>
            <br><br>
            <table class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td><a href="{{route('posts.show', $item->id)}}" class="btn btn-secondary">Show</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
