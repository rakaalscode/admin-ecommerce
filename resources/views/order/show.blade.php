@extends('layouts.app')

@section('title', 'Admin Marketplace | Detail Orders')

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
 <!-- Page CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/order-page.css')}} ">
@endpush

@section('content')
<meta name="csrf_token" content="{{ csrf_token() }}">
    
    <div class="container-fluid">
        <nav class="breadcrumb">
            <span class="breadcrumb-item text-dark">Ecommerce</span>
            <a class="breadcrumb-item text-dark" href="{{url('orders')}}">Orders</a>
            <a class="breadcrumb-item text-primary">Orders Page</a>
        </nav>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                <div class="card-body">
                    <div class="row">

                    <div class="col-lg-10">
                        <div class="order-status">
                        <ul>
                            <li class="non-active">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Expired</span></li>

                            <li class="non-active">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Created</span></li>

                            <li class="active-link">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Verified</span></li>

                            <li class="non-active">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Completed</span></li>

                        </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="btn-group pull-right">
                        <div class="dropdown">
                            <button aria-expanded="false" data-toggle="dropdown" class="btn waves-effect waves-light btn-rounded btn-outline-primary dropdown-toggle m-t-10" type="button">Change Order Status <span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                            <li><a href="#">Expired</a></li>
                            <li><a href="#">Created</a></li>
                            <li><a href="#">Verified</a></li>
                            <li><a href="#">Completed</a></li>

                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-5 align-self-center text-uppercase">Customer Details</h5>
                        <div class="product-table text-dark no-border">
                            <table class="table m-b-5 m-t-20 ">
                                <tbody>
                                <tr>
                                    <td class="text-muted">Customer: </td>
                                    <td class="text-color">Hakim Summers</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Email: </td>
                                    <td class="text-color">summershak@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Phone: </td>
                                    <td class="text-color">(059) 456 51 123</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Address: </td>
                                    <td class="text-color">MacKengsley St. 45/5, London, United Kingdom</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-5 align-self-center text-uppercase">Customer Details</h5>
                        <div class="product-table text-dark no-border">
                            <table class="table m-b-5 m-t-20 ">
                                <tbody>
                                <tr>
                                <td  class="text-muted">Recipient: </td>
                                <td  class="text-color">Amelie Summers</td>
                                </tr> <tr>
                                <td class="text-muted">Phone: </td>
                                <td class="text-color">(059) 402 05 448</td>
                                </tr> <tr>
                                <td class="text-muted">Address: </td>
                                <td class="text-color">Avenue St. 56/4B, London, United Kingdom</td>
                                </tr>
                                <tr>
                                <td class="text-muted">Post Code: </td>
                                <td class="text-color">45660</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    <!-- ============================================================== -->
    <!-- End Info box -->

    <!--Delivery details -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
            <div class="card-body">
                <div class="d-flex m-b-5 no-block">
                <h5 class="card-title  align-self-center text-uppercase">No Pesanan : {{$order->no_pesanan}}</h5>
                <div class="ml-auto">
                    <ul class="list-inline m-t-5 text-muted text-uppercase lp-5 font-medium font-12">
                    <li>19.07.2018, 12:15</li>

                    </ul>
                </div>
                </div>

                <div class="table-responsive">
                    <table class="table product-table color-table primary-table">
                        <thead>
                        <tr>
                            <th>ID </th>
                            <th>Product</th>
                            <th>&nbsp;</th>
                            <th>Harga(Rp)</th>
                            <th>QTY</th>
                            <th>Total(Rp)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($group_detail as $details)
                            @foreach($details as $value)
                                <tr>
                                <td>{{$value->id_order_detail}}</td>
                                <td><img src="{{$value->feature_image}}" alt="{{$value->feature_image}}" title="{{$value->title}}"> </td>
                                <td class="text-dark weight-600">
                                    {{$value->title}}
                                </td>
                                <td>{{number_format($value->price, 0, ',', ',')}}</td>
                                <td>{{$value->jumlah}}</td>
                                <td>{{number_format($value->total_harga, 0, ',', ',')}}</td>
                                </tr>
                            @endforeach
                        <tr>
                            <td colspan="2" class="custom-product">&nbsp;</td>
                            <td colspan="3" class="text-muted custom-product">Subtotal Price:
                        </td>
                            <td class="custom-product">$1000.000.000</td>
                        </tr>

                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-muted no-border">Discount:
                        </td>
                            <td class="no-border">-$10</td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-muted no-border">Delivery (American Express):</td>
                            <td class="no-border">$39</td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-dark no-border weight-600">Total Price:
                            </td>
                            <td class="no-border">$1418</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    </div>

@endsection

@push('js')
<!-- ============================================================== -->
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
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<!-- <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script> -->
@endpush