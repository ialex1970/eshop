{!! Form::model($user, ['route' => 'create.order', 'method' => 'post']) !!}
    <!-- Name Form Input -->
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'disabled']) }}
    </div>

    <!-- Email Form Input -->
    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control', 'disabled']) }}
    </div>

    <!-- Address Form Input -->
    <div class="form-group">
        {{ Form::label('address', 'Адрес доставки:') }}
        {{ Form::text('address', $user->profile->address, ['class' => 'form-control']) }}
    </div>

    <!-- Phone Form Input -->
    <div class="form-group">
        {{ Form::label('phone', 'Телефон:') }}
        {{ Form::text('phone', $user->profile->phone, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {!! Form::submit('Оформить заказ', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}