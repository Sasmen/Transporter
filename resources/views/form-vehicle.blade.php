@extends('layouts.app')

@section('content')

                    <div class="panel-heading">Dodawanie pojazdów</div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {!! Form::open(['url' => 'admin/saveVehicle', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                            <div class="row">
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('name', 'Pojazd:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('name'))
                                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('capacity') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('capacity', 'Pojemość:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                        {!! Form::text('capacity', null, ['class' => 'form-control']) !!}
                                            <span class="input-group-addon">m3</span>
                                        </div>
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
                                        {!! Form::text('payload', null, ['class' => 'form-control']) !!}
                                        <span class="input-group-addon">kg</span>
                                        </div>
                                        @if ($errors->has('payload'))
                                            <span class="help-block"><strong>{{ $errors->first('payload') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('registration') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('registration', 'Numer rejestracyjny:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::text('registration', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('registration'))
                                            <span class="help-block"><strong>{{ $errors->first('registration') }}</strong></span>
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
                                            <span class="input-group-addon">litrów / 100 km</span>
                                        </div>
                                        @if ($errors->has('combustion'))
                                            <span class="help-block"><strong>{{ $errors->first('combustion') }}</strong></span>
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
