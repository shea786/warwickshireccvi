@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('admin.teams.create') }}" class="btn btn-success">Add Team</a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Venue</th>
                    <th>Logo</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->venue_id }}</td>
                        <td><img src="/uploads/teams/{{ $team->id }}/{{ $team->logo }}" width="100" height="100"></td>
                        <td>{!! $team->description !!}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection