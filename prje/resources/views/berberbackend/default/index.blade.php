@extends('berberbackend.layout')
@section('content')


<section class="content-header">

    <div class="box box-primary">
       <div class="box-header with-border">
           <h3 class="box-title">Dashboard</h3>
               </div>
        <div class="row">

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$blog}}<sup style="font-size: 20px"></sup></h3>

                        <p>Blog Sayısı</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{str_replace(["[","]"]," ",$berber)}}</h3>

                        <p>Profil Ziyaret Sayısı</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        @if($blogtik!=0)
                        <h3>{{ number_format($blogtik/$blog,2) }}</h3>
                        @else
                        <h3>0</h3>
                        @endif
                        <p>Blog Başına Görüntülenme Oranı</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{$blogtik}}</h3>

                        <p>toplam Görüntülenme sayısı</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>

            <!-- ./col -->
        </div>

          <div class="box-body">
                <p>Dashboard Page</p>
         </div>
    </div>
</section>

@endsection
@section('css')@endsection
@section('js')@endsection
