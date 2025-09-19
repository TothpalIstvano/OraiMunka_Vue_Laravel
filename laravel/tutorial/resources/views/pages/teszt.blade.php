@extends('layouts.app')
@section('title', '| Teszt')


@section('content')
        
    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p class="lead">Ez az első demó rout-unk!</p>
        <a href="https://szbi-pg.hu" class="btn btn-lg btn-primary" role="button">Learn more</a>
        <p>{{ date('Y.m.d. H:i:s') }}</p>
        <P>{{ $randomName }}</P>
    </div>  

@endsection