@extends('layouts.app')
@section('content')

    @if(count($orders) != null )
        <div class="panel-heading">Opcje</div>

        <table class="table text-center">
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Nazwa</th>
                <th class="text-center">Cena</th>
                <th class="text-center">Data rozpoczęcia</th>
                <th class="text-center">Pojemność pojazdu</th>
                <th class="text-center">Ładowność pojazdu</th>
                <th class="text-center">Data zakończnia</th>
                <th class="text-center">Spalanie</th>
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
                    <td>{{$order->combustion}}</td>

                    <td>
                        {!! Form::model($order,['method' => 'POST', 'action' => ['OrderDriverController@edit', $order->id]]) !!}
                        {!! Form::submit('Dodaj spalanie', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                        {!! Form::model($order,['method' => 'POST', 'action' => ['OrderDriverController@endOrder', $order->id]]) !!}
                        {!! Form::submit('Zakończ', ['class' => 'btn btn-success']) !!}
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