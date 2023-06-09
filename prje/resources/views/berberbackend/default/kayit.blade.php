<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Kayıt</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../backend/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../backend/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../backend/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../ackend/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style type="text/css">
        .login-page {
            background-color:#0b58a2;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }

        body {
            overflow: hidden;
        }
    </style>

</head>
<body class="hold-transition login-page">
<a href="{{route('home.Index')}}"><img src="../frontend/css/return.png"  style="width: 30px;height: 30px;margin: 10px;"></a>
<div class="login-box">
    <div class="login-logo">
        <a style="color:white; "><b>E-Berberim</b> Kayıt</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <a class="btn btn-danger" href="{{route('berber.login')}}">geri</a>
        <form action="{{route('berber.store')}}" method="post"
              enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Resim Seç</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input  name="user_file"  type="file">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label>Ad Soyad</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input  type="text" name="name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Soyad</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input  type="text" name="surname">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Kullanıcı Adı (Email)</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input  type="email" name="email">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Şifre</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input  type="password" name="password">
                    </div>
                </div>
            </div>


            <div class="form-group">






                    <div align="right" class="box-footer">
                        <button type="submit" class="btn btn-success">Kayıt Ol</button>
                    </div>
                </div>


        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../backend/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
