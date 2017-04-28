@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'admin.teams.store','method' => 'POST', 'files' => 'true']) !!}
                {!! Form::label('name','Team Name:') !!}
                {!! Form::text('name',null,['class' => 'form-control']) !!}
                
                {!! Form::label('venue','Venue:') !!}
                {!! Form::select('venue', $venues, null, ['class' => 'form-control']) !!}
                
                {!! Form::label('description','Description:') !!}
                {!! Form::textarea('description',null,['class' => 'form-control']) !!}
                
                {!! Form::label('logo','Logo:') !!}
                {!! Form::file('logo',null,['class' => 'form-control']) !!}
                
                {!! Form::submit('Add Team',['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection