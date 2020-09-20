@extends('layouts.app')

@section('content')

    <h1 class="text-center">Create Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create todos</div>

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
                    <form action="/store-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name" />
                        </div>

                        <div class="form-group">
                            <textarea  placeholder="Description" cols="5" rows="8" class="form-control" name="description"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
