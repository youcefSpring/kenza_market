@extends('layouts.admin')

@section('content')
@livewireStyles
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
<style>

    .btn{
        margin-left: 10px;
    }
    table{
        border: 2px solid ;
    }
    textarea{
        height: 130Px;
    }
</style>
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
                            <h4 class="card-title">قائمة المستندات</h4>

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
                                            <i class="la la-plus-square"></i> إضافة
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
                                      <th>الاسم</th>
                                      <th>الرقم </th>
                                      <th>الوثائق المطلوبة</th>
                                      <th>ملاحظات</th>
                                      <th>المرفقات</th>
                                      <th>الإجراءات</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                         @forelse ($files as $f )
                                             <tr>
                                                <th>{{$f->name}}</th>
                                             <th>{{$f->number}}</th>
                                             @if (isset($f->necessary_docs))
                                              <th>
                                                <ol>
                                                @foreach ( $f->necessary_docs as $nd )
                                                    <li>
                                                        {{  $nd->name }}
                                                    </li>
                                                @endforeach
                                            </ol>
                                              </th>
                                              @endif
                                             <th>{{$f->notes}}</th>
                                             <th>
                                                <i class="la la-download"> </i>
                                                    <a href="{{asset('uploads/'.$f->attachment)}}" download>Download</a>

                                            </th>
                                             <th>
                                                <button  class="btn btn-success" data-toggle="modal" data-target="#previewfile{{$f->id}}">
                                                    <i class="la la-eye"></i>
                                                </button>
                                                <button  class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$f->id}}">
                                                    <i class="la la-edit"></i>
                                                </button>

                                                <a href="{{ route('admin.DocumentDelete', $f->id) }}"
                                                    title="Supprimer"
                                                    onclick="return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="la la-trash"></i>
                                                </a>
                                                <div class="modal fade" id="previewfile{{$f->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog  modal-lg" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalLabel">عرض المستند</h5>                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                    <iframe src="{{asset('uploads/'.$f->attachment)}}" style="width:100%;height:80vh;"></iframe>

                                                        </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="exampleModal{{$f->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              {{-- <h5 class="modal-title" id="exampleModalLabel">Edit Document</h5> --}}
                                                              <h5 class="modal-title" id="exampleModalLabel">تعديل المستند</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form" action="{{ route('document.update',$f->id)}}"
                                                                method="POST"
                                                                enctype="multipart/form-data">
                                                                @method('PUT')
                                                              @csrf
                                                              <label for="name">اسم</label>
                                                              <input type="text" value="{{ $f->name }}" id="name"
                                                              class="form-control col-md-10"
                                                              placeholder="name"
                                                              name="name"
                                                              required>
                                                              <br>
                                                              <label for="number">الرقم</label>
                                                              <input type="text" value="{{$f->number }}" id="number"
                                                              class="form-control col-md-10"
                                                              placeholder="number"
                                                              name="number"
                                                              required>
                                                              <br>
                                                              <label for="notes">ملحوظات</label>
                                                              <textarea type="text" value="{{ $f->notes }}" id="notes" class="form-control col-md-10" placeholder="notes" name="notes" >{{ $f->notes }}</textarea>
                                                              <br>

                                                              @php

                                                         $file_array=\App\Models\NecessaryDoc::where('document_id',$f->id)->pluck('name')->toArray();
                                                @endphp
                                                              @if(isset( $file_array))
                                                              @livewire('necessary', ['doc_id' => $f->id])
                                                              {{-- <livewire:necessary :doc_id="$f->id" /> --}}
                                                              @else
                                                              @livewire('necessary',['doc_id'=>null])
                                                              {{-- <livewire:necessary :doc_id="" /> --}}
                                                              @endif
                                                              <br>
                                                              <label for="document">ملفات pdf</label>
                                                              <input type="file" value="{{ old('document') }}" id="document"
                                                              class="form-control col-md-10"
                                                              name="document"
                                                              >

                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">يغلق</button>
                                                              <button type="submit" class="btn btn-primary">احفظ </button>
                                                            </div>
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
                  <h5 class="modal-title" id="exampleModalLabel">أضف وثيقة</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{ route('document.store')}}"
                    method="POST"
                    enctype="multipart/form-data">
                  @csrf
                  <label for="name">اسم</label>
                  <input type="text" value="{{ old('name') }}" id="name"
                  class="form-control col-md-10"
                  placeholder="name"
                  name="name"
                  required>
                  <br>
                  <label for="number">الرقم</label>
                  <input type="text" value="{{ old('number') }}" id="number"
                  class="form-control col-md-10"
                  placeholder="number"
                  name="number"
                  required>
                  <br>
                  <label for="notes">ملحوظات</label>
                  <textarea type="text" value="{{ old('notes') }}" id="notes" class="form-control col-md-10" placeholder="notes" name="notes" required></textarea>
                  <br>
                  {{-- @livewire('necessary') --}}
                  @livewire('necessary',['doc_id'=>null])
                  {{-- <livewire:necessary :doc_id="" /> --}}
                  <label for="document">ملفات pdf</label>
                  <input type="file" value="{{ old('document') }}" id="document"
                  class="form-control col-md-10"
                  name="document"
                  >

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">يغلق</button>
                  <button type="submit" class="btn btn-primary">يحفظ</button>
                </div>
              </form>

              </div>
            </div>
          </div>
</div>

@livewireScripts
@endsection

