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

            <!-- Sell Orders & Buy Order -->
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des commandes</h4>
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
                                {{-- <div class="row">
                                    <div class="col-md-4">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                            <i class="la la-plus-square"></i> Ajouter
                                        </button>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                </div> --}}
                                <br>
                                <table class="table table-bordered mb-0" id="commandes-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Magasin</th>
                                            <th>Utilisateur</th>
                                            <th>Date de création</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($commandes as $commande)
                                            <tr>
                                                <td>{{ $commande->code }}</td>
                                                <td>{{ $commande->magasin->nom }}</td>
                                                <td>{{ $commande->user->nom }}</td>
                                                <td>{{ $commande->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-primary btn-sm" ><i class="ft-edit"></i> Modifier</a>
                                                    <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')"><i class="ft-trash-2"></i> Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <script>
                                    $(document).ready(function() {
                                        $('#commandes-table').DataTable();
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
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter une commande</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('commandes.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="magasin_id">Magasin :</label>
                                <select name="magasin_id" id="magasin_id" class="form-control">
                                    @foreach ($magasins as $magasin)
                                        <option value="{{ $magasin->id }}">{{ $magasin->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user_id">Utilisateur :</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    @foreach ($users as $utilisateur)
                                        <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="ft-plus"></i> Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@livewireScripts
@endsection
