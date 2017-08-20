<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Aplikasi Keluhan Pelanggan PLN</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

   
    <!-- Bootstrap Core Css -->
    <link href="{{asset('css/login/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('css/login/waves.min.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('css/login/style.min.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/login/all-themes.min.css')}}" rel="stylesheet" />
</head>

<body class="login-page login-page-bg">
    <div class="login-box">
        <div class="logo">
         
            <a href="javascript:void(0);">Aplikasi <b>Arsip Pegawai</b> PLN</a>
            <small>Mudah,Nyaman dan Terkendali</small>
        </div>
        <div class="card">
            <div class="body">

           
           
                <form role="form" method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}
                    <div class="msg">Masukan Data Dengan Benar</div>
                        @foreach ($errors->all() as $error)
                        <ul>
                          <li style="color:red">{{ $error }}</li>
                            
                        </ul>
                         @endforeach
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                       {{--      <input type="text" class="form-control" name="id_pelanggan" placeholder="ID Pelanggan" required autofocus> --}}
                              <input id="text" type="text" class="form-control" name="nip" value="{{ old('nip') }}" placeholder="NIP" required autofocus>
                                 @if ($errors->has('nip'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nip') }}</strong>
                                        </span>
                                        @endif
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                      @if ($errors->has('password'))
                                        <span class="help-block">
                                           {{ $errors->first('password') }}
                                        </span>
                                        @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                           {{--  <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Ingat Saya</label> --}}
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Masuk</button>
                        </div>
                    </div>
                 
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{asset('js/login/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('js/login/bootstrap.min.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{asset('js/demo.js')}}"></script>
    
    <script>
        $(function () {
    $('#sign_in').validate({
        highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
        }
    });
});
    </script>
</body>

</html>


