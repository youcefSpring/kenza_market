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

            <!-- Fraud List -->
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des fraudes</h4>

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
                                <table class="table table-bordered mb-0" id="fraudetab" border="2" cellpadding="3">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($fraudes as $fraude)
                                        <tr>
                                            <td><img src="{{ asset('uploads/fraudes/'.$fraude->image) }}" height="80" width="80" alt=""></td>
                                            <td>{{ $fraude->nom }}</td>
                                            <td>{{ $fraude->description }}</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal{{$fraude->id}}">
                                                    <i class="la la-edit"></i>
                                                </button>
                                                <form action="{{ route('fraudes.destroy', $fraude->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="la la-trash" onclick="return confirm('Vous êtes sûr ?');"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModal{{$fraude->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier la fraude</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('fraudes.update', $fraude->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="nom">Nom</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ $fraude->nom }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="description">Description</label>
                                                                <div class="col-md-9">
                                                                    <textarea class="form-control" id="description" rows="5" placeholder="Description" name="description">{{ $fraude->description }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="image">Image</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" id="image" class="form-control" name="image">
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-primary">
                                                                    <i class="la la-check-square-o"></i> Enregistrer
                                                                </button>
                                                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                                    <i class="la la-remove"></i> Annuler
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <tr>
                                            <td colspan="4">Aucune fraude trouvée.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@livewireScripts
<script>
    $(document).ready(function() {
        $('#fraudetab').DataTable();
    });
</script>
@endsection
