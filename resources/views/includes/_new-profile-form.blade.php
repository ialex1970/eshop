{!! Form::open(['route' => 'create.order', 'method' => 'post']) !!}
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

<!-- Address Form Input -->
<div class="form-group">
    {{ Form::label('address', 'Address:') }}
    {{ Form::text('address', null, ['class' => 'form-control']) }}
</div>

<!-- Phone Form Input -->
<div class="form-group">
    {{ Form::label('phone', 'Phone:') }}
    {{ Form::text('phone', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::submit('Оформить', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}