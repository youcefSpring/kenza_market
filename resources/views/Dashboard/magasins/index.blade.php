@extends('layouts.admin')

@section('content')
    @livewireStyles

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Magasin List -->
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste des magasins</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
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
                                            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                <i class="la la-plus-square"></i> Ajouter
                                            </button>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <br>
                                    <table class="table table-bordered mb-0" id="magasintab" border="2" cellpadding="3">
                                        <thead>
                                            <tr>
                                                <th>Logo</th>
                                                <th>Nom</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($magasins as $magasin)
                                                <tr>
                                                    <td>
                                                        <img src="{{ isset($magasin->logo) ? asset('uploads/magasins/'.$magasin->logo) : asset('uploads/magasins/default_logo.png')}}" height="80" width="80" alt="">
                                                    </td>
                                                    <td>{{ $magasin->nom }}</td>
                                                    <td>
                                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal{{ $magasin->id }}">
                                                            <i class="la la-edit"></i>
                                                        </button>
                                                        <form action="{{ route('magasins.destroy', $magasin->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr ?');">
                                                                <i class="la la-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="exampleModal{{ $magasin->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modifier Magasin</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('magasins.update', $magasin->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div>
                                                                        <label for="nom">Nom :</label>
                                                                        <input class="form-control col-md-10" type="text" name="nom" id="nom" value="{{ $magasin->nom }}" required>
                                                                    </div>
                                                                    <div>
                                                                        <label for="logo">Logo :</label>
                                                                        <input class="form-control col-md-10" type="file" name="logo" id="logo">
                                                                    </div>
                                                                    <br>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <i class="la la-save"></i>
                                                                        Sauvegarder
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            $('#magasintab').DataTable();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Magasin List -->
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un magasin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('magasins.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="nom">Nom :</label>
                                    <input class="form-control col-md-10" type="text" name="nom" id="nom" required>
                                </div>
                                <div>
                                    <label for="logo">Logo :</label>
                                    <input class="form-control col-md-10" type="file" name="logo" id="logo">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-save"></i>
                                    Ajouter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
@endsection
