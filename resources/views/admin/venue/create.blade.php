@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'admin.venue.store','method' => 'POST', 'files' => 'true']) !!}
                {!! Form::label('club_name','Club Name:') !!}
                {!! Form::text('club_name',null,['class' => 'form-control']) !!}
                
                {!! Form::label('address_1', 'Address 1:') !!}
                {!! Form::text('address_1',null,['class' => 'form-control']) !!}
                
                {!! Form::label('address_2','Address 2:') !!}
                {!! Form::text('address_2',null,['class' => 'form-control']) !!}
                
                {!! Form::label('city_town','City/Town:') !!}
                {!! Form::text('city_town',null,['class' => 'form-control']) !!}
                
                {!! Form::label('county','County:') !!}
                {!! Form::text('county',null,['class' => 'form-control']) !!}
                
                {!! Form::label('post_code', 'Post Code: ') !!}
                {!! Form::text('post_code',null,['class' => 'form-control']) !!}
                
                {!! Form::label('thumbnail','Image of venue:') !!}
                {!! Form::file('thumbnail',null,['class' => 'form-control']) !!}
                
                {!! Form::label('description','Description: ') !!}
                {!! Form::textarea('description',null,['class' => 'form-control']) !!}
                
                {!! Form::submit('Add Team',['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection