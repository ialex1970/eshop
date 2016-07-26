@extends('layouts.user')

@section('content')

    <div class="container">
        <h1 class="text-center">Обратная связь</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'send.contact', 'method' => 'post', 'id' => 'form']) !!}
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

                <div class="g-recaptcha" data-sitekey="6Ld6AiYTAAAAAAOt2-vOYBU5hXc4It4fpyiBws21"></div>

                <div class="form-group">
                    {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(function () {
            $('#form').submit(function (event) {
                var verified = grecaptcha.getResponse();
                if(verified.length === 0) {
                    event.preventDefault();
                }
            });
        });
    </script>
@stop