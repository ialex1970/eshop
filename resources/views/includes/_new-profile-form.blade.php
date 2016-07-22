{!! Form::open(['route' => 'create.order', 'method' => 'post']) !!}
<!-- Name Form Input -->
<div class="form-group">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', Auth::user()->name, ['class' => 'form-control', 'disabled']) }}
</div>

<!-- Email Form Input -->
<div class="form-group">
    {{ Form::label('email', 'Email:') }}
    {{ Form::text('email', Auth::user()->email, ['class' => 'form-control', 'disabled']) }}
</div>

<!-- Address Form Input -->
<div class="form-group">
    {{ Form::label('address', 'Address:') }}
    {{ Form::text('address', null, ['class' => 'form-control', 'required']) }}
</div>

<!-- Phone Form Input -->
<div class="form-group">
    {{ Form::label('phone', 'Phone:') }}
    {{ Form::text('phone', null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    {!! Form::submit('Оформить', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}