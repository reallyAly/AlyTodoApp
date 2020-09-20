@extends('layouts.app')
@section('content')

    <h1 class="text-center my-5">TODOS</h1>

    <div class="col-md-8 offset-md-2">
        <div class="card card-default">
            <div class="card-header">
                To Do
            </div>
        </div>

        <div class="card-body">
            <ul class="list-group">
                @foreach($todos as $item)
                    @if(!$item->completed)
                    <li class="list-group-item">

                        {{$item->name}}

                        <a href="/todos/{{$item->id}}" class="btn btn-primary" style="float:right; margin-left:10px">View</a>

                        @if(!$item->completed)
                            <a href="/todos/complete/{{$item->id}}" class="btn btn-warning" style="float:right">Complete Todo</a>
                        @endif
                    </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="card card-default">
            <div class="card-header">
                Completed
            </div>
        </div>

        <div class="card-body">
            <ul class="list-group">
                @foreach($todos as $item)

                    @if($item->completed)
                        <li class="list-group-item">

                            {{$item->name}}

                            <a href="/todos/{{$item->id}}" class="btn btn-primary" style="float:right; margin-left:10px">View</a>

                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection()
