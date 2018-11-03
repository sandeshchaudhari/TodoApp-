@extends('layouts.app')
@section('content')
    <br><br>
        <div class="col-md-8 col-md-offset-2">
            <form action="/todo" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create Todo">
            </form>
        </div>
        <br>
            Todos
        <br>
            @foreach($todos as $todo)
                <form action="todo/{{$todo->id}}" method="post">
                    <input type="hidden" name="_method" value="delete" />
                    {!! csrf_field() !!}
                    {{$todo->todo}}<button type="submit" class="btn btn-danger">Delete</button>
                    <a href="todo/{{$todo->id}}/edit" class="btn btn-primary">Update</a>
                    @if(!$todo->completed)
                        <a href="todo/completed/{{$todo->id}}" class="btn btn-success">Mark as Completed</a>
                    @else
                        <span class="success">Completed</span>
                    @endif
                <hr>
                </form>
            @endforeach
@endsection

