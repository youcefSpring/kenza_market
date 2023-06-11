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
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1">
                            <img src="{{asset('img/lg.PNG')}}" alt="LOGO" class="responsive" width="250" height="150"/>

                        </div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span> Login  </span>
                    </h6>
                </div>
                @include('Dashboard.includes.alerts.errors')
                @include('Dashboard.includes.alerts.success')
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal form-simple" action="{{ route('admin.postLogin') }}" method="post"
                              autocomplete="off"
                              novalidate>
                            @csrf
                            <fieldset class="form-group position-relative has-icon-right mb-0">
{{--
                                <select name="user" id="user" class="form-control" dir="ltr">
                                    <option value="admin">admin</option>
                                    <option value="vendor">vendeur</option>
                                    <option value="stock">stock</option>
                                </select> --}}

                               @error('user')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror

                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-right mb-0">
                                <input type="email" name="email" class="form-control"
                                dir="rtl"
                                       value="" id="email" placeholder=" البريد الإلكتروني  ">
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                               @error('email')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror

                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-right">
                                <input type="password"
                                       name="password"
                                       class="form-control form-control-lg input-lg"
                                       id="user-password"
                                       dir="rtl"
                                       placeholder="كلمة مرور ">
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                                @error('password')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </fieldset>

                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i>
                                تسجيل دخول
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
