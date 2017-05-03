@extends('layouts.app')
@section('content')

    <div class="panel-heading">Opcje zleceń</div>
    <div class="panel-body">
        <a href="{{ route('addOrder') }}" class="btn btn-primary">Dodaj zlecenie</a>
    </div>

    @if(count($orders) != null )
        <div class="panel-heading">Lista zleceń</div>

        <table class="table text-center">
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">Nazwa</th>
                <th class="text-center">Cena</th>
                <th class="text-center">Data rozpoczęcia</th>
                <th class="text-center">Pojemność pojazdu</th>
                <th class="text-center">Ładowność pojazdu</th>
                <th class="text-center">Data zakończnia</th>
                <td class="text-center">Opcje</td>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->date_start}}</td>
                    <td>{{$order->capacity}}</td>
                    <td>{{$order->payload}}</td>
                    <td>{{$order->date_end}}</td>
                    <td>

                        {!! Form::model($order,['method' => 'POST', 'action' => ['OrderController@endOrder', $order->id]]) !!}
                        {!! Form::submit('Zakończ', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}

                        {!! Form::model($order,['method' => 'DELETE', 'action' => ['OrderController@destroy', $order->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="panel-body text-center">

            {{$orders->links()}}
        </div>
    @else
        <div class="panel-body">
            <div class="alert alert-info">
                Brak zleceń :(
            </div>
        </div>
    @endif
@endsection