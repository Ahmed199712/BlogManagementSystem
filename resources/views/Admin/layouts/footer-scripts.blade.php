<!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script type="text/javascript">var plugin_path = '{{ asset('assets/js') }}/';</script>

<!-- chart -->
<script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->

<!-- toastr -->

<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>

<!-- validation -->
<script src="{{ URL::asset('js/validation/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('js/validation/additional-methods.min.js') }}"></script>


<!-- lobilist -->
<script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
<script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
<script src="{{ URL::asset('js/select2.full.min.js') }}"></script>
<script src="{{ URL::asset('js/ckeditor.js') }}"></script>

<script src="{{ URL::asset('assets/js/main.js') }}"></script>
<script src="{{ URL::asset('js/summernote.min.js') }}"></script>



<script>
    $(document).ready(function() {

        // Datatable ..
        $('#datatable').DataTable();

        // Success Message ...
        @if( session()->has('success') )
            swal({
                title: "{{ session()->get("success") }}",
                icon: "success",
                button : "{{ trans('backend.ok') }}"
            });
        @endif

        // Info Message ...
        @if( session()->has('info') )
            swal({
                title: "{{ session()->get("info") }}",
                icon: "info",
                button : "{{ trans('backend.ok') }}"
            });
        @endif

        // Warning Message ...
        @if( session()->has('warning') )
            swal({
                title: "{{ session()->get("warning") }}",
                icon: "warning",
                button : "{{ trans('backend.ok') }}"
            });
        @endif

        // Confirm Delete .... ??!
        $(document).on('click' , '.delete' ,function(e){

            e.preventDefault();

            var that = $(this);

            swal({
                title: "{{ trans('backend.confirm_delete') }}",

                icon: "error",
                buttons: ["{{ trans('backend.no') }}", "{{ trans('backend.yes') }}"],
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                    that.closest('form').submit();
                }
            });

        });

        // Confirm Delete .... ??!
        $(document).on('click' , '.confirm_logout' ,function(e){

            e.preventDefault();

            var that = $(this);

            swal({
                title: "{{ trans('backend.confirm_logout') }}",
                icon: "info",
                buttons: ["{{ trans('backend.no') }}", "{{ trans('backend.yes') }}"],
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                    that.closest('form').submit();
                }
            });

        });
        

    } );


    

</script>



@if (App::getLocale() == 'en')
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/en/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/en/dataTables.bootstrap4.min.js') }}"></script>
@else
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/ar/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/ar/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('js/validation/messages_ar.js') }}"></script>
@endif


@yield('js')
