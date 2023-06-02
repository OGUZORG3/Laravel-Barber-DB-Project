@extends('backend.layouth')
@section('content')
    <div class="container">
        <h1>Paket Ekle</h1>
        <a href="{{route('paket.index')}}"><button class="btn btn-danger mx-5 float-right">Geri</button></a>
    <form action="{{route('paket.store')}}" method="post" enctype="multipart/form-data">
        @CSRF
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Paket Resim</label>
            <input type="file" class="form-control" name="paket_file" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Paket AD</label>
            <input type="text" class="form-control" name="paket_ad" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Paket İcerik</label>
            <input type="text" class="form-control" name="paket_icerik" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Paket Özellik</label>
            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1"
                                              name="paket_ozellik"></textarea>
                <script>
                    CKEDITOR.replace('editor1');
                </script>

            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fiyat</label>
            <input type="number" class="form-control" name="paket_fiyat" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
@endsection
@section('css')@endsection
@section('js')@endsection
