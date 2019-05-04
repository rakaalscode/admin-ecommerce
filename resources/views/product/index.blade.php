@extends('layouts.app')

@section('title', 'Admin Marketplace | Product')

@push('before-css')
    <!-- This page CSS -->
    <link href="{{asset('plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{asset('plugins/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <!-- page css -->
    <link href="{{asset('assets/css/pages/google-vector-map.css')}}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css"/>
    <!-- bootstrap validator -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>

    <style>
    .error{
        color:red;
    }
    .hide-alert{
        color:red;
        font-family: sans-serif;
        line-height: 1.15;
        font-size:14px;
        color:#FF0000;
    }
    .hide-alert-image{
        color:red;
        font-family: sans-serif;
        line-height: 1.15;
        font-size:14px;
        color:#FF0000;
    }
    </style>
@endpush

@section('content')
<meta name="csrf_token" content="{{ csrf_token() }}">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex m-b-10 no-block">
                            <h5 class="card-title m-b-0 align-self-center">List Produk</h5>
                            <div class="ml-auto text-light-blue">
                                <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12"
                                    role="tablist">
                                    <li>
                                        <a href="{{ route('product.create') }}" style="color:white;"
                                           class="btn waves-effect waves-light btn-rounded btn-primary">Tambah produk</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Produk</td>
                                    <td>Category</td>
                                    <td>SKU</td>
                                    <td>Price</td>
                                    <td>Qty</td>
                                    <td>Merchant</td>
                                    <td class="op-0">Aksi</td>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End Info box -->
        <!-- chart box two -->
        <!-- ============================================================== -->
    </div>

@endsection

@push('js')<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="{{asset('plugins/vendors/d3/d3.min.js')}}"></script>
<script src="{{asset('plugins/vendors/c3-master/c3.min.js')}}"></script>
<!--jquery knob -->
<script src="{{asset('plugins/vendors/knob/jquery.knob.js')}}"></script>
<!--Sparkline JavaScript -->
<script src="{{asset('plugins/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('plugins/vendors/raphael/raphael-min.js')}}"></script>
<script src="{{asset('plugins/vendors/morrisjs/morris.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{asset('plugins/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<!-- Sweet Alert -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<!-- bootstrap validator -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>

@if(\Session::has('message'))
$.toast({
    heading: 'Success!',
    position: 'top-center',
    text: '{{session()->get('message')}}',
    loaderBg: '#ff6849',
    icon: 'success',
    hideAfter: 3000,
    stack: 6
});
@endif

@if(\Session::has('messages'))
$.toast({
    heading: 'Warning!',
    position: 'top-center',
    text: '{{session()->get('messages')}}',
    loaderBg: '#ff6849',
    icon: 'error',
    hideAfter: 3000,
    stack: 6
});
@endif

//datatables
$(function () {
    $('#myTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('product.json') }}",
    columns: [
        { data: 'id', name: 'id' },
        { data: 'name-image', name: 'title' },
        { data: 'catname', name: 'categories.name' },
        { data: 'sku', name: 'sku' },
        { data: 'price', name: 'price' },
        { data: 'stock', name: 'stock' },
        { data: 'mercname', name: 'vendor_profiles.name' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
    ],
    "order": [[ 0, "desc" ]],
    'columnDefs': [
    {
        "targets": 2,
        "className": "text-center"
    },
    {
        "targets": 0,
        "className": "text-center"
    },
    { 
        "width": "5%", "targets": 0 
    }]
});
});

//status data
function statusData(id){
    var csrf_token = $('meta[name="csrf_token"]').attr('content');

    swal({
        title: 'Apakah Anda yakin?',
        text: "Status akan diubah",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
        showLoaderOnConfirm: true,
        
    preConfirm: function() {
        return new Promise(function(resolve) {
            $.ajax({
                url : "{{ url('product/status') }}" + '/' + id,
                type : "POST",
                data : {'_method' : 'POST', '_token' : csrf_token},
            })
            .done(function(response){
                swal(
                    'Sukses!',
                    'Data berhasil diubah!',
                    'success'
                )
                $('#myTable').DataTable().ajax.reload();
            })
                .fail(function(){
                swal('Oops...', 'Maaf terjadi kesalahan !', 'error');
            });
        });
    },
    allowOutsideClick: false			  
});	
}

//delete data
function deleteData(id){
    var csrf_token = $('meta[name="csrf_token"]').attr('content');

    swal({
        title: 'Apakah Anda yakin?',
        text: "Data ini akan terhapus secara permanent!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus',
        cancelButtonText: 'Tidak',
        showLoaderOnConfirm: true,
        
    preConfirm: function() {
        return new Promise(function(resolve) {
            $.ajax({
                url : "{{ url('product') }}" + '/' + id,
                type : "POST",
                data : {'_method' : 'DELETE', '_token' : csrf_token},
            })
            .done(function(response){
                swal('Data berhasil dihapus!', response.message, response.status);
                $.toast({
                        heading: 'Success!',
                        position: 'top-center',
                        text: 'Data berhasil dihapus',
                        loaderBg: '#ff6849',
                        icon: 'success',
                        hideAfter: 3000,
                        stack: 6
                    });
                $('#myTable').DataTable().ajax.reload();
            })
                .fail(function(){
                swal('Oops...', 'Maaf terjadi kesalahan !', 'error');
            });
        });
    },
    allowOutsideClick: false			  
});	
}
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<!-- <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script> -->
@endpush