@extends('backend.layouth')
@section('content')
    <section class="content-header">
        <a href="{{route('paket.create')}}"><button class=" btn btn-success float-right border-0 rounded">Ekle</button></a>
        <div class="table-responsive">
            <table class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
                <thead class="table-light">
                <h1>Paketler</h1>
                <tr>
                    <th>Paket Resim</th>
                    <th>Paket AD</th>
                    <th>Paket icerik</th>
                    <th>Paket Özellik</th>
                    <th>Paket Fiyat</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($data['packages'] as $paket)
                    <tr id="item-{{$paket->id}}" class="table-primary" >
                        <td><img src="../../images/pack/{{$paket->paket_file}}" class="paketresim"></td>
                        <td>{{$paket->paket_ad}}</td>
                        <td>{{$paket->paket_icerik}}</td>
                        <td>{!! $paket->paket_ozellik !!}</td>
                        <td>{{$paket->paket_fiyat}}</td>
                        <td><a href="{{route('paket.edit',$paket->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                        <td><a href="javascript:void(0)"><i id="{{$paket->id}}" class="fa fa-trash-o"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
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
                            url: "paket/" + destroy_id,
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




