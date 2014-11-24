@extends('layout')

@section('content')
    @foreach($projects as $project)
        <p>{{ $project->project_name }}</p>
    @endforeach
@stop