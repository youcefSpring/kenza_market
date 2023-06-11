@extends('layouts.admin')

@section('content')
<style>
    #cure{
        border-radius: 40%;
    }
</style>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Modifier Profile</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                                        <form class="form" action="{{ route('admin.updateProfile') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" name="id" value="{{ $user->id }}">

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Nom</label>
                                                            <input type="text" value="{{ $user->name }}" id="key"
                                                                   class="form-control" placeholder="{{ $user->name }}"
                                                                   name="name">
                                                            @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Email</label>
                                                            <input type="email" value="{{ $user->email }}" id="email"
                                                                   class="form-control" placeholder="{{ $user->email }}"
                                                                   name="email">
                                                            @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Nouveau mot de passe</label>
                                                            <input type="password" value="" id="password"
                                                                   class="form-control" placeholder="Nouveau Mot de passe"
                                                                   name="password">
                                                            @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Confirmation</label>
                                                            <input type="password" value="" id="repassword"
                                                                   class="form-control"
                                                                   placeholder="Confirmation mot de passe"
                                                                   name="repassword">
                                                            @error('repassword')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Image</label>
                                                            <input type="file" id="image" class="form-control" name="image"
                                                                   onchange="previewImage(event)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        @if ($user->avatar)
                                                        <div class="form-group " id="cure">
                                                            <label for="projectinput6">Image actuelle</label>
                                                            <div class="avatar-wrapper">
                                                                <img id="current-image"
                                                                     src="{{ asset('uploads/avatars/'.$user->avatar) }}"
                                                                     alt="Profile Image"
                                                                     width="300"
                                                                     height="170">
                                                            </div>
                                                        </div>
                                                    @endif
                                                    </div>
                                                </div>




                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-danger mr-1"
                                                            onclick="history.back();">
                                                        <i class="la la-trash"></i>Annuler
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="la la-save"></i>Sauvegarder
                                                    </button>
                                                </div>
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

    <script>
        function previewImage(event) {
            let reader = new FileReader();
            reader.onload = function () {
                let output = document.getElementById('current-image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@stop
