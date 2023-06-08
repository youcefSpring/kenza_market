@extends('Stock.layouts.admin')

@section('content')
<title>Tableau de bord</title>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-3 col-16">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                    </div>
                                    <div class="col-8 pl-2">
                                        <h4>Nombres Employees</h4>

                                    </div>
                                    <div class="col-5 text-right">
                                        {{-- <h4 style="color: darkblue"><b>{{ $nbrEmps }}</b></h4> --}}
                                        {{-- <h6 class="success darken-4">31 <i class="la la-arrow-up"></i></h6> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="btc-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>Entraineurs</h4>

                                    </div>
                                    <div class="col-5 text-right">
                                        {{-- <h4>{{ $nbrcoach }}</h4> --}}
                                        {{-- <h6 class="succes darken-4">12% <i class="la la-arrow-up"></i></h6> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="eth-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>Adhérents</h4>

                                    </div>
                                    <div class="col-5 text-right">
                                        {{-- <h4>{{ $nbradherent }}</h4> --}}
                                        {{-- <h6 class="danger">20% <i class="la la-arrow-down"></i></h6> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>Admins</h4>

                                    </div>
                                    <div class="col-5 text-right">
                                        {{-- <h4>{{ $nbradmin }}</h4> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- Candlestick Multi Level Control Chart -->

            <!-- Sell Orders & Buy Order -->


                {{-- <div class="card crypto-card-3 pull-up">
                    <div class="card-content">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-2">
                                    <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                </div>
                                <div class="col-5 pl-2">
                                    <h4>Somme Argents</h4>

                                </div>
                                <div class="col-5 text-right">
                                    {{-- <h4>{{ $sum }} DA</h4> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <canvas id="xrp-chartjs" class="height-75"></canvas>
                            </div>
                        </div>
                    </div>

                </div> --}}

            </div>
            <!--/ Sell Orders & Buy Order -->

        </div>
    </div>
</div>

@endsection
