@extends('layouts.app')
@section('content')

    <div class="panel-heading">Opcje pojazdów</div>
    <div class="panel-body">
        <a href="{{ route('addVehicle') }}" class="btn btn-primary">Dodaj pojazd</a>
    </div>

    @if(count($vehicles) != null )
        <div class="panel-heading">Lista pojazdów</div>


        <table class="table text-center">
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Imie</th>
                <th class="text-center">Pojemność</th>
                <th class="text-center">Ładowność</th>
                <th class="text-center">Numer rejestracyjny</th>
                <th class="text-center">Spalanie</th>
                <td class="text-center">Opcje</td>
            </tr>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{$vehicle->id}}</td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->capacity}}</td>
                    <td>{{$vehicle->payload}}</td>
                    <td>{{$vehicle->registration}}</td>
                    <td>{{$vehicle->combustion}}</td>
                    <td>
                        {!! Form::model($vehicle,['method' => 'DELETE', 'action' => ['VehicleController@destroy', $vehicle->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="panel-body text-center">

            {{$vehicles->links()}}
        </div>
    @else
        <div class="panel-body">
            <div class="alert alert-info">
                Brak pojazdów :(
            </div>
        </div>
    @endif

@endsection