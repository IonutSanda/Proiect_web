@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            View Task
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a href="{{route('tasks.index')}}" class="btn btn-default">Inapoi</a>
            </div>
            <div class="form-group">
                <strong>Nume: </strong>{{$task->name}}
            </div>
            <div class="form-group">
                <strong>Descriere:</strong>{{$task->description}}
            </div>
        </div>
    </div>
    @endsection