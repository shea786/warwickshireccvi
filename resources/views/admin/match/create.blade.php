@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open() !!}
                {!! Form::label('matchType','Match Type:') !!}
                {!! Form::text('matchType',null,['class' => 'form-control']) !!}
                
                {!! Form::label('hometeam','Home Team:') !!}
                {!! Form::select('hometeam', $teams, null, ['class' => 'form-control']) !!}
                
                {!! Form::label('awayteam','Away Team:') !!}
                {!! Form::select('awayteam', $teams, null, ['class' => 'form-control']) !!}
                
                {!! Form::label('venue', 'Venue:') !!}
                {!! Form::text('venue',null,['class' => 'form-control']) !!}
                
                {!! Form::label('start_date_and_time','Match Start & Time:') !!}
                <input type="datetime-local" name="start_date_and_time" class="form-control">
                
                {!! Form::submit('Add Match',['class' => ' btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection