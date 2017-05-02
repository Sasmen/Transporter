@extends('layouts.app')
@section('content')

                    <div class="panel-heading">Dodawanie zleceń</div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {!! Form::open(['url' => 'admin/saveOrder', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                            <div class="row">
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                                    <div class="col-md-4 control-label">
                                        {!! Form::label('name', 'Nazwa:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('name'))
                                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('price', 'Cena:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                        {!! Form::text('price', null, ['class' => 'form-control']) !!}
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
                                        {!! Form::date('date_start', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('date_start'))
                                            <span class="help-block"><strong>{{ $errors->first('date_start') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('driver') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('driver_id', 'Kierowca:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('driver_id', $drivers, null, ['class' => 'form-control selectpicker']) !!}
                                        @if ($errors->has('driver_id'))
                                            <span class="help-block"><strong>{{ $errors->first('driver_id') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {!! Form::submit("Dodaj", ['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
@endsection
