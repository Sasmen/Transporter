@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dodawanie kierowcy</div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {!! Form::open(['url' => 'admin/saveDriver', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                            <div class="row">
                                <div class="form-group {{ $errors->has('forename') ? ' has-error' : '' }}">

                                    <div class="col-md-4 control-label">
                                        {!! Form::label('forename', 'Imię:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('forename', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('forename'))
                                            <span class="help-block"><strong>{{ $errors->first('forename') }}</strong></span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('surname') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('surname', 'Nazwisko:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('surname'))
                                            <span class="help-block"><strong>{{ $errors->first('surname') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('phone', 'Numer telefonu:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('phone'))
                                            <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('commencement') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('commencement', 'Data zatrudnienia:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::date('commencement', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('commencement'))
                                            <span class="help-block"><strong>{{ $errors->first('commencement') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('name', 'Login:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('name'))
                                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('password', 'Hasło:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                        @if ($errors->has('password'))
                                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('email', 'Mail:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('email'))
                                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
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
                </div>
            </div>
        </div>
    </div>
@endsection
