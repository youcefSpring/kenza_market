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


            <!-- Category List -->
            <div class="row ">

                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des catégories</h4>

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
                                <table class="table table-bordered mb-0 " id="categorie-tab" border="2" cellpadding="3">

                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($categories as $categorie)
                                                <tr>
                                                    <td>{{ $categorie->nom }}</td>
                                                    <td><img src="{{ isset($categorie->image) ? asset('uploads/categories/'.$categorie->image) : asset('uploads/categories/default.jpeg')}}" height="80" width="80" alt=""></td>
                                                    <td>
                                                        <button  class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal{{$categorie->id}}">
                                                            <i class="la la-edit"></i>
                                                        </button>
                                                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit " class="btn btn-danger btn-sm"><i class="la la-trash" onclick="return confirm('Vous êtes sûr ?');"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="exampleModal{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Modifier Catégorie</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('categories.update', $categorie->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div>
                                                                    <label for="nom">Nom :</label>
                                                                    <input class="form-control col-md-10" type="text" name="nom" id="nom" value="{{ $categorie->nom }}" required>
                                                                </div>
                                                                <div>
                                                                    <label for="image">Image :</label>
                                                                    <input class="form-control col-md-10" type="file" name="image" id="image">
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
                                                  Aucun enregistrement trouvé !
                                                </th>
                                             </tr>
                                         @endforelse

                                    </tbody>
                                </table>
<script>
    $(document).ready(function () {
    $('#categorie-tab').DataTable();
});
</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Category List -->

        </div>



        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ajouter une catégorie</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="nom">Nom :</label>
                            <input class="form-control col-md-10" type="text" name="nom" id="nom" required>
                        </div>
                        <div>
                            <label for="image">Image :</label>
                            <input class="form-control col-md-10" type="file" name="image" id="image">
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
