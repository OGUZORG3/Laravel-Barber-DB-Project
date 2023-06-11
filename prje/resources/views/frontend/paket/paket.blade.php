@extends('frontend.layout')
@section('content')
    <section class="container-fluid">
    <h1>Paketlerimiz</h1>
        <div class="justify-content-center align-self-center d-flex">
            <div class="row">
                @foreach($paket['packages'] as $paket)
                    @if($loop->iteration <= 3)
                        <div class="col-lg-4 col-sm-6 text-light">
                            <div class="kart">
                                <div class="kart2 paketozel ">
                                    <img src="../images/pack/{{$paket->paket_file}}"  class="card-img-top paketresim ">
                                    <div class="card-body" style="background-color: rgb(0,0,0,0)!important;">
                                        <h5 class="card-title">{{$paket->paket_ad}}</h5>
                                        <p class="card-text">{{$paket->paket_icerik}}</p>
                                    </div>

                                    {!! $paket->paket_ozellik !!}

                                    <div class="card-body">
                                        <a href="#" class="card-link">Satın Al</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @else
                        <button class="btn btn-info m-5">Daha Fazla Paket Görmek İstersiniz</button>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
@endsection
@section('css') @endsection
@section('js') @endsection
