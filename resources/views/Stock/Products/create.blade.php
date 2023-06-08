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
                                <h4 class="card-title" id="basic-layout-form"> Ajouter un Produit </h4>
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
                                    <form class="form" action="{{ route('stock.ProductStore')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                          <input type="hidden" name="id" value="">

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>   Les informations du Nouveau  Produit </h4>


                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Désignation </label>
                                                        <input type="text" value="{{ old('designation') }}" id="designation"
                                                               class="form-control"
                                                               placeholder="Désignation"
                                                               name="designation"
                                                               minlength="3"
                                                               required>
                                                        @error('designation')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Type </label>
                                                        <input type="email" value="{{ old('type') }}" id="type"
                                                               class="form-control"
                                                               placeholder="type"
                                                               name="type"
                                                               required>
                                                        @error('type')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Date Expiration </label>
                                                        <input type="date" value="{{ old('date_expiration') }}" id="date_expiration"
                                                               class="form-control"
                                                               name="date_expiration"
                                                               required>
                                                        @error('date_expiration')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Prix Achat   </label>
                                                        <input type="number" value="{{ old('prix_achat') }}" id="prix_achat"
                                                               class="form-control"
                                                               placeholder="Prix Achat "
                                                               name="prix_achat"
                                                               minlength="3"
                                                               required>
                                                        @error('prix_achat')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Prix Vente   </label>
                                                        <input type="number" value="{{ old('prix_vente') }}" id="prix_vente"
                                                               class="form-control"
                                                               placeholder="Prix vente "
                                                               name="prix_vente"
                                                               minlength="3"
                                                               required>
                                                        @error('prix_vente')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Quantité  </label>
                                                        <input type="number" value="{{ old('qte') }}" id="qte"
                                                               class="form-control"
                                                               placeholder="Quantité"
                                                               name="qte"
                                                               minlength="3"
                                                               required>
                                                        @error('qte')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">   Photo </label>
                                                            <input type="file" value="{{ old('img') }}" id="img"
                                                                   class="form-control"
                                                                   placeholder="Photo"
                                                                   style="height: 120px"
                                                                   name="img"
                                                                   required>
                                                            @error('img')
                                                                <span class="text-danger">{{ $message }}<span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  Description </label>
                                                            <textarea type="text" value="{{ old('description') }}" id="description"
                                                                   class="form-control"
                                                                   name="description"
                                                                   minlength="3"
                                                                   style="height: 120px"
                                                                   >
                                                            </textarea>
                                                            @error('description')
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
