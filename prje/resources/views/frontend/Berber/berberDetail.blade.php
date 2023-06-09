@extends('frontend.layout')
@section('content')
    <section class="h-100 gradient-custom-2">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">

                                <img src="../../../images/users/{{$prof['prof']->berber_file}}"
                                     alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                     style="width: 150px; z-index: 1">

                            </div>

                            <div class="ms-3 ml-4" style="margin-top: 130px;">
                                <h5>{{$prof['prof']->berber_isim}}</h5>
                                <h5>{{$prof['prof']->berber_soyisim}}</h5>

                            </div>
                            <h1 class=" h1 text-center my-auto" style="margin-left: 10vh">{{$prof['prof']->berber_dukkan_isim}}</h1>
                        </div>

                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">Hakkında</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    @if(!empty($prof['prof']->berber_adres))
                                    <p class="font-light">{{$prof['prof']->berber_hakkında}}</p>
                                    @else
                                    <p class="font-light">Hakkımda Bilgisi Yok</p>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">İletişim</p>
                                @if(!empty($prof['prof']->berber_adres) || !empty($prof['prof']->berber_Telefon) || !empty($prof['prof']->berber_mail))
                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <p class="font-italic mb-1">{{$prof['prof']->berber_adres}}</p>
                                        <p class="font-italic mb-1">{{$prof['prof']->berber_Telefon}}</p>
                                        <p class="font-italic mb-1">{{$prof['prof']->berber_mail}}</p>
                                        <p class="font-italic mb-0">sosyalmedya</p>
                                    </div>
                                @else
                                    <div class="mb-5">
                                        <div class="p-4" style="background-color: #f8f9fa;">
                                            <h6>Herhangi bir iletişim bilgisi bulunamadı</h6>
                                        </div>
                                    </div>
                                @endif


                            </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0">Bloglar</p>
                                </div>
                            @if(isset($blogs['blogs']) && count($blogs['blogs']) > 0)
                                <div class="row g-2">
                                    @foreach($blogs['blogs'] as $blog)
                                        <div class="col-md-4 col-sm-6 bg-transparent p-3" style="position: relative;">
                                            <div class="card h-100 shadow-sm ">
                                                @if($blog->blog_file != null)
                                                <img src="../../../images/blogs/{{$blog->blog_file}}" class="card-img-top" alt="...">
                                                @else
                                                <img src="../../../public/sistem-resimleri/not-found.png" class="card-img-top" alt="...">
                                                @endif
                                                        <div class="card-body">
                                                        <div class="clearfix mb-3 "  >
                                                            <span class="float-start badge rounded-pill bg-primary">{{$blog->blog_slug}}</span>
                                                        </div>
                                                            <div class="position-relative ">
                                                        <h5 class="card-title">{{$blog->blog_title}}</h5>
                                                            </div>
                                                        <div class="text-center my-4">
                                                            <a href="{{route('blog.Detail',$blog->blog_slug)}}"  class="btn btn-warning">Bloga git</a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="mb-5">
                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <h6>Bu berber henüz hic bir şey yayınlamadı</h6>
                                    </div>
                                </div>
                            @endif




                        </div>
                            <div class="sayfa">
                                {{$blogs['blogs']->links()}}
                            </div>

                        </div>
                </div>
            </div>
        </div>

    </section>
@endsection
