@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dodawanie kierowcy</div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {!! Form::open(['url' => 'saveDriver', 'class' => 'form-horizontal']) !!}

                            <div class="row">
                                <div class="form-group">

                                    <div class="col-md-4 control-label">
                                        {!! Form::label('name', 'Imię:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('surname', 'Nazwisko:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('phone', 'Numer telefonu:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('commencement', 'Data zatrudnienia:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::date('commencement', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('name', 'Login:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('password', 'Hasło:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('email', 'Mail:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {!! Form::submit("Przeslij", ['class' => 'btn btn-primary']) !!}
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
