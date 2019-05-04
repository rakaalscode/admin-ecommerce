@extends('layouts.app')

@section('title', 'Admin Marketplace | Orders')

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
    <!-- datePicker -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.min.css')}} ">

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
                            <h5 class="card-title m-b-0 align-self-center">List Order</h5>
                            <div class="ml-auto text-light-blue">
                                <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12"
                                    role="tablist">
                                    <li>
                                        <!-- <a href="{{ route('product.create') }}" style="color:white;"
                                           class="btn waves-effect waves-light btn-rounded btn-primary">Tambah produk</a> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <form class="form">
                                <div class="form-group m-t-20 row">
                                    <label class="col-2 col-form-label">Filter</label>
                                    <div class="col-3">
                                    <select name="status"  id="status" class="form-control">
                                        <option value="">Filter Status</option>
                                        <option value="created">Created</option>
                                        <option value="verified">Verified</option>
                                        <option value="expired">Expired</option>
                                        <option value="complited">Completed</option>
                                    </select>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="from_date" id="from_date" readonly="true" class="form-control" placeholder="Start Date" autocomplete="off" required="required" >  
                                    </div>
                                    <label class="col-1 col-form-label">to</label>
                                    <div  class="col-3" style="margin-left: -3%">
                                        <input type="text" name="to_date" id="to_date" readonly="true" class="form-control" placeholder="End Date" autocomplete="off">  
                                    </div>
                                    </div>
                                    <div class="form-group m-t-20 row">
                                    <label class="col-2 col-form-label"></label>
                                    <div class="col-3">
                                        <button type="button" name="filter" id="filter" class="btn btn-success" title="Filter"><i class="fas fa-filter"></i> Filter </button>
                                        <button type="button" name="reset" id="reset" class="btn btn-warning" title="Refresh Filter"><i class="fas fa-refresh"></i> </button>
                                    </div>
                                </div>
                            </form>
                            <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Status</td>
                                    <td>Customer</td>
                                    <td>No Pesanan</td>
                                    <td>Payment</td>
                                    <td>Total</td>
                                    <td>Tanggal Order</td>
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
<!-- datePicker -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js')}} "></script>
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
$(document).ready(function(){  
    var startDate;
        $("#from_date").datepicker({
        timepicker:true,
        closeOnDateSelect:false,
        closeOnTimeSelect: true,
        initTime: true,
        Format: 'd/m/Y',
        maxDate: 0,
        roundTime: 'ceil',
        onSelect: function(s){
            $('#to_date').datepicker('option', 
                { minDate: new Date(s),
                    maxDate: new Date() 
                });

            if(!$('#to_date').val()){
                $('#to_date').val(s);
            }
        },
        onChangeDateTime: function(dp,$input){
            startDate = $("#from_date").val();
            var date = Date.parse($(this).val());
        }
    });
    
    $("#to_date").datepicker({
        timepicker:true,
        closeOnDateSelect:false,
        closeOnTimeSelect: true,
        initTime: true,
        maxDate: 0,
        Format: 'd/m/Y',
        onSelect: function(s){
            if(!$('#from_date').val()){
                $('#from_date').val(s);
            }
        },
        onClose: function(current_time, $input){
            var endDate = $("#to_date").val();
            if(startDate>endDate){
                alert('Please select correct date');
            }
        }

    });

    var myData ={};

    $('#filter').click(function(){  
        var from_date         = $('#from_date').val();  
        var to_date           = $('#to_date').val();  
        var status            = $('#status').val();
        myData                = { _token: "{{csrf_token()}}"};

        if(from_date  && to_date ){    
            myData.from_date      = $('#from_date').val();
            myData.to_date        = $('#to_date').val();
        } 
        if(status){
            myData.status = status;
        }
        table.ajax.reload();
    });  

    $('#reset').click(function(){  
        var from_date         = $('#from_date').val("");  
        var to_date           = $('#to_date').val("");
        var status            = $('#status').val("");
        myData                = { _token: "{{csrf_token()}}"};
        table.ajax.reload();
    }); 

    myData    = { _token: "{{csrf_token()}}"};
    var table = $('#myTable').DataTable({
    processing: true,
    serverSide: true,
    stateSave: true,
    "ajax":{
                "url"  : "{{ route('order.json') }}",
                "dataType": "json",
                "type" : "GET",
                data:function(d,a){
                    $.extend(d, myData);
                }
    },
    columns: [
        { data: 'id_order', name: 'id_order' },
        { data: 'status', name: 'status' },
        { data: 'name', name: 't_user.name' },
        { data: 'no_pesanan', name: 'no_pesanan' },
        { data: 'payment_method', name: 'payment_method' },
        { data: 'total_bayar', name: 'total_bayar' },
        { data: 'created_at', name: 'created_at' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
    ],
        "order": [[ 0, "desc" ]],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        'columnDefs': [
        {
            "targets": 5,
            "className": "text-right"
        },
        {
            "targets": 0,
            "className": "text-center"
        },
        {
            "targets": 7,
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