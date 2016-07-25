@extends('layouts.user')

@section('content')

    <div class="container">
        <h1 class="text-center">Обратная связь</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'send.contact', 'method' => 'post']) !!}
            <!-- Name Form Input -->
                <div class="form-group">
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <!-- Message Form Input -->
                <div class="form-group">
                    {{ Form::label('message', 'Message:') }}
                    {{ Form::textarea('message',null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>



@stop