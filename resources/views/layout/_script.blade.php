<!-- Mainly scripts -->
    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('assets/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('assets/js/inspinia.js')}}"></script>
    <script src="{{asset('assets/js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('assets/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('assets/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('assets/js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('assets/js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('assets/js/plugins/toastr/toastr.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/accounting-js/accounting.umd.js')}}"></script>
    <script src="{{asset('assets/maskmoney/jquery.maskMoney.min.js')}}"></script>
    <script src="{{asset('assets/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/iziToast/iziToast.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/clockpicker/bootstrap-clockpicker-custom.js')}}"></script>

    <script src="{{asset('assets/js-cookie/js.cookie.js')}}"></script>
    {{-- Text editor --}}
    <script src="{{asset('assets/summernote/dist/summernote.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

    <script src="{{asset('assets/jquery-cropper/cropper.min.js')}}"></script>

    {{-- <script src="{{asset('assets/js/plugins/sweetalert/sweetalert.min.js')}}"></script> --}}
     <script src="{{asset('assets/js/plugins/sweetalert/sweetalert2.min.js')}}"></script> 
    
    <script src="{{asset('assets/accounting-js/accounting.es6.js')}}"></script>

    <script src="{{asset('assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('assets/js/lodash.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/moment/moment.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/fullcalendar/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scheduler/scheduler.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/Image-PDF-Viewer-EZView/draggable.js')}}"></script>
    <script src="{{asset('assets/js/plugins/Image-PDF-Viewer-EZView/EZView.js')}}"></script>



    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.div-loading').addClass('fadeOut');
            setTimeout(function(){

                $('body').removeClass('body-loading');
            },1000);

            $(document).ajaxStart(function(){
                $('.ajax-loading').removeClass('fadeOut');
                $('body').addClass('body-ajax-loading');

                
            });

            $(document).ajaxComplete(function(){
                $('.ajax-loading').addClass('fadeOut');
                setTimeout(function(){

                    $('body').removeClass('body-ajax-loading');
                },1000);
              
            });

            $('.navbar-minimalize.minimalize-styl-2').click(function(){
                ($('body').hasClass('mini-navbar')) ? localStorage.setItem('_minisidebar', 'mini-navbar') : localStorage.removeItem('_minisidebar');
            })

            var check_minisidebar = localStorage.getItem('_minisidebar');

            (check_minisidebar) ? $('body').addClass(check_minisidebar) : '';

            $.extend(true, $.fn.dataTable.defaults, {
                "width": '100%',
                "responsive":true,
                "pageLength": 10,
                "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
                "language": {
                    "searchPlaceholder": "Cari Data",
                    "emptyTable": "Tidak ada data",
                    "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
                    "sSearch": '<i class="fa fa-search"></i>',
                    "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
                    "infoEmpty": "",
                    "paginate": {
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya",
                    },
                    "zeroRecords":    "Tidak ada catatan yang cocok ditemukan",
                    "infoFiltered":   "(difilter dari _MAX_ total entri)",
                }

            });
            $.extend( $.fn.datepicker.defaults, { 
                showOnFocus:false, 
                format:'dd-mm-yyyy',
                disableTouchKeyboard:true,
                enableOnReadonly:false
            } );


            $('.clockpicker').clockpicker({ 
                default:'now',
                donetext: 'Selesai',
                twelvehour: false,
            });
            

            $('.datepicker').datepicker();

            $('.input-uang').maskMoney();

            $('.select2').select2();

            
            $.fn.select2.defaults.set( 'dropdownAutoWidth', true );
            $.fn.select2.defaults.set( 'width', 'resolve' );

            setTimeout(function(){
              $('.select2-container').css('width','100%');

            },1000);

            $('.select2').on('select2:opening', function(){

              $('.select2-container').css('width','100%');

            });

            $('.data-table').DataTable();

            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };

            iziToast.settings({
                position:'topRight'//Where it will be shown. It can be bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter or center.
            })


        });
    </script>

    @if (Session::get('gagal') !="")            
        <script type="text/javascript">
             $(document).ready(function(){
                iziToast.error({
                    title: 'Gagal!',
                    message: 'Anda Tidak Bisa Mengakses Menu Tersebut',
                });
            });
        </script>
    @endif