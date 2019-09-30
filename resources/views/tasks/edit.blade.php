@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('tasks.update',$edit['id'])}}" method="POST" >
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="task">Task Title</label>
                <input name='task' type="text" class="form-control" value="{{$edit->task}}"  aria-describedby="task title" placeholder="Enter task title">

            </div>


            <button type="submit" class="btn btn-primary">Add task </button>
        </form>
    </div>

@endsection
