@extends('user.master')

@section('title', 'SHOW SESSION')

@section('main')
    <div class="container">

        <h3>Session id: {{ $session->id }}</h3>
        <h3>Session start rate: {{ $session->start_rate }}$</h3>
        <h3>Session stop rate: {{ $session->stop_rate }}$</h3>
        <h3>Session start time: {{ date('d-m-Y G:i:s', $session->start_time) }}</h3>
        <h3>Session stop time: {{ date('d-m-Y G:i:s', $session->stop_time) }}</h3>

        <h2>Deals:</h2>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Тикер</th>
                <th scope="col">Сторона</th>
                <th scope="col">Время открытия</th>
                <th scope="col">Время закрытия</th>
                <th scope="col">Длительность</th>
                <th scope="col">id сделки</th>
                <th scope="col">Доход/Убыток</th>
            </tr>
            </thead>

            <tbody>

            @foreach($session->deals as $deal)

                @if($deal->status == 1)

                    <tr>
                        <th scope="row">{{ $deal->ticker }}</th>
                        <td>{{ $deal->sell_or_buy }}</td>
                        <td>@if($deal->start_time){{ date("Y-m-d H:i:s", $deal->start_time)  }}@endif</td>
                        <td>@if($deal->time){{ date("Y-m-d H:i:s", $deal->time)  }}@endif</td>
                        <td>@if($deal->duration){{ $deal->duration }} min @endif</td>
                        <td>{{ $deal->id }}</td>
                        <td>{{ $deal->bonus }}$</td>
                    </tr>

                @endif

            @endforeach

            </tbody>

        </table>



    </div> <!-- /container -->
@endsection
