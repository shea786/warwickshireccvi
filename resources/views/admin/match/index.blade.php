@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('admin.match.create') }}" class="btn btn-success">Add Match</a>
        </div>
    </div>
@endsection