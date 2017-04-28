@extends('layouts.admin')

@section('contents')
    Username: {{ \Auth::user()->username }}
@endsection