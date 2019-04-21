@extends('layouts.app')

@push('before-css')
  <!-- page css -->
  <link href="{{asset('assets/css/pages/icon-page.css')}}" rel="stylesheet">
@endpush

@section('content')
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- box -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-uppercase m-b-40">ICONS</h4>
            <ul class="list ma0 p-0 flex flex-row  flex-wrap justify-start items-start">
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/500px?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-500px" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/accessible-icon?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-accessible-icon" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/accusoft?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-accusoft" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/address-book?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-address-book" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/address-book?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-address-book" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/address-card?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-address-card" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/address-card?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-address-card" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/adjust?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-adjust" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/adn?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-adn" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/adversal?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-adversal" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/affiliatetheme?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-affiliatetheme" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/algolia?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-algolia" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/align-center?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-align-center" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/align-justify?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-align-justify" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/align-left?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-align-left" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/align-right?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-align-right" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/allergies?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-allergies" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/amazon?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-amazon" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/amazon-pay?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-amazon-pay" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/ambulance?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-ambulance" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/american-sign-language-interpreting?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-american-sign-language-interpreting" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/amilia?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-amilia" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/anchor?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-anchor" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/android?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-android" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angellist?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-angellist" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-double-down?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-double-down" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-double-left?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-double-left" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-double-right?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-double-right" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-double-up?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-double-up" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-down?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-down" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-left?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-left" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-right?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-right" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angle-up?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-angle-up" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angrycreative?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-angrycreative" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/angular?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-angular" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/app-store?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-app-store" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/app-store-ios?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-app-store-ios" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/apper?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-apper" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/apple?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-apple" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/apple-pay?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-apple-pay" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/archive?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-archive" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-down?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-alt-circle-down" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-down?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-arrow-alt-circle-down" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-left?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-alt-circle-left" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-left?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-arrow-alt-circle-left" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-right?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-alt-circle-right" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-right?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-arrow-alt-circle-right" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-up?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-alt-circle-up" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-alt-circle-up?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-arrow-alt-circle-up" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-circle-down?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-circle-down" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-circle-left?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-circle-left" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-circle-right?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-circle-right" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-circle-up?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-circle-up" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-down?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-down" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-left?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-left" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-right?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-right" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrow-up?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrow-up" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrows-alt?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrows-alt" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrows-alt-h?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrows-alt-h" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/arrows-alt-v?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-arrows-alt-v" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/assistive-listening-systems?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-assistive-listening-systems" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/asterisk?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-asterisk" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/asymmetrik?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-asymmetrik" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/at?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-at" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/audible?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-audible" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/audio-description?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-audio-description" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/autoprefixer?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-autoprefixer" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/avianex?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-avianex" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/aviato?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-aviato" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/aws?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-aws" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/backward?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-backward" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/balance-scale?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-balance-scale" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/ban?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-ban" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/band-aid?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-band-aid" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bandcamp?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-bandcamp" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/barcode?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-barcode" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bars?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bars" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/baseball-ball?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-baseball-ball" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/basketball-ball?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-basketball-ball" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bath?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bath" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/battery-empty?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-battery-empty" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/battery-full?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-battery-full" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/battery-half?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-battery-half" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/battery-quarter?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-battery-quarter" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/battery-three-quarters?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-battery-three-quarters" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bed?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bed" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/beer?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-beer" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/behance?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-behance" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/behance-square?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-behance-square" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bell?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bell" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bell?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-bell" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bell-slash?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bell-slash" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bell-slash?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-bell-slash" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bicycle?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bicycle" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bimobject?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-bimobject" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/binoculars?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-binoculars" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/birthday-cake?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-birthday-cake" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bitbucket?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-bitbucket" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bitcoin?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-bitcoin" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bity?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-bity" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/black-tie?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-black-tie" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/blackberry?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-blackberry" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/blind?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-blind" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/blogger?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-blogger" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/blogger-b?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-blogger-b" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bluetooth?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-bluetooth" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bluetooth-b?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-bluetooth-b" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bold?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bold" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bolt?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bolt" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bomb?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bomb" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/book?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-book" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bookmark?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bookmark" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bookmark?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-bookmark" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bowling-ball?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bowling-ball" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/box?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-box" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/box-open?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-box-open" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/boxes?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-boxes" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/braille?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-braille" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/briefcase?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-briefcase" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/briefcase-medical?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-briefcase-medical" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bug?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bug" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/building?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-building" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/building?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-building" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bullhorn?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bullhorn" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bullseye?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bullseye" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/burn?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-burn" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/buromobelexperte?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-buromobelexperte" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/bus?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-bus" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/buysellads?style=brands" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fab fa-buysellads" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calculator?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-calculator" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-calendar" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-calendar" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar-alt?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-calendar-alt" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar-alt?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-calendar-alt" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar-check?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-calendar-check" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar-check?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-calendar-check" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar-minus?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-calendar-minus" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar-minus?style=regular" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="far fa-calendar-minus" ></i></a>
                  <!---->
                </div>
              </li>
              <li class="dib ma0 pb3 w-grid-2 w-grid-4-m w-grid-6-l w-grid-9-xl">
                <div class="flex flex-column justify-center relative shadow-hover default hover-bg-white br2 hide-child"><a href="/icons/calendar-plus?style=solid" class="flex flex-column items-center justify-center color-inherit w-100 pa2 br2 br--top no-underline hover-bg-blue4 hover-white"><i class="fas fa-calendar-plus" ></i></a>
                  <!---->
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- Column -->
  </div>
  <!-- ============================================================== -->
  <!-- End box -->
@endsection

@push('js')
  <!-- Popup message jquery -->
  <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
  <!-- Style switcher -->
  <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
