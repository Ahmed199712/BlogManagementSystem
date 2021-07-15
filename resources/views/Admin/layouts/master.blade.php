<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('Admin.layouts.head')
<style>
        @font-face
        {
            src : url("{{ asset('fonts/Sukar/Sukar-Regular.otf') }}");
            font-family : 'Sukar'; 
        }
        @font-face
        {
            src : url("{{ asset('fonts/Duru/DuruSans-Regular.otf') }}");
            font-family : 'Duru'; 
        }

        @font-face
        {
            src : url("{{ asset('fonts/Poppins/Poppins-Regular.ttf') }}");
            font-family : 'Poppins'; 
        }

        

    </style>

    @if( app()->getLocale() == 'ar' )
        <style>
            * , h1 , h2 , h3 , h4 , h5 , h6 , div , p , label , span
            {
                font-family: 'Sukar';
            }
        </style>
    @else
        <style>
            * , h1 , h2 , h3 , h4 , h5 , h6 , div , p , label , span
            {
                font-family: 'Duru';
            }
        </style>
    @endif
</head>

<body>

    <div class="wrapper" style="">

        <!--=================================
 preloader -->

 <!--
        <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>
        -->
        <!--=================================
 preloader -->

        @include('Admin.layouts.main-header')
        @include('Admin.layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">

            @yield('page-header')

            <div class="page-title">
                <div class="row" style="margin-bottom:5px">
                    <div class="col-sm-6">
                        <h4 class="mb-3" style=";color: #639a40;font-size:30px;font-weight: 400;">@yield('PageTitle')</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="pt-0 pr-0 float-left float-sm-right">
                            @yield('PageButton')
                        </ol>
                    </div>

                </div>

                @yield('content')

                <!--=================================
 wrapper -->

                <!--=================================
 footer -->

                @include('Admin.layouts.footer')
            </div><!-- main content wrapper end-->
        </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('Admin.layouts.footer-scripts')
    
    

</body>

</html>