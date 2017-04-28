@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'admin.matchType.store']) !!}
                {!! Form::label('display_name','Match Type Display Name: ') !!}
                {!! Form::text('display_name',null,['class' => 'form-control']) !!}
                
                {!! Form::label('name','Match Type HTML Name: ') !!}
                {!! Form::text('name',null,['class' => 'form-control']) !!}
                
                {!! Form::label('description','Match Type Description: ') !!}
                {!! Form::textarea('description',null,['class' => 'form-control']) !!}
                
                {!! Form::submit('Add Match Type',['class' => ' btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection