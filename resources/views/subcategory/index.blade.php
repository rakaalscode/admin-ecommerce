@extends('layouts.app')

@section('title', 'Admin Marketplace | Sub Category')

@push('before-css')
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{asset('plugins/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <!-- Date picker plugins css -->
    <link href="{{asset('plugins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- page css -->
    <link href="{{asset('assets/css/pages/google-vector-map.css')}}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css"/>
    <!-- bootstrap validator -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <!-- select 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet"/>
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

    .select2 {
        width:100%!important;
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
                            <h5 class="card-title m-b-0 align-self-center">Sub Kategori List</h5>
                            <div class="ml-auto text-light-blue">
                                <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12"
                                    role="tablist">
                                    <li>
                                        <a onclick="addForm()" style="color:white;"
                                           class="btn waves-effect waves-light btn-rounded btn-primary">Tambah Sub Kategori</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Sub Kategori</td>
                                    <td>Main Kategori</td>
                                    <td class="op-0">Action</td>
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

@include('subcategory.form')

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
<!-- select 2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"type="text/javascript"></script>
<script>

$('#mainid').select2({
        placeholder: "Choose...",
        minimumInputLength: 3,
        ajax: {
            url: "{{ route('category.list') }}",
            dataType: 'json',
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    }
});

//modal add
function addForm() {
    save_method = "add";
    $('input[name=_method]').val('POST');
    $('#modal-form').modal('show');
    $('#modal-form form')[0].reset();
    $('.modal-title').text('Tambah Sub Kategori');
    $('.button').text('Simpan');
}

// modal edit
function editForm(id) {
    save_method = 'edit';
    $('input[name=_method]').val('PATCH');
    $('#modal-form form')[0].reset();
    $.ajax({
        url: "{{ url('subcategory') }}" + '/' + id + "/edit",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
        $('#modal-form').modal('show');
        $('.modal-title').text('Edit Sub Kategori');
        $('.button').text('Ubah');
        $('#id').val(data.id);
        $('#name').val(data.name);
        var main = '<option value="'+ data.mainid +'">'+ data.mainname +'</option>';
        $('#mainid').append(main);
        $('#mainid').val(data.mainid).trigger('change');
        console.log($('#name').val(data.name))
        console.log($('#mainid').val(data.mainid))
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
            var feature_image = $('#feature_image').val();
            console.log(feature_image);
            
            if (save_method == 'add') url = "{{ url('subcategory') }}";
            else url = "{{ url('subcategory') . '/' }}" + id;
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
                    console.log(data);
                    
                    var err = JSON.parse(data.responseText);
                    if( data.status === 422 ) {
                        if(err.errors['feature_image']) {
                            $('.hide-alert-image').css('display', "block");
                            $('.hide-alert-image').text(err.errors['feature_image']);
                        }else if(err.errors['name']) {
                            $('.hide-alert').css('display', "block");
                            $('.hide-alert').text(err.errors['name']);
                        }else{
                            $('.hide-alert').css('display', "block");
                            $('.hide-alert').text(err.errors);
                        }
                    }
                    $('#modal-form')
                    .on('hidden.bs.modal', function () {
                        $('.hide-alert').text([]);
                        $('.hide-alert-image').text([]);
                        $("#mainid").val([]).trigger("change"); //Answered by apokryfos
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
        $('.hide-alert-image').text([]);
        $("#mainid").val(null).trigger("change"); 
    });
});

//datatables
    $(function () {
        $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('subcategory.json') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name-image', name: 'name' },
            { data: 'mainid', name: 'mainid' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "order": [[ 0, "desc" ]],
        'columnDefs': [
        {
            "targets": 3,
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
                url : "{{ url('subcategory') }}" + '/' + id,
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