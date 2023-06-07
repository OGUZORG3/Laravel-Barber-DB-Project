@extends('frontend.layout')
@section('content')
    <section class="h-100 gradient-custom-2">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <p>{{$prof['prof']->berber_dukkan_isim}}</p>
                                <img src="../images/user/"
                                     alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                     style="width: 150px; z-index: 1">

                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>{{$prof['prof']->berber_isim}}</h5>
                                <p>{{$prof['prof']->berber_adres}}</p>
                            </div>
                        </div>

                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">Hakkında</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-light">asdasd</p>
                                </div>
                            </div>
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">İletişim</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1">{{$prof['prof']->berber_Telefon}}</p>
                                    <p class="font-italic mb-1">{{$prof['prof']->berber_mail}}</p>
                                    <p class="font-italic mb-0">sosyalmedya</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Bloglar</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="row g-2">

                                <div class="col mb-2">
                                    <img src="images/users/"
                                         alt="image 1" class="w-100 rounded-3">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
