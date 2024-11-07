@extends('layouts.base')

@section('greeting')
    Goedemorgen, {{ auth()->user()->name }}!
@endsection

@section('content')

@endsection
