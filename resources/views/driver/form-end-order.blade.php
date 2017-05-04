@extends('layouts.app')
@section('content')

    <div class="panel-heading">Dokończ zlecenie</div>
    <div class="panel-body">
        <div class="form-horizontal">

            {!! Form::open(['url' => 'driver/updateOrder', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            <div class="row">
                <div class="form-group hidden {{ $errors->has('id') ? ' has-error' : '' }}">

                    <div class="col-md-4 control-label">
                        {!! Form::label('id', 'Id:') !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('id', $order->id, ['class' => 'form-control']) !!}
                        @if ($errors->has('id'))
                            <span class="help-block"><strong>{{ $errors->first('id') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                <div class="col-md-4 control-label">
                        {!! Form::label('name', 'Nazwa:') !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('name', $order->name, ['class' => 'form-control', 'disabled']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                </div>
        </div>
                <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                    <div class="col-md-4 control-label">
                        {!! Form::label('price', 'Cena:') !!}
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!! Form::text('price', $order->price, ['class' => 'form-control', 'disabled']) !!}
                            <span class="input-group-addon">zł</span></div>
                        @if ($errors->has('price'))
                            <span class="help-block"><strong>{{ $errors->first('price') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('date_start') ? ' has-error' : '' }}">
                    <div class="col-md-4 control-label">
                        {!! Form::label('date_start', 'Data rozpoczęcia:') !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::date('date_start', $order->date_start, ['class' => 'form-control', 'disabled']) !!}
                        @if ($errors->has('date_start'))
                            <span class="help-block"><strong>{{ $errors->first('date_start') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('capacity') ? ' has-error' : '' }}">
                    <div class="col-md-4 control-label">
                        {!! Form::label('capacity', 'Pojemność:') !!}
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!! Form::text('capacity', $order->capacity, ['class' => 'form-control', 'disabled']) !!}
                            <span class="input-group-addon">m3</span></div>
                        @if ($errors->has('capacity'))
                            <span class="help-block"><strong>{{ $errors->first('capacity') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('payload') ? ' has-error' : '' }}">
                    <div class="col-md-4 control-label">
                        {!! Form::label('payload', 'Ładowność:') !!}
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!! Form::text('payload', $order->payload, ['class' => 'form-control', 'disabled']) !!}
                            <span class="input-group-addon">kg</span></div>
                        @if ($errors->has('payload'))
                            <span class="help-block"><strong>{{ $errors->first('payload') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('combustion') ? ' has-error' : '' }}">
                    <div class="col-md-4 control-label">
                        {!! Form::label('combustion', 'Spalanie:') !!}
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!! Form::text('combustion', null, ['class' => 'form-control']) !!}
                            <span class="input-group-addon">l / 100 km</span></div>
                        @if ($errors->has('combustion'))
                            <span class="help-block"><strong>{{ $errors->first('combustion') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('date_end') ? ' has-error' : '' }}">
                    <div class="col-md-4 control-label">
                        {!! Form::label('date_end', 'Data zakończenia:') !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::date('date_end', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('date_end'))
                            <span class="help-block"><strong>{{ $errors->first('date_end') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit("Aktualizuj", ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
