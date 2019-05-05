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
            <a class="breadcrumb-item text-dark" href="{{url('orders')}}">Orders</a>
            <a class="breadcrumb-item text-primary">Orders Detail</a>
        </nav>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                <div class="card-body">
                    <div class="row">

                    <div class="col-lg-10">
                        <div class="order-status">
                        <ul>
                            <li class="{{$order->status=='expired'?'active-link':'non-active'}}">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Expired</span></li>

                            <li class="{{$order->status=='created'?'active-link':'non-active'}}">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Created</span></li>

                            <li class="{{$order->status=='verified'?'active-link':'non-active'}}">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Verified</span></li>

                            <li class="{{$order->status=='complited'?'active-link':'non-active'}}">
                            <div class="white-bg">
                                <div class="circle-top"><div class="circle-1"></div>
                                </div>
                            </div>
                            <span>Completed</span></li>

                        </ul>
                        </div>
                    </div>

                    <!-- <div class="col-lg-2">
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
                    </div> -->
                    </div>

                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-5 align-self-center text-uppercase">Customer Details</h5>
                        <div class="product-table text-dark no-border">
                            <table class="table m-b-5 m-t-20 ">
                                <tbody>
                                <tr>
                                    <td class="text-muted">Customer: </td>
                                    <td class="text-color">{{$order->name}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Email: </td>
                                    <td class="text-color">{{$order->email}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Phone: </td>
                                    <td class="text-color">{{$order->telephone}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Recipient: </td>
                                    <td class="text-color">{{$order->nama_penerima}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Address: </td>
                                    <td class="text-color">{{$order->alamat_penerima}}</td>
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
                    <li>{{date('d F Y - g:i A',strtotime('+7 hours', strtotime($order->created_at)))}}</li>

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
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $summary = 0;
                            $discount = 0;
                        @endphp
                        @foreach($group_detail as $details)
                            @foreach($details as $value)
                                <tr>
                                <td>{{$value->id_order_detail}}</td>
                                <td><img src="{{$value->feature_image}}" alt="{{$value->feature_image}}" title="{{$value->title}}"> </td>
                                <td class="text-dark weight-600">
                                    {{$value->title}}
                                </td>
                                <td>Rp {{number_format($value->price, 0, ',', ',')}}</td>
                                <td>{{$value->jumlah}}</td>
                                <td>Rp {{number_format($value->total_harga, 0, ',', ',')}}</td>
                                @php
                                    $total[]         = $value->total_harga;
                                    $ship[]          = $value->ongkir_estimate;
                                    $is_isurance[]   = $value->is_isurance;
                                    $isurance[]      = $value->isurance;
                                    $jml[]           = $value->jumlah;
                                @endphp
                                </tr>
                            @endforeach
                        <tr>
                            <td colspan="2" class="custom-product">&nbsp;</td>
                            <td colspan="3" class="text-muted custom-product">Subtotal Price:
                        </td>
                            @php
                                $totals = array_sum($total);
                                $total_ongkir[] = $value->ongkir_estimate;
                                // var_dump($total);
                            @endphp
                            <td class="custom-product">Rp {{number_format($totals, 0, ',', ',')}}</td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-muted no-border">Shipping Charges ( {{$value->jasa_name}} )</td>
                            <td class="no-border">Rp {{number_format($value->ongkir_estimate, 0, ',', ',')}} </td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-muted no-border">Insurance</td>
                            <td class="no-border"> Rp {{number_format($value->isurance, 0, ',', ',')}} </td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-dark no-border weight-600">Total Price:
                            </td>
                            @php
                                if($value->is_isurance=="true"){
                                    $subtotal   = $totals + $value->ongkir_estimate + $value->isurance;   
                                }else{
                                    $subtotal   = $totals + $value->ongkir_estimate;
                                }
                                if($order->diskon != null){
                                $diskon     = ($subtotal*$order->diskon)/100;
                                $discount   += ($subtotal - $diskon);
                                $total_discount[] = $diskon;

                                }
                                $z = array_sum($total_ongkir);
                                $total_isurance = array_sum($isurance);

                                $total = array();
                                $jml = array();

                                $summary    += $subtotal;
                            @endphp
                            <td class="no-border">Rp {{number_format($subtotal, 0, ',', ',')}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table product-table color-table primary-table">
                        <thead>
                            <tr>
                                <th style="width:115px"></th>
                                <th style="width:115px"></th>
                                <th style="width:200px"></th>
                                <th style="width:200px"></th>
                                <th style="width:92px"></th>
                                <th style="width:150px"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="2" class="custom-product">&nbsp;</td>
                            <td colspan="3" class="text-dark no-border weight-600 custom-product">Total Product:
                        </td>
                            <td class="custom-product">{{ $order->total_barang }}</td>
                        </tr>

                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-dark no-border weight-600 no-border">Grand Total</td>
                            <td class="no-border">Rp {{number_format($order->total_harga + $z + $total_isurance, 0, ',', '.')}}</td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-dark no-border weight-600 no-border">Discount</td>
                            <td class="no-border"> 
                            @if($order->diskon != null)
                                (<small style="color: red; font-size: 1em;">-</small>) Rp {{number_format($order->potongan_harga, 0, ',', '.')}}
                            @else 
                                ----
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-dark no-border weight-600 no-border">Unique Code</td>
                            <td class="no-border">
                                (<small style="color: red; font-size: 1em;">-</small>) {{$order->code_uniq}}
                            </td>
                        </tr>
                        <tr>
                            <td class="no-border" colspan="2">&nbsp;</td>
                            <td colspan="3" class="text-dark no-border weight-600">Summary:
                            </td>
                            <td class="no-border">Rp {{number_format($order->total_bayar, 0, ',', '.')}} </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
      </div>

      <!-- Column -->
      <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-5 align-self-center text-uppercase">Payment Details</h5>
                        <div class="product-table text-dark no-border">
                        <div class="row col-md-12 p-t-40">
                            <div class="col">
                                <address>
                                    <p class="m-b-0">Payment Method: {{$order->payment_method}}</p>
                                    <p class="m-b-0">Bank Name: {{$order->bank}}</p>
                                    <p class="m-b-0">Payment Status: 
                                    @if($order->payment_method == 'Virtual Account' && $order->payment_status == "pending")
                                        <label class='label label-warning' title='Payment is Pending'>Pending</label> 
                                    @elseif($order->payment_status == 'pending') 
                                        <label class='label label-warning' title='Order is Already Paid'>Already Paid</label> 
                                    @elseif($order->payment_status == 'refund')
                                        <label class='label label-primary' title='Payment Refund'>Refund</label>
                                    @elseif($order->payment_status == 'expired')
                                        <label class='label label-danger' title='Payment Expired'>Expired</label>
                                    @elseif($order->payment_status == 'settlement')
                                        <label class='label label-success' title='Payment Settlement'>Settlement</label>
                                    @endif
                                    </p>
                                </address>
                            </div>
                            @if($order->payment_method == 'Bank Transfer')
                            <div class="col">
                                <div class="row">
                                <div class="col">
                                <h5 class="m-b-10 m-t-20"><span class="text-uppercase font-16 weight-500 ">{{$order->name}}</span><br>
                                    </h5>
                                </div>
                                <div class="col p-t-10" > 
                                    @if($order->pop != "")
                                        <img src="{{$order->pop}}" style="width: 100px; height: 100px;cursor: zoom-in;" 
                                            class="img-fluid" data-toggle="modal" data-target="#myModal" alt="{{$order->pop}}">
                                    @else
                                        <img style="width: 100px; height: 100px;" src="{{asset('assets/imgs/noimage.jpg')}}"
                                            class="img-fluid" alt="">
                                    @endif
                                </div>
                                </div>
                            </div>
                            @endif

                            </div>
                            
                            @if($order->payment_method == 'Bank Transfer')
                            <form method="post" action="{{url('orders/approve/'.$order->id_order)}}">
                            {{csrf_field()}}
                                <div class="col-md-12">
                                    <hr>
                                    <h6 class="box-title pull-left">
                                        @if($order->payment_status == "pending" && $order->pop != "")
                                            <input type="checkbox" id="termsChkbx " onchange="isChecked(this, 'sub1')"/>
                                            <small style="color: red;">Make sure the customer has uploaded a proof of payment photo</small> 
                                        @endif
                                    </h6>
                                    <div class="text-right">
                                        @if($order->payment_status == "pending" && $order->pop != "")
                                            <input title="Approve" value="Approve" class="btn btn-success approve" type="submit" id="sub1"
                                                disabled="disabled">
                                        @endif
                                        <a href="{{route('orders.index')}}"  style="color: black;" class="btn"><span><i class="fa fa-arrow-left"></i> Back</span></a>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail Image</h4>
                </div>
                    <div class="modal-body">
                        <img src="{{$order->pop}}" class="img-responsive" alt="Responsive image">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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

function isChecked(checkbox, sub1) {
    document.getElementById(sub1).disabled = !checkbox.checked;
}
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<!-- <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script> -->
@endpush