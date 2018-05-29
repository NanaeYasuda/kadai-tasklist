@extends('layouts.app')

@section('content')

    <h1>detail page of id = {{ $task->id }} </h1>

    <p>{{ $task->content }}</p>
    
      {!! link_to_route('tasks.edit', 'edit this task', ['id' => $task->id]) !!}
 
      {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete') !!}
      {!! Form::close() !!}

@endsection