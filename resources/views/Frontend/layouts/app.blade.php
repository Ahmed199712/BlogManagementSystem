<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/another-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mediaQuery.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        <!-- Navbar -->
        @include('Frontend.layouts._navbar')
        <div class="live-search">
            <i class="fa fa-search fa-fw"></i>
        </div>

        <!-- Content -->
        <div class="website-content">
            @yield('content')
        </div>


        <!-- Footer -->
          @include('Frontend.layouts._footer')
        
        

    </div>


    <!--
    <script src="{{ URL::asset('js/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/validation/additional-methods.min.js') }}"></script>
    -->

    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('js/frontend.js') }}" ></script>
    <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
    @stack('scripts')

    <script>
$(document).ready(function(){

    // Success Message
    @if( session()->has('success') )
        swal({
            title: "{{ session()->get("success") }}",
            icon: "success",
            button : "{{ trans('backend.ok') }}"
        });
    @endif


    // On Write on search box ...
    $(document).on('keyup' , '.searchBox' , function(e){
        e.preventDefault();

        var title = $(this).val();

        if(title){
            $.ajax({
                url : "{{ route('frontend.posts.get.search') }}",
                type : 'GET',
                dataType : 'JSON',
                data : { title : title },
                beforeSend : function(){
                    $('.live-search-form .searchContent ').fadeIn();
                },
                success : function(data){
                    $('.searchContent').html(data);
                }
            });
            
        }else{
            $('.live-search-form .searchContent').hide();
        }

    });

    $(document).on('click' , '.searchContent li' , function(){
        console.log($(this).text().trim());
        $('.searchBox').val($(this).text().trim());
        $('.live-search-form .searchContent').hide();
    });


});
</script>
</body>
</html>
