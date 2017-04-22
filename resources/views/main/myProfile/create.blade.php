@extends('layouts.main')

@section('HTMLTitle')
    Create Profile
@endsection

@section('HTMLHeadScripts')
        <script src="/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
@endsection

@section('contents')
            <!-- START PAGE TITILE SECTION -->
			<div class="player-profile-section page-title-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="section-title profile-title">
                                <h1>Create Profile Section</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pagination-area">
                                <ul>
                                    <li><a href="{{ route('default.index') }}">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="{{ route('myProfile.create') }}">Create Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF /. PAGE TITLE SECTION -->
			
			<div class="player-carear-details">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            {!! Form::open(['route' => 'myProfile.store', 'method' => 'POST']) !!}
                                {!! Form::label('dob','Date Of Birth:') !!}
                                {!! Form::date('dob',null,['class' => 'form-control']) !!}
                                
                                {!! Form::label('height','Height:') !!}
                                {!! Form::number('height',null,['class' => 'form-control', 'placeholder' => 'in cm', 'step' => 'any']) !!}
                                
                                {!! Form::label('weight','Weight:') !!}
                                {!! Form::number('weight',null,['class' => 'form-control', 'placeholder' => 'in kg', 'step' => 'any']) !!}
                                
                                {!! Form::label('nationality', 'Nationality:') !!}
                                {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
                                
                                {!! Form::label('debut', 'Debut:') !!}
                                {!! Form::text('debut',null,['class' => 'form-control']) !!}
                                
                                {!! Form::label('shirt_number', 'Shirt Number:') !!}
                                {!! Form::number('shirt_number',null,['class' => 'form-control']) !!}
                                
                                {!! Form::label('description','Description:') !!}
                                {!! Form::textarea('description',null,['class' => 'form-control']) !!}
                                
                                {!! Form::label('twitter','Twitter Username:') !!}
                                {!! Form::text('twitter',null,['class' => 'form-control', 'placeholder' => '@username']) !!}
                                
                                {!! Form::label('facebook','Facebook:') !!}
                                {!! Form::text('facebook',null,['class' => 'form-control', 'placeholder' => 'username']) !!}
                                
                                {!! Form::label('instagram','Instagram:') !!}
                                {!! Form::text('instagram',null,['class' => 'form-control', 'placeholder' => 'username']) !!}
                                
                                {!! Form::label('snapchat','Snapchat:') !!}
                                {!! Form::text('snapchat',null,['class' => 'form-control', 'placeholder' => 'username']) !!}
                                
                                {!! Form::submit('Add Profile',['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div> 
            
@endsection