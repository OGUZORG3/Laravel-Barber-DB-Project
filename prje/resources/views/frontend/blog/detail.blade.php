@extends('frontend.layout')
@section('title',"Anasayfa Başlığı")
@section('content')

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$blog->blog_title}}</h1>


        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-7">

                <!-- Preview Image -->
                @if(!empty($blog->blog_file))
                <img class="img-fluid rounded" src="../../images/blogs/{{$blog->blog_file}}" alt="">
                <hr>
                @endif
                <!-- Date/Time -->



                <p>{!! $blog->blog_content !!}</p>
                <hr>
                <p> Yayınlama Zamanı {{$blog->created_at->format('d-m-Y h:i')}}</p>
            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-5">


                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Son Bloglar</h5>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($blogList['list'] as $list)
                                <a href="{{route('blog.Detail',$list->blog_slug)}}"> <li  class="list-group-item ">{{$list->blog_title}}</li></a>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sayfa ml-3" >
                        {{$blogList['list']->links()}}
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>

@endsection
@section('css') @endsection
@section('js') @endsection
