@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div> <a style="font-size:20px;" href="{{URL::to('tasks') }}"> Afisare toate
                            sarcinile</a> </div>
                    <div> <a style="font-size:20px;" href="{{URL::to('products-admin') }}"> Afisare toate
                            produsele</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
