@extends('backend.layouth')
@section('content')
    <section class="content-header">

      <div class="table-responsive">
        <table class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <h1>Mesajlar</h1>
                <tr>
                    <th>Ad Soyad</th>
                    <th>Mail</th>
                    <th>Telefon</th>
                    <th>Mesaj</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($data['adminMessages'] as $adminMessages)
                    <tr class="table-primary" >
                        <td>{{$adminMessages->messages_name}}</td>
                        <td>{{$adminMessages->messages_mail}}</td>
                        <td>{{$adminMessages->messages_tel}}</td>
                        <td>{{$adminMessages->messages_mesaj}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
        </table>
          <div class="sayfa m-2 ">
              {{$data['adminMessages']->links()}}
          </div>
      </div>

    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
