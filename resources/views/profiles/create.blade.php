@extends('layouts.public')
@section('content')
    <h1 class="page-heading">Create Your Outlyft Profile</h1>

    <hr>
    <div class="form-container" style="width: 55%" text-align="right">
        {!! Form::open(['route' => 'profiles.store', 'class' => 'profile-form']) !!}

        @include('partials.errors')

        <div class="col-lg-12">
            <div class="profile_head">
                <h2>{{ $user->name }}</h2>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('nickname', 'Nickname:') !!}
                {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('sex', 'Male/Female:') !!}
                {!! Form::text('sex', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('skill_level', 'Skill Level:') !!}
                {!! Form::select('skill_level', array('Novice' => 'Novice', 'Amateur' => 'Amateur', 'Pro' => 'Pro', 'Freakbeast' => 'Freakbeast'), 'Novice', ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('gym_id', 'Pick your Home Gym') !!}
                {!! Form::select('gym_id', $gyms, null, ['class' => 'form-control']) !!}

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('class_id', 'Pick your Weight Class') !!}
                {!! Form::select('class_id', $weightClasses, null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('bio', 'Tell us a little about yourself') !!}
                {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                {!! Form::hidden('role', 1, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary btn-submit">
                    Submit your Profile
                </button>
            </div>
        </div>

        {!! Form::close() !!}
        <div class="clearfix"></div>
    </div>

@stop

