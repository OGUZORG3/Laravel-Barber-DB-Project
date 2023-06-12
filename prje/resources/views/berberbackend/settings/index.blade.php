@extends('berberbackend.layout')
@section('content')
<section class="content-header">
     
    <div class="box box-primary">
       <div class="box-header with-border">
           <h3 class="box-title">Ayarlar</h3>
        </div>


          <div class="box-body">
            <table class="table table-stripped">
            <thead>
                    <tr>
                        <th>Görsel</th>
                        <th>Ad Soyad</th>
                        <th>E-mail</th>
                        
                    </tr>
                    <tbody id="sortable">
                  
                    @php
    $user = Auth::user();
@endphp

<tr id="item-{{$user->id}}">
    <td class="sortable" width="150"><img width="150" src="../../images/users/{{$user->user_file}}" alt=""></td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    
    <td width="5"><a href="{{route('berber.edit',Auth::user()->id)}}"><i class="fa fa-pencil-square">Profilimi Düzenle</i></a></td>
    <td width="5"><a href="{{route('berber.edit',Auth::user()->id)}}"><i class="fa fa-pencil-square">Berber Profilimi Düzenle</i></a></td>
    <td width="5">
        <a href="javascript:void(0)"><i id="{{Auth::user()->id}}" class="fa fa-trash-o">Üyeliğimi Sil</i></a>
    </td>
</tr>

                    </tbody>
                    </thead>
</table>
                
         </div>
    </div>
</section>
<script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

           
          

        });

        $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Üyeliğinizi silmek istediğinize emin misiniz?', 'Bu işlem geri alınamaz',
                function () {

                    $.ajax({
                        type:"GET",
                        url:"settings/"+destroy_id,
                        success: function (msg) {
                            if (msg)
                            {
                                $("#item-"+destroy_id).remove();
                                alertify.success("Silme İşlemi Başarılı");
                                window.location.href = "{{route('berber.login')}}";

                            } else {
                                alertify.error("İşlem Tamamlanamadı");
                            }
                        }
                    });

                },
                function () {
                    alertify.error('Silme işlemi iptal edildi')
                }
            )

        });
    </script> 
    
@endsection

@section('css') @endsection
@section('js') @endsection
