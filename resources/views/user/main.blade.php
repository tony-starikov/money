@extends('master')

@section('title', 'UserHome')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <h1>UserHome</h1>

            <h3>Money: {{ $user_check }}$</h3>

            <h2>Deals:</h2>

            <div class="row">

                @if($deals)
                    @foreach($deals as $deal)
                        @if($deal->status == 1)
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Deal id {{ $deal->id }}</h5>
                                        <h5 class="card-title">Session id {{ $deal->session_id }}</h5>
                                        <h5 class="card-title">Bonus: {{ $deal->bonus }}$</h5>
                                        <h5 class="card-title">Time: {{ date("Y-m-d H:i:s", $deal->time)  }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                @endif

            </div>

            <h2>Sessions:</h2>

            <div class="row">

                @foreach($sessions as $session)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Session id {{ $session->id }}</h5>
                                </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- /container -->
@endsection
