@extends('layouts.admin')

@section('content')
@livewireStyles

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


            <!-- Sell Orders & Buy Order -->
            <div class="row ">

                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des produits </h4>

                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    {{-- <li><a data-action="collapse"><i class="ft-minus"></i></a></li> --}}
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>


                                </ul>
                            </div>
                        </div>

                        @include('Dashboard.includes.alerts.success')
                        @include('Dashboard.includes.alerts.errors')
                        <div class="center card-content">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-md-4">
                                        <button  class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                            <i class="la la-plus-square"></i> Ajouter
                                        </button>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">

                                    </div>

                                    <br>
                                   </div>
                                   <br>
                                <table class="table table-bordered mb-0 " id="seancetab" border="2" cellpadding="3">

                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom</th>
                                                <th>Magasin</th>
                                                {{-- <th>Utilisateur</th> --}}
                                                <th>Prix</th>
                                                <th>Quantité</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($produits as $produit)
                                                <tr>
                                                    <td><img src="{{ isset($produit->image) ? asset('uploads/produits/'.$produit->image) : asset('uploads/produits/prod_test.jpeg')}}" height="80" width="80" alt=""></td>
                                                    <td>{{ $produit->nom }}</td>
                                                    <td>{{ $produit->magasin->nom }}</td>
                                                    {{-- <td>{{isset($produit->user)? $produit->user->name : ''}}</td> --}}
                                                    <td>{{ $produit->prix }}</td>
                                                    <td>{{ $produit->quantite }}</td>
                                                    <td>
                                                        <button  class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal{{$produit->id}}">
                                                            <i class="la la-edit"></i>
                                                        </button>
                                                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit " class="btn btn-danger btn-sm"><i class="la la-trash" onclick="return confirm('Vous êtes sur ?');"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>






                                                    <div class="modal fade" id="exampleModal{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              {{-- <h5 class="modal-title" id="exampleModalLabel">Edit Document</h5> --}}
                                                              <h5 class="modal-title" id="exampleModalLabel"> Modifier Produits</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div>
                                                                        <label for="magasin_id">Magasin :</label>
                                                                        <select name="magasin_id" id="magasin_id" class="form-control col-md-10">
                                                                            @foreach ($magasins as $magasin)
                                                                                <option value="{{ $magasin->id }}" {{ $magasin->id === $produit->magasin_id ? 'selected' : '' }}>
                                                                                    {{ $magasin->nom }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div>
                                                                        <label for="nom">Nom :</label>
                                                                        <input class="form-control col-md-10" type="text" name="nom" id="nom" value="{{ $produit->nom }}" required>
                                                                    </div>
                                                                    <div>
                                                                        <label for="image">Image :</label>
                                                                        <input class="form-control col-md-10" type="file" name="image" id="image">
                                                                    </div>
                                                                    <div>
                                                                        <label for="prix">Prix :</label>
                                                                        <input class="form-control col-md-10" type="number" name="prix" id="prix" step="0.01" min="0" value="{{ $produit->prix }}" required>
                                                                    </div>
                                                                    <div>
                                                                        <label for="prix_promo">Prix promotionnel :</label>
                                                                        <input class="form-control col-md-10" type="number" name="prix_promo" id="prix_promo" step="0.01" min="0"
                                                                            value="{{ $produit->prix_promo }}" placeholder="Optionnel">
                                                                    </div>
                                                                    <div>
                                                                        <label for="quantite">Quantité :</label>
                                                                        <input class="form-control col-md-10" type="number" name="quantite" id="quantite" min="0" value="{{ $produit->quantite }}" required>
                                                                    </div>
                                                                    <br>
                                                                    <button type="submit" class="btn btn-primary ">
                                                                        <i class="la la-save"></i>
                                                                        Sauvegarder</button>
                                                                </form>

                                                          </div>
                                                        </div>
                                                      </div>
                                             </th>
                                             </tr>

                                         @empty

                                             <tr>
                                                <th></th>
                                                <th></th>
                                                <th>
                                                  لم يتم العثور على سجل!
                                                </th>
                                                <th></th>
                                                <th></th>
                                             </tr>
                                         @endforelse

                                    </tbody>
                                </table>
<script>
    $(document).ready(function () {
    $('#seancetab').DataTable();
});
</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sell Orders & Buy Order -->

        </div>



        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ajouter un produit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="magasin_id">Magasin :</label>
                            <select name="magasin_id" id="magasin_id" class="form-control col-md-10">
                                @foreach ($magasins as $magasin)
                                    <option value="{{ $magasin->id }}">{{ $magasin->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="nom">Nom :</label>
                            <input class="form-control col-md-10" type="text" name="nom" id="nom" required >
                        </div>
                        <div>
                            <label for="image">Image :</label>
                            <input class="form-control col-md-10" type="file" name="image" id="image">
                        </div>
                        <div>
                            <label for="prix">Prix :</label>
                            <input class="form-control col-md-10" type="number" name="prix" id="prix" step="0.01" min="0" required>
                        </div>
                        <div>
                            <label for="prix_promo">Prix promotionnel :</label>
                            <input class="form-control col-md-10" type="number" name="prix_promo" id="prix_promo" step="0.01" min="0" placeholder="Optionnel">
                        </div>
                        <div>
                            <label for="quantite">Quantité :</label>
                            <input class="form-control col-md-10" type="number" name="quantite" id="quantite" min="0" required>
                        </div>
                        <br>
                        <button type="submit" class=" btn btn-primary">
                            <i class="la la-save"></i>
                            Ajouter</button>
                    </form>

              </div>
            </div>
          </div>
</div>

@livewireScripts
@endsection

