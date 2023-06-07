@extends('frontend.layout')
@section('content')
    <h1 class="h1 m-5">Berberlerimiz</h1>
    <div class="row m-5">
    @foreach($veri['berber'] as $berber)

                         <div class="col-3">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body text-center">
                                    <div class="mt-3 mb-4">
                                        <img src="../images/users/{{$berber->user_file}}"
                                             class="rounded-circle img-fluid" style="width: 100px;" />
                                    </div>
                                    <h4 class="mb-2">{{$berber->name}}</h4>

                                    <p class="text-muted mb-4">{{$berber->role}}
                                    <div class="mb-2 pb-1">

                                    </div>
                                    <a href="{{route('berberler.detail',$berber->id)}}"><button type="button" class="btn btn-primary btn-rounded btn-lg">
                                        Profil
                                        </button></a>


                                </div>
                            </div>
                        </div>
    @endforeach
    </div>
@endsection
