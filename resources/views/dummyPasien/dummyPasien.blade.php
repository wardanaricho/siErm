@extends('layouts.main')
@section('container')
    <div class="card card-default color-palette-box">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-tag"></i>
                Semua Pasien
            </h3>
        </div>
        <div class="card-body">
            <div class="col-12">
                <h5>Theme Colors</h5>
            </div>

        </div>
        <!-- /.card-body -->
    </div>


    <script src="{{ asset('adminLte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('adminLte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
