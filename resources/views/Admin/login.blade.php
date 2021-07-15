

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ trans('backend.adminlogin') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
  <!-- Ionicons -->


  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('css/blue.css')}}">
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css')}}">

  <style>
    .form-group input 
    {
      border-radius:0 !important;
      
    }

    @font-face {
      font-family: 'Duru';
      src: url("{{ asset('fonts/Duru/DuruSans-Regular.otf') }}");
    }

  </style>




  @if( app()->getLocale() == 'en' )

  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">

  <style>
    * , h1 , h2 , h3 , h4 , h5 , h6 , div , p , label , span
    {
      font-family: 'Duru';
    }
  </style>
@else
  <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    <style>
        * , h1 , h2 , h3 , h4 , h5 , h6 , div , p , label , span
          {
             font-family: 'Cairo';
          }
    </style>
  

  

@endif

<style>

          input.form-control
          {
              font-size:16px;
              min-height:35px
          }

          .invalid-feedback-login
          {
            color : #f55d5d
          }

          .is-invalid-login
          {
            border : 1px solid #f55d5d
          }


</style>




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @include('Admin.layouts.head')
</head>

<body class="hold-transition login-page">

      <!--
        <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>
      -->

<div class="container" style="max-width:500px">


  
  <div class="login-logo" style="margin-top:50px">
    <a href="{{ route('admin.login') }}"><b>{{ trans('backend.adminlogin') }}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">{{ trans('backend.signintoyourapp') }}</p>

    <form id="myLoginForm" action="{{ route('admin.doLogin') }}" method="post">

        {{ csrf_field() }}

        @include('Admin.includes._messages')

      <div class="form-group has-feedback">
        <input style="margin-bottom:5px" type="email" value="{{ old('email') }}" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid-login' : '' }}" placeholder="{{ trans('backend.email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        
      </div>
      <div class="form-group has-feedback">
        <input style="margin-bottom:5px" type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid-login' : '' }}" placeholder="{{ trans('backend.password') }}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        
      </div>
      <div class="row">
        <div class="col-xs-12">
          
            <label>
              <input type="checkbox" name="rememberme" {{ old('remember') ? 'checked' : '' }}> {{ trans('backend.rememberme') }}
            </label>
          
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat btn-border"> <i class="fa fa-lock fa-lg fa-fw"></i> {{ trans('backend.login') }} </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!--
        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>
    -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('js/icheck.min.js') }}"></script>



<script>
  
  @if( session()->has('errorLogin') )
      swal({
          title: "{{ session()->get("errorLogin") }}",
          icon: "error",
          button : "{{ trans('backend.ok') }}"
      });
  @endif

  


</script>

@include('Admin.layouts.footer-scripts')


<script>
$(document).ready(function(){



  // Validate Form ...
  $('#myLoginForm').validate({
      rules : {
        email : { required : true , email : true },
        password : { required : true , minlength : 6 },
      },
      messages : {

      },
      errorEelement : 'span',
      errorPlacement : function(error , element){
          element.closest('.form-group').append(error);  
      },
      hightlight : function(element, errorClass , validClass){
        $(element).addClass('is-invalid');
      },
      unhightlight : function(element, errorClass , validClass){
        $(element).removeClass('is-invalid');
      }

  });


  // Login By AJAX ...
  $(document).on('submit','#myLoginForm',function(e){
      e.preventDefault();

      $.ajax({
        url : "{{ route('admin.doLogin') }}",
        type : 'POST',
        dataType : 'JSON',
        data : $(this).serialize(),
        beforeSend : function(data){
          $('button').attr('disabled' , true);
          $('button i').removeClass('fa-lock').addClass('fa-spin fa-spinner');
        },
        success : function(data){
          if( data.errorMSG ){
            
            // If Account is Wrong !
            // for errors - red box
            toastr.error("{{ trans('backend.wrong_account') }}");

            $('button').attr('disabled' , false);
            $('button i').removeClass('fa-spin fa-spinner').addClass('fa-lock');

          }else{
            
            // // If Account is Success !
            location.reload();

          }
        }
      });

  });

});
</script>


</body>
</html>















