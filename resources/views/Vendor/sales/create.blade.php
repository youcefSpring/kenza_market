@extends('Vendor.layouts.admin')

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
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> Ajouter une vente </h4>
                                {{-- <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a> --}}
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>

                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            @include('Dashboard.includes.alerts.success')
                            @include('Dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('vendor.SaleStore')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <table class="table table-bordered" id="dynamicAddRemove">
                                            <tr>
                                            <th>Produit</th>
                                            <th>Quantité</th>
                                            <th>Actions</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select
                                                         name="moreFields[0][product_id]"
                                                         id="product_id"
                                                         class="form-control">
                                                        @foreach ($products as $p )
                                                            <option value="{{ $p->id }}">{{ $p->designation }}</option>
                                                        @endforeach
                                                    </select>

                                                </td>

                                                <td>
                                                <input type="number" value="" id="fichier"
                                                       class="form-control"
                                                       multiple="multiple"
                                                       min="1"
                                                       name="moreFields[0][qte]"
                                                       required>
                                                </td>
                                                <td>
                                                        <button
                                                          type="button"
                                                          name="add"
                                                          id="add-btn"
                                                          class="btn btn-success"
                                                          >
                                                          <i class="la la-plus"></i>
                                                          Ajouter
                                                        </button>
                                                </td>

                                            </tr>
                                        </table>
                                            <button type="submit" class="btn btn-info">
                                                <i class="la la-save"></i>
                                                Enregistrer</button>

                                    </form>
                                </div>
                            </div>
                        </div></div></div></section></div></div></div>



<script type="text/javascript">
    var i = 0;
    var products=@json($products);
    // console.log(products);
    $("#add-btn").click(function(){
    ++i;
    $("#dynamicAddRemove").append('<tr>'
    +'<td> <select class="form-control" name="moreFields['+i+'][product_id]">'
     +'<option value="1">Produit 1</option>'
     +'<option value="2">Produit 2</option>'
     +'<option value="3">Produit 3</option>'
     +'<option value="4">Produit 4</option>'
    +'</select></td>'
    + '<td><input type="number" value="" id="fichier" min="1" class="form-control"  name="moreFields['+i+'][qte]"  required></td>'
    +'<td><button type="button" class="btn btn-danger remove-tr"><i class="la la-trash"></i>Retirer</button></td></tr>');

    });
    $(document).on('click', '.remove-tr', function(){
    $(this).parents('tr').remove();
    });
    </script>
@stop
