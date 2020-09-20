@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">{{$todo->name}}</h1>

    <div class="card card-default">

        <div class="card-header">

        </div>

        <div class="card-body">
            {{$todo->description}}
        </div>
    </div>
    <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm my-2">Edit</a>
    <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm my-2">Delete</a>
@endsection()
