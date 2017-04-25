@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dodawanie pojazdów</div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {!! Form::open(['url' => 'saveVehicle', 'class' => 'form-horizontal']) !!}

                            <div class="row">
                                <div class="form-group">

                                    <div class="col-md-4 control-label">
                                        {!! Form::label('name', 'Nazwa:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('capacity', 'Pojemność:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('capacity', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('payload', 'Ładowność:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('payload', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('registration', 'Numer rejestracyjny:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::date('registration', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        {!! Form::label('combustion', 'Spalanie:') !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::date('combustion', null, ['class' => 'form-control']) !!}
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
