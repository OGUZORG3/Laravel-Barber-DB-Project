@extends('backend.layouth')
@section('content')
    <section class="content-header">
        <a href="{{route('ekip.create')}}"><button class=" btn btn-success float-right border-0 rounded">Ekle</button></a>
        <div class="table-responsive">
            <table class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
                <thead class="table-light">
                <h1>Paketler</h1>
                <tr>
                    <th>Ekip Resim</th>
                    <th>Ekip isim</th>
                    <th>Ekip Soy isim</th>
                    <th>Ekip pozisyon</th>
                    <th>Ekip unvan</th>
                    <th>Ekip mail</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($ekip['ekip'] as $Eüye)
                    <tr id="item-{{$Eüye->id}}" class="table-primary" >
                        <td><img src="../../images/ekip/{{$Eüye->ekip_file}}" class="paketresim"></td>
                        <td>{{$Eüye->ekip_isim}}</td>
                        <td>{{$Eüye->ekip_soyisim}}</td>
                        <td>{{$Eüye->ekip_pozisyon }}</td>
                        <td>{{$Eüye->ekip_unvan}}</td>
                        <td>{{$Eüye->ekip_mail}}</td>
                        <td><a href="{{route('ekip.edit',$Eüye->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                        <td><a href="javascript:void(0)"><i id="{{$Eüye->id}}" class="fa fa-trash-o"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            <div class="sayfa">
                {{$ekip['ekip']->links()}}
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
            $(".fa-trash-o").click(function () {
                destroy_id = $(this).attr('id');

                alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
                    function () {

                        $.ajax({
                            type: "DELETE",
                            url: "ekip/" + destroy_id,
                            success: function (msg) {
                                if (msg) {
                                    $("#item-" + destroy_id).remove();
                                    alertify.success("Silme İşlemi Başarılı");

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
        });
    </script>
@endsection
@section('css')@endsection
@section('js')@endsection




