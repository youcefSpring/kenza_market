@extends('Stock.layouts.admin')

@section('content')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="app-content content">
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> Ajouter une Livraison </h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>

                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('Dashboard.includes.alerts.success')
                            @include('Dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('stock.DeliveryStore')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                          <input type="hidden" name="id" value="">

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>   Les informations du Nouvelle livraison </h4>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Fournisseurs </label>
                                                       <select name="provider_id" id="provider_id" class="form-control">
                                                           @foreach ($providers as $p )
                                                               <option value="{{ $p->id }}">{{ $p->nom."  ".$p->prenom }}</option>
                                                           @endforeach
                                                       </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Produits </label>
                                                       <select name="product_id" id="product_id" class="form-control">
                                                           @foreach ($products as $p )
                                                               <option value="{{ $p->id }}">{{ $p->designation}}</option>
                                                           @endforeach
                                                       </select>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Date Livraison </label>
                                                        <input type="date" value="{{ old('date_livraison') }}" id="date_livraison"
                                                               class="form-control"
                                                               placeholder="date livraison"
                                                               name="date_livraison"
                                                               minlength="3"
                                                               required>
                                                        @error('date_livraison')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Quantité  </label>
                                                        <input type="number" value="{{ old('qte') }}" id="qte"
                                                               class="form-control"
                                                               placeholder="Quantité"
                                                               name="qte"
                                                              min="1"
                                                               required>
                                                        @error('qte')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                </div>


                                                        <div class="form-actions">
                                                            <button type="reset" class="btn btn-danger mr-1">

                                                                <i class="la la-trash"></i> Reset
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="la la-save"></i> Enregistrer
                                                            </button>
                                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>


<script type="text/javascript">
    var i = 0;

    function addTag(){
    ++i;
    $("#dynamicAddRemove").append('<tr><td> </td> <td>  <input type="date"  id="date" class="form-control" placeholder="date" name="moreFields['+i+'][date]" required></td><td>  <input type="file"  id="fichier" class="form-control" placeholder="date" name="moreFields['+i+'][fichier]" required></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){
    $(this).parents('tr').remove();
    });
    </script>
@stop
