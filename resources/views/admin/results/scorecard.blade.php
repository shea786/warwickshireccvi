@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>{{ $scorecard->match->home_team_model->name }} vs {{ $scorecard->match->away_team_model->name }}</th>
                </tr>
                <tr>
                    <th>Won the toss</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>{{ $scorecard->tossModel->name }}</td>
                    <td>{{ $scorecard->toss_result }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection