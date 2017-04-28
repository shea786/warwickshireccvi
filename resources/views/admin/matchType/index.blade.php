@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('admin.matchType.create') }}" class="btn btn-success">Add Match Type</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                @foreach ($matchtypes as $matchtype)
                    <tr>
                        <td>{{ $matchtype->id }}</td>
                        <td>{{ $matchtype->name }}</td>
                        <td>{{ $matchtype->display_name }}</td>
                        <td>{{ $matchtype->description }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection