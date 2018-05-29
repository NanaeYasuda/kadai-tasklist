@extends('layouts.app')

@section('content')

    <h1>task list</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    
        {!! link_to_route('tasks.create', 'create page') !!}


@endsection