@extends('backend.layouth')
@section('content')
    <div class="container">
        <h1>Ekip Düzenle</h1>
        <a href="{{route('ekip.index')}}"><button class="btn btn-danger mx-5 float-right">Geri</button></a>
        @if(isset($ekip->ekip_file))
            <div class="form-group">
                <label>Yüklü Görsel</label>
                <div class="row">
                    <div class="col-xs-12">
                        <img width="100" src="../../../../images/ekip/{{$ekip->ekip_file}}" alt="" >
                    </div>
                </div>
            </div>
        @endif
        <form action="{{route('ekip.update',$ekip->id)}}" method="post" enctype="multipart/form-data">
            @CSRF
            @method('PUT')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ekip Resim</label>
                <input type="file" class="form-control"  name="ekip_file" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ekip isim</label>
                <input type="text" class="form-control" value="{{$ekip->ekip_isim}}"  name="ekip_isim" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ekip soyisim</label>
                <input type="text" class="form-control" value="{{$ekip->ekip_soyisim}}" name="ekip_soyisim" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ekip Unvan</label>
                <input type="text" class="form-control" value="{{$ekip->ekip_unvan}}" name="ekip_unvan" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ekip pozisyon</label>
                <input type="text" class="form-control" value="{{$ekip->ekip_pozisyon}}" name="ekip_pozisyon" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ekip Mail</label>
                <div class="col-xs-12">
                    <input type="email" class="form-control" value="{{$ekip->ekip_mail}}" name="ekip_mail" id="exampleInputPassword1">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
@endsection
@section('css')@endsection
@section('js')@endsection
