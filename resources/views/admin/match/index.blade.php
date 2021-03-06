@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('admin.match.create') }}" class="btn btn-success">Add Match</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Match Type</th>
                    <th>Season ID</th>
                    <th>Home Team</th>
                    <th>Away Team</th>
                    <th>Venue</th>
                    <th>Start date and time</th>
                    <th>Actions</th>
                </tr>
                @foreach ($matches as $match)
                    <tr>
                        <td>{{ $match->id }}</td>
                        <td>{{ $match->match_type }}</td>
                        <td>{{ $match->season_id }}</td>
                        <td>{{ $match->home_team_model->name }}</td>
                        <td>{{ $match->away_team_model->name }}</td>
                        <td>{{ $match->venue_model->club_name }}</td>
                        <td>{{ $match->start_date_and_time }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection