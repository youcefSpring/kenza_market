@extends('layouts.admin')

@section('content')
<title>Tableau de bord</title>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-6" class="row">
                <div class="col-xl-6 col-16">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="la la-file" ></i></h1>
                                    </div>
                                    <div class="col-8 pl-2">
                                        <h4>Produits</h4>

                                    </div>
                                    <div class="col-5 text-right">
                                        <h4 style="color: darkblue"><b>{{ $a['nbrP'] }}</b></h4>
                                        {{-- <h6 class="success darken-4">31 <i class="la la-arrow-up"></i></h6> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>


                    </div>

                </div>

            </div>
            <!--/ Sell Orders & Buy Order -->

        </div>
    </div>
</div>

@endsection
