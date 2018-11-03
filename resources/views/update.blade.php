@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <div class="col-lg-12">
                <form action="/todo/{{$todo->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <input type="text" value="{{$todo->todo}}" class="form-control input-lg" name="todo" placeholder="Update Todo">
                </form>
            </div>
        </div>
    </div>
@endsection

