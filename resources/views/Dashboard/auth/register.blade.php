@extends('layouts.login')

@section('content')
<style>
    .responsive {
  width: 100%;
  height: auto;
}

span{
    position: absolute;
    left: auto;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css">

<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    {{-- <div class="card-title text-center">
                        <div class="p-1">
                            <img src="{{asset('img/lg.PNG')}}" alt="LOGO" class="responsive" width="250" height="150"/>
                        </div>
                    </div> --}}
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span> Inscription </span>
                    </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal form-simple" action="{{ route('admin.postRegister') }}" method="post"
                              autocomplete="off"
                              novalidate>
                            @csrf
                            <fieldset class="form-group position-relative has-icon-right mb-0">
                                <input type="text" name="nom" class="form-control" dir="ltr" placeholder="Nom">
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                                @error('nom')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </fieldset>
                            <br>
                            <fieldset class="form-group position-relative has-icon-right mb-0">
                                <select name="id_commune" id="id_commune" class="form-control select2" dir="ltr">
                                    @php
                                        $communes = App\Models\AlgeriaCity::whereWilayaCode(35)->get();
                                    @endphp
                                    @foreach ($communes as $c)
                                      <option value="{{$c->id}}">
                                        {{ $c->commune_name_ascii }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('id_commune')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </fieldset>
                            <script>
                                $(document).ready(function() {
                                    $('.select2').selectize();
                                });
                            </script>

<br>
                            <fieldset class="form-group position-relative has-icon-right mb-0">
                                <input type="number" name="num_tel" class="form-control" dir="ltr" placeholder="Numéro de téléphone">
                                <div class="form-control-position">
                                    <i class="ft-phone"></i>
                                </div>
                                @error('num_tel')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </fieldset>
<br>
                            <fieldset class="form-group position-relative has-icon-right mb-0">
                                <select name="type_user" id="type_user" class="form-control" dir="ltr">
                                    <option value="livreur">Livreur</option>
                                    <option value="commercant">Commerçant</option>
                                    <option value="avocat">Avocat</option>
                                    <option value="anpcecom">ANPCECOM</option>
                                    <option value="user_simple">Utilisateur simple</option>
                                </select>
                                @error('type_user')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </fieldset>
<br>
                            <fieldset class="form-group position-relative has-icon-right">
                                <input type="password" name="password" class="form-control form-control-lg input-lg"
                                       id="user-password" dir="ltr" placeholder="Mot de passe">
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                                @error('password')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </fieldset>
<br>
<fieldset class="form-group position-relative has-icon-right">
    <input type="password" name="password_confirmation"
           id="password-confirm"
           class="form-control form-control-lg input-lg"
           dir="ltr" placeholder="Confirmer le mot de passe">
    <div class="form-control-position">
        <i class="la la-key"></i>
    </div>
    @error('password_confirmation')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <span id="password-confirm-message" class="" dir="ltr"></span>
</fieldset>
<script>
    // Get the password and password confirmation input elements
    var passwordInput = document.getElementById('user-password');
    var confirmPasswordInput = document.getElementById('password-confirm');

    // Get the password confirmation message element
    var confirmPasswordMessage = document.getElementById('password-confirm-message');

    // Add an event listener to the password confirmation input field
    confirmPasswordInput.addEventListener('keyup', function () {
        // Check if the passwords match
        if (confirmPasswordInput.value !== passwordInput.value) {
            // Show an error message
            confirmPasswordMessage.textContent = 'Les mots de passe ne correspondent pas';
            confirmPasswordMessage.style.color = 'red';
        } else {
            // Clear the error message
            confirmPasswordMessage.textContent = 'Les mots de passe sont identiques';
            confirmPasswordMessage.style.color = 'green';
        }
    });
</script>

<br>
                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-user-plus"></i>
                                S'inscrire
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
