@extends('layouts.app')

@section('content')

    <h1 class="text-center">Edit Todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit Todo</div>

                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <div class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>
                                @endforeach()
                            </div>
                        </div>
                    @endif
                    <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name" value="{{$todo->name}}" />
                        </div>

                        <div class="form-group">
                            <textarea  placeholder="Description" cols="5" rows="8" class="form-control" name="description">{{$todo->description}}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
