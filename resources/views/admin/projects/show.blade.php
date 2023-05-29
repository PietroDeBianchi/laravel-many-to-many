@extends('layouts.admin')

@section('page-title', $project->title)

@section('content')

<div class="container">
    <div>
        <h1>{{$project->title}}</h1>
        <h4>{{$project->sub_title}}</h4>
        <p>{{$project->skill?$project->skill->type:'NULL'}}</p>
        <p>{{$project->description}}</p>
    </div>
    <div>
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Go Back to List</a> 
    </div>
</div>


@endsection