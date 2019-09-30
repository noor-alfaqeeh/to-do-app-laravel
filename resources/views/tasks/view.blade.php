@extends('layouts.app')

@section('content')

    <table class="table table-hover mt-4">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Task</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $index=>$task)
            <tr>
                <td> {{$index+1}} </td>
                <td> {{$task['task']}} </td>
                <td>
                    <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit Task</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete Task</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


    @endsection
