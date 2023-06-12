@extends('backend.layouth')
@section('content')
    <div class="container">
        <h1>Paket Düzenle</h1>
        <a href="{{route('paket.index')}}"><button class="btn btn-danger mx-5 float-right">Geri</button></a>
        @if(isset($paket->paket_file))
            <div class="form-group">
                <label>Yüklü Görsel</label>
                <div class="row">
                    <div class="col-xs-12">
                        <img width="100" src="../../../../images/pack/{{$paket->paket_file}}" alt="" >
                    </div>
                </div>
            </div>
        @endif
        <form action="{{route('paket.update',$paket->id)}}" method="post" enctype="multipart/form-data">
            @CSRF
            @method('PUT')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Paket Resim</label>
                <input type="file" value="{{$paket->paket_file}}" class="form-control" name="paket_file" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Paket AD</label>
                <input type="text" value="{{$paket->paket_ad}}" class="form-control" name="paket_ad" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Paket İcerik</label>
                <input type="text" value="{{$paket->paket_icerik}}" class="form-control" name="paket_icerik" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Paket Özellik</label>
                <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1"
                                              name="paket_ozellik">{{$paket->paket_ozellik}}</textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>

                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fiyat</label>
                <input type="number" value="{{$paket->paket_fiyat}}" class="form-control" name="paket_fiyat" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Düzenle</button>

        </form>

    </div>
@endsection
@section('css')@endsection
@section('js')@endsection
