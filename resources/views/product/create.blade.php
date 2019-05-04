@extends('layouts.app')

@section('title', 'Admin Marketplace | Add Product')

@push('before-css')
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="{{asset('plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
  <!--c3 CSS -->
  <link href="{{asset('plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
  <!--Toaster Popup message CSS -->
  <link href="{{asset('plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
  <!-- Page CSS -->
  <link href="{{asset('plugins/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/vendors/product-slider/product-slider.css')}}">
  <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('plugins/vendors/dropify/dist/css/dropify.min.css')}}">
  <!-- page css -->
  <link href="{{asset('assets/css/pages/file-upload.css')}}" rel="stylesheet"
          type="text/css">
  <link href="{{asset('assets/fileinput/fileinput.css')}}" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
  <link href="{{asset('assets/fileinput/theme.css')}}" media="all" rel="stylesheet" type="text/css">
  <!-- Select 2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet"/>
  <style>
    #title-error {color:red;}#maincats-error {color:red;}#subs-error {color:red;}#input-file-now-error {color:red;}#kv-explorer-error {color:red;}#price-error {color:red;}#id_brand-error {color:red;}#stock-error {color:red;}#dimension-error { color:red;}
    #sku-error {
    color:red;
    }
    #description-error {
    color:red;
    }
    #policy-error {
    color:red;
    }
    #length-error {
    color:red;
    }
    #width-error {
    color:red;
    }
    #height-error {
    color:red;
    }
    #weight-error {
    color:red;
    }
    #rupiah-error {
    color:red;
    }
    
  </style>
@endpush

