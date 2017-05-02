@extends('layouts.app')
@section('content')

    <div class="panel-heading">Opcje kierowców</div>
    <div class="panel-body">
        <a href="{{ route('addDriver') }}" class="btn btn-primary">Dodaj kierowcę</a>
    </div>

    @if(count($drivers) != null )
        <div class="panel-heading">Lista kierowców</div>


        <table class="table text-center">
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">Imie</th>
                <th class="text-center">Nazwisko</th>
                <th class="text-center">Numer telefonu</th>
                <th class="text-center">Data zatrudnienia</th>
                <td class="text-center">Opcje</td>
            </tr>
            @foreach($drivers as $driver)
                <tr>
                    <td>{{$driver->id}}</td>
                    <td>{{$driver->forename}}</td>
                    <td>{{$driver->surname}}</td>
                    <td>{{$driver->phone}}</td>
                    <td>{{$driver->commencement}}</td>
                    <td>
                        {!! Form::model($driver,['method' => 'DELETE', 'action' => ['DriverController@destroy', $driver->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="panel-body text-center">

            {{$drivers->links()}}
        </div>
    @else
        <div class="panel-body">
            <div class="alert alert-info">
                Brak kierowców :(
            </div>
        </div>
    @endif

@endsection