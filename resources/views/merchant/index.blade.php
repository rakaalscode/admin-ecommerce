@extends('layouts.app')

@section('title', 'Admin Marketplace | Merchant')

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
    <!-- Switcher -->
    <link href="{{asset('plugins/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet"/>

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
                            <h5 class="card-title m-b-0 align-self-center">List Merchant</h5>
                            <div class="ml-auto text-light-blue">
                                <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12"
                                    role="tablist">
                                    <li>
                                        <a onclick="addForm()" style="color:white;"
                                           class="btn waves-effect waves-light btn-rounded btn-primary">Tambah Merchant</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Merchant</td>
                                    <td>Type Store</td>
                                    <td>Email</td>
                                    <td>Telephone</td>
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

@include('merchant.form')


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
<!-- Switcher -->
<script src="{{asset('plugins/vendors/switchery/dist/switchery.min.js')}}"></script>
<script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
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

//modal add
function addForm() {
    save_method = "add";
    $('input[name=_method]').val('POST');
    $('#modal-form').modal('show');
    $('#modal-form form')[0].reset();
    $('.modal-title').text('Tambah Merchant');
    $('.button').text('Simpan');
}

// modal edit
function editForm(id) {
    save_method = 'edit';
    $('input[name=_method]').val('PATCH');
    $('#modal-form form')[0].reset();
    $.ajax({
        url: "{{ url('merchant') }}" + '/' + id + "/edit",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
        $('#modal-form').modal('show');
        $('.modal-title').text('Edit Merchant');
        $('.button').text('Ubah');
        $('#id').val(data.id);
        $('#name').val(data.name);
        $('#email').val(data.email);
        if(data.is_official_store == 'true'){
            $('.js-switch').trigger('click');
        }
        },
        error : function() {
            alert("Nothing Data");
        }
    });
}

// action modal
$(function(){
    $('#modal-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()){
            var id = $('#id').val();
            if (save_method == 'add') url = "{{ url('merchant') }}";
            else url = "{{ url('merchant') . '/' }}" + id;
            $.ajax({
                url : url,
                type : "POST",
//              data : $('#modal-form form').serialize(),
                data: new FormData($("#modal-form form")[0]),
                contentType: false,
                processData: false,
                success : function(data) {
                    $('#modal-form').modal('hide');
                    if (save_method == 'add'){
                        $.toast({
                            heading: 'Success!',
                            position: 'top-center',
                            text: 'Data berhasil disimpan',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3000,
                            stack: 6
                        });
                        console.log(data);
                        
                    }else{
                        $.toast({
                            heading: 'Success!',
                            position: 'top-center',
                            text: 'Data berhasil disimpan',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3000,
                            stack: 6
                        });
                    }
                    $('#myTable').DataTable().ajax.reload();
                    
                },
                error : function(data){
                    var err = JSON.parse(data.responseText);
                    if( data.status === 422 ) {
                        if(err.errors['email']) {
                            $('.hide-alert-email').css('display', "block");
                            $('.hide-alert-email').text(err.errors['email']);
                        }else if(err.errors['name']) {
                            $('.hide-alert').css('display', "block");
                            $('.hide-alert').text(err.errors['name']);
                        }
                    }
                    $('#modal-form')
                        .on('hidden.bs.modal', function () {
                            $('.hide-alert').text([]);
                            $('.hide-alert-image').text([]);
                            
                        });
                }
            });
            return false;
        }
    });
});

$(document).ready(function() {
    $('#modal-form')
    .on('hidden.bs.modal', function () {
        $('.hide-alert').text([]);
        $('.hide-alert-email').text([]);
        $('.js-switch').unbind('click');
    });
});


$(function () {
    // Switchery
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function () {
        var tmp = new Switchery($(this)[0], $(this).data());
    });
    $('.js-switch').on("change" , function() {
        if($('.js-switch')[0].checked){
            $('#status').text('Ya');
        }else{
            $('#status').text('Tidak');
        }
    });
});

//datatables
$(function () {
    $('#myTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('merchant.json') }}",
    columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'is_official_store', name: 'is_official_store' },
        { data: 'email', name: 'sku' },
        { data: 'phone', name: 'phone' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
    ],
    "order": [[ 0, "desc" ]],
    'columnDefs': [
    {
        "targets": 5,
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