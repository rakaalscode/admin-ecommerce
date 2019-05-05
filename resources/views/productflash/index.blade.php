@extends('layouts.app')

@section('title', 'Admin Marketplace | Product Flashsale')

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
                            <h5 class="card-title m-b-0 align-self-center">List Produk Flash Sale</h5>
                            <div class="ml-auto text-light-blue">
                                <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12"
                                    role="tablist">
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Produk</td>
                                    <td>Flash Sale</td>
                                    <td>Merchant</td>
                                    <td>Status</td>
                                    <td>Stok</td>
                                    <td>Stok Tersedia</td>
                                    <td>Harga Baru</td>
                                    <td>Start Date</td>
                                    <td>End Date</td>
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

    <!-- @include('productflash.form') -->


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

// // modal edit
// function editForm(id) {
//     save_method = 'edit';
//     $('input[name=_method]').val('PATCH');
//     $('#modal-form form')[0].reset();
//     $.ajax({
//         url: "{{ url('product-flashsale') }}" + '/' + id + "/edit",
//         type: "GET",
//         dataType: "JSON",
//         success: function(data) {
//         $('#modal-form').modal('show');
//         $('.modal-title').text('Confirmation');
//         $('.button').text('Approve');
//         $('#id').val(data.id);
//         $('#name').val(data.name);
//         $('#slug').val(data.kode_service);
//         },
//         error : function() {
//             alert("Nothing Data");
//         }
//     });
// }


//datatables
$(function () {
    $('#myTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('productflash.json') }}",
    columns: [
        { data: 'id_flash_product', name: 'id_flash_product' },
        { data: 'name-image', name: 'products.title' },
        { data: 'judul', name: 't_flash_sale.judul' },
        { data: 'name', name: 'vendor_profiles.name' },
        { data: 'status', name: 'status' },
        { data: 'stok', name: 'stok' },
        { data: 'available_stok', name: 'available_stok' },
        { data: 'harga_baru', name: 'harga_baru' },
        { data: 'start_date', name: 't_flash_sale.start_date' },
        { data: 'end_date', name: 't_flash_sale.end_date' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
    ],
    "order": [[ 0, "desc" ]],
    'columnDefs': [
    {
        "targets": 10,
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

//Approve data
function Approve(id){
    var csrf_token = $('meta[name="csrf_token"]').attr('content');

    swal({
        title: 'Apakah Anda yakin?',
        text: "Produk Flash Sale ini akan di approve",
        type: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Approve',
        cancelButtonText: 'Tidak',
        showLoaderOnConfirm: true,
        
    preConfirm: function() {
        return new Promise(function(resolve) {
            $.ajax({
                url : "{{ url('product-flashsale/approve') }}" + '/' + id,
                type : "POST",
                data : {'_method' : 'POST', '_token' : csrf_token},
            })
            .done(function(response){
                swal(
                    'Sukses!',
                    'Data berhasil diapprove!',
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

//Approve data
function Reject(id){
    var csrf_token = $('meta[name="csrf_token"]').attr('content');

    swal({
        title: 'Apakah Anda yakin?',
        text: "Produk Flash Sale ini akan di reject",
        type: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Reject',
        cancelButtonText: 'Tidak',
        showLoaderOnConfirm: true,
        
    preConfirm: function() {
        return new Promise(function(resolve) {
            $.ajax({
                url : "{{ url('product-flashsale/reject') }}" + '/' + id,
                type : "POST",
                data : {'_method' : 'POST', '_token' : csrf_token},
            })
            .done(function(response){
                swal(
                    'Sukses!',
                    'Data berhasil direject!',
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
                url : "{{ url('product-flashsale') }}" + '/' + id,
                type : "POST",
                data : {'_method' : 'DELETE', '_token' : csrf_token},
            })
            .done(function(response){
                swal(
                    'Sukses!',
                    'Data berhasil dihapus!',
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
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<!-- <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script> -->
@endpush