@section('content')
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
      <!-- Column -->
    <form method="post" action="{{ route('product.store') }}" id="form" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="col-md-12 col-md-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title text-uppercase m-b-34">
                Pilih Merchant
                <a class="btn btn-success pull-right" href="{{ route('product.index') }}"><i class="fas fa fa-eye fa-xs"></i> 
                List Produk</a></h4>
                <hr class="mt-4  mb-3">
                    <div class="col-md-12 col-md-12">
                        <div class="form-group m-t-40 row">
                            <label class="col-4 col-form-label">
                                Merchant
                                    <span class="required"><code>*</code></span>
                                <p>
                                    <small>
                                        Pilih merchant yang akan di add produknya.
                                    </small>
                                </p>
                            </label>
                            <div class="col-8">
                                <select name="merchant" id="merchantID" onChange="populates(this.id)" class="merchant col-12">
                                <option value="">Pilih Merchant</option>
                                    @foreach ($merchants as $key => $value)
                                        <option value="{{ $key }}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="merchantShow" style="display:none">
            <div class="col-md-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title text-uppercase m-b-34">
                    Tambah Produk
                    </h4>
                    <hr class="mt-4  mb-3">
                        <div class="col-md-12 col-md-12">
                            <div class="form-group m-t-40 row">
                                <label class="col-4 col-form-label">
                                    Nama Produk
                                        <span class="required"><code>*</code></span>
                                    <p>
                                        <small>
                                            Masukan nama produk sesuai dengan jenis, merek dan produk.
                                        </small>
                                    </p>
                                </label>
                                <div class="col-8">
                                    <input name="title" id="title"  class="form-control unique" type="text" placeholder="Nama" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">
                                Kategori Produk
                                    <span class="required"><code>*</code></span></label>
                                <div class="col-8">
                                    <select name="mainid" id="maincats" class="custom-select col-12">
                                        <option value="" selected>Pilih...</option>
                                        @foreach ($categories as $key => $category)
                                            <option value="{{ $key }}">{{$category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Sub Kategori</label>
                                <div class="col-8">
                                    <select name="subid" id="subs" class="custom-select col-12" disabled>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Merek</label>
                                <div class="col-8">
                                    <select name="id_brand" class="custom-select col-12">
                                    </select>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 15px;">
                            Gambar Produk
                        </h5>
                        <hr class="mt-4  mb-3">
                        <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-wrap form-wrap2 mt-4">
                                <label class="col-6 col-form-label">Gambar Produk<span class="required"><code>*</code></span></label>
                                <div class="col-md-12 col-md-12">
                                    <div class="upload-photo" style="margin-top: 0px;">
                                        <input type="file" id="input-file-now" class="{{ $errors->has('fimage') ? ' is-invalid' : '' }} dropify" data-height="200" name="photo" />
                                    </div>
                                    <div id="gendererror"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="form-wrap form-wrap2 mt-4">
                            <label class="col-6 col-form-label">Galeri Produk</label>
                                <div class="col-md-12 col-md-12">
                                <form enctype="multipart/form-data">
                                    <div class="file-loading">
                                        <input id="kv-explorer" type="file" accept="image/*" name="file[]" multiple>
                                    </div>
                                    <div id="fileerror"></div>
                                </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title" style="font-size: 15px;">
                        Gambar Management 
                        </h6>
                        <hr class="mt-4  mb-3">
                        <div class="col-md-12 col-md-12">
                            <div class="form-group m-t-40 row">
                                <label class="col-4 col-form-label">Stok<span class="required"><code>*</code></span></label>
                                <div class="col-8">
                                    <input name="stock" type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Harga(Rp)<span class="required"><code>*</code></span></label>
                                <div class="col-8">
                                    <input name="price" type="text" class="form-control" value="" id="rupiah" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Rp" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">SKU
                                    <p>
                                        <small>Masukan SKU untuk menambahkan kode unik ke produk.</small>
                                    </p>
                                </label>
                                <div class="col-8">
                                    <input name="sku" class="form-control" value="" placeholder="Masukan SKU" autocomplete="off">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>    
            </div>
            <div class="col-md-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title" style="font-size: 15px;">Produk Spesifikasi</h6>
                        <hr class="mt-4  mb-3">
                        <div class="col-md-12 col-md-12">
                            
                            <div class="form-group m-t-40 row">
                                <label class="col-4 col-form-label">Berat(kg)<span class="required"><code>*</code></span></label>
                                <div class="col-8">
                                    <input name="weight" type="number" class="form-control" min="0.00" max="10000.00" step="0.01" autocomplete="off" placeholder="Kilogram(Kg.)" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Dimensi(cm)<span class="required"><code>*</code></span>
                                    <p>
                                        <small>(Masukan dimensi untuk ukuran paket (bukan ukuran barang) )</small> 
                                    </p>
                                </label>
                                <div class="col-2">
                                    <input type="number" size="50px" name="length" min="0" max="1000000" step="1" class="form-control" value="" autocomplete="off" placeholder="L" required>
                                    <small>(Panjang produk)</small>
                                </div>
                                <div class="col-2">
                                    <input type="number" name="width" min="0" max="1000000" step="1" class="form-control" value="" autocomplete="off" placeholder="W" required>
                                    <small>(Lebar produk)</small>
                                </div>
                                <div class="col-2">
                                    <input type="number" name="height" min="0" max="1000000" step="1" class="form-control" value="" autocomplete="off" placeholder="H" required>
                                    <small>(Tinggi produk)</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-4 col-form-label">Warna
                                    <p>
                                        <small>(Masukan warna produk dipisahkan dengan koma[,]/enter)</small>
                                    </p>
                                </label>
                                <div class="col-8">
                                    <div class="tags-default">
                                        <input name="color" type="text" class="form-control" value="" data-role="tagsinput">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Ukuran
                                    <p>
                                        <small>(Masukan ukuran produk dipisahkan dengan koma[,]/enter)</small> 
                                    </p>
                                </label>
                                <div class="col-8">
                                    <div class="tags-default">
                                        <input name="sizes" type="text" class="form-control" value="" data-role="tagsinput">
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>    
            </div>
            <div class="col-md-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title" style="font-size: 15px;">
                        Deskripsi Produk
                        </h6>
                        <hr class="mt-4  mb-3">
                        <div class="col-md-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Deskripsi
                                        <p>
                                            <small>
                                                Masukan deskripsi dan informasi detail produk.Rekomendasi panjang >= 200 karakter.
                                            </small>
                                        </p>
                                    </label>
                                    <div class="col-8">
                                        <textarea name="description" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">T & C
                                    </label>
                                    <div class="col-8">
                                        <textarea name="policy" class="form-control" rows="5"></textarea>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">SLA</label>
                                    <div class="col-8">
                                        <input name="sla" type="text" class="form-control" value="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">
                                        Video Produk
                                        <span class="required"> <small style="font-size: 9px;">(Pilihan)</small> </span>
                                        <p>
                                            <small>Alamat video yang mendukung adalah URL video dari <a href="https://www.youtube.com/">YouTube</a>.</small>
                                        </p>
                                    </label>
                                    <div class="col-8">
                                        <input name="url" class="form-control" value="" placeholder="https://www.youtube.com/">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">
                                        Video Produk 2
                                        <span class="required"> <small style="font-size: 9px;">(Pilihan)</small> </span>
                                    </label>
                                    <div class="col-8">
                                        <input name="url2" class="form-control" value="" placeholder="https://www.youtube.com/">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">
                                        Video Produk 3
                                        <span class="required"> <small style="font-size: 9px;">(Pilihan)</small> </span>
                                    </label>
                                    <div class="col-8">
                                        <input name="url3" class="form-control" value="" placeholder="https://www.youtube.com/">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">
                                    Produk Tags  
                                        <span class="required">
                                            <p>
                                                <small>(Masukan produk tags dengan koma[,]/enter)</small>
                                            </p>
                                        </label>
                                    <div class="col-8">
                                        <div class="tags-default">
                                            <input type="text" name="tags" class="form-control" value="" data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>
                        </div> 
                    </div>
                </div>    
            </div>
            <div class="col-md-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 col-md-12">
                            <div class="button-group">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-t-10 pull-right"><i class="fa fa-send"></i> Save</button>
                            </div>
                        </div> 
                    </div>
                </div>    
            </div>
        </div>
    </form> 
</div>
@endsection

@push('js')
<script src="{{asset('assets/fileinput/fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/fileinput/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/fileinput/ex/theme.js')}}" type="text/javascript"></script>

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
<!-- Tag input Jquery -->
<script src="{{asset('plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('plugins/vendors/switchery/dist/switchery.min.js')}}"></script>

<!-- product jquery -->
<script src="{{asset('plugins/vendors/product-slider/product-slider.js')}}"></script>
<script src="{{asset('plugins/vendors/product-slider/product-slider.init.js')}}"></script>
<!-- jQuery file upload -->
<script src="{{asset('plugins/vendors/dropify/dist/js/dropify.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- Select 2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script>
//Merchant Select
$('.merchant').select2({
            allowClear: true,
            placeholder: 'Pilih merchant'
        });

function populates(t2){
    var t2 = document.getElementById(t2);
    if(t2.value != ""){
        $('.merchantShow').show();
    }else{
        $('.merchantShow').hide();
    }
}
 

$(document).ready(function () {
    $('select[name="merchant"]').on('change', function() {
    var MerchantID = $(this).val();
    if(MerchantID) {
    console.log(MerchantID)
        $.ajax({
            url: './getBrands/'+MerchantID,
            type: "GET",
            dataType: "json",
            success:function(data) {
                if(data.no_data == 'true'){
                    $('select[name="id_brand"]').empty().attr('disabled',true);
                    $('select[name="id_brand"]').html('<option value="">Data merk kosong</option>');
                }else{
                    $('select[name="id_brand"]').attr('disabled',false);
                    $('select[name="id_brand"]').html('<option value="">Pilih merk</option>');
                    $.each(data, function(key, value) {
                        $('select[name="id_brand"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            }
        });
    }else{
        $('select[name="id_brand"]').html('<option value="">Data merek kosong</option>');
        $('select[name="id_brand"]').empty().attr('disabled',true);
        }
    });
});

$(document).ready(function () {
    $('select[name="mainid"]').on('change', function() {
    var mainID = $(this).val();
    if(mainID) {
    console.log(mainID)
        $.ajax({
            url: './subcats/'+mainID,
            type: "GET",
            dataType: "json",
            success:function(data) {
                $('select[name="subid"]').html('<option value="">Pilih..</option>');
                $.each(data, function(key, value) {
                    $('select[name="subid"]').append('<option value="'+ key +'">'+ value +'</option>');
                    $('select[name="subid"]').attr('disabled',false);
                });
            }
        });
    }else{
        $('select[name="subid"]').empty();
        $('select[name="subid"]').empty().attr('disabled',true);
        }
    });
});

$(document).ready(function () {
    $("#kv-explorer").fileinput({
        'theme': 'explorer-fas',
        'uploadUrl': '#',
        uploadAsync: false,
        overwriteInitial: false,
        initialPreviewAsData: true,
        'showUpload': false,
        maxFileCount: 9,
        minImageWidth: 300,
        minImageHeight: 300,
        fileActionSettings: {
                showRemove: true,
                showUpload: false,
                showZoom: true,
                showDrag: true,
        },
    });
});

$("#allow").change(function () {
    $("#dimension").slideToggle("slow");
});

var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
    rupiah.value = formatRupiah(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
}
    
$(document).ready(function () {
    $('#form').validate({ // initialize the plugin
        rules: {
            title: {
                required: true,
                maxlength: 255,
                remote:{
                    url: "{{url('title_product')}}",
                    type: "get"
                }
            },
            mainid: {
                required: true,
            },
            photo: {
                required: true,
                extension: "jpg|jpeg|png"
            },
            price: {
                required: true
            },
            sku: {
                maxlength: 20,
            },
            stock: {
                required: true,
                number: true,
            },
            weight: {
                required: true,
                number: true,
            },
            length: {
                required: true,
                number: true,
            },
            width: {
                required: true,
                number: true,
            },
            height: {
                required: true,
                number: true,
            },
            
        },
            errorPlacement: function(error, element) {
            if (element.attr("name") == "photo") {
                error.insertAfter("#gendererror");
            } else if(element.attr("name") == 'file[]') {
                error.insertAfter("#fileerror");
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            title: {
                required: "Kolom produk harus diisi.",
                maxlength: "Maksimal 10 karakter",
                remote: "Username sudah dipakai"
            },
            mainid: {
                required: "Kolom kategori produk harus di isi.",
            },
            photo: {
                required: "Kolom Gambar cover produk harus di isi",
                extension: "Format gambar harus JPG, JPEG, PNG"
            },
            price: {
                required: "Kolom harga produk harus di isi."
            },
            stock: {
                required: "Kolom stok harus di isi.",
                number: "Masukan nomor."
            },
            sku: {
                maxlength: "Maksimal 20 karakter"
            },
            weight: {
                required: "Kolom berat produk harus di isi.",
                number: "Masukan angka."
            },
            length: {
                required: "Kolom panjang produk(paket) harus di isi.",
                number: "Masukan angka."
            },
            width: {
                required: "Kolom panjang lebar(paket) harus di isi.",
                number: "Masukan angka."
            },
            height: {
                required: "Kolom panjang tinggi(paket) harus di isi.",
                number: "Masukan angka."
            },

        }
    });
});


$(function() {
// Basic
$('.dropify').dropify();

// Translated
$('.dropify-fr').dropify({
    messages: {
        default: 'Glissez-déposez un fichier ici ou cliquez',
        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
        remove: 'Supprimer',
        error: 'Désolé, le fichier trop volumineux'
    }
});
    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element) {
        console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e) {
        e.preventDefault();
        if (drDestroy.isDropified()) {
            drDestroy.destroy();
        } else {
            drDestroy.init();
        }
    })
});

$("#checkbox0").change(function () {
    $("#spek").toggle();
});
</script>
  <!-- ============================================================== -->
  <!-- Style switcher -->
  <!-- ============================================================== -->
  <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
