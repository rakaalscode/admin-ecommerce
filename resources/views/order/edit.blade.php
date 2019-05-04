@extends('layouts.app')

@push('before-css')
<!-- chartist CSS -->
<link href="{{asset('plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
<!--c3 CSS -->
<link href="{{asset('plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
<!--Toaster Popup message CSS -->
<link href="{{asset('plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
<!-- Page CSS -->
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
    <div class="row">
    <!-- Column -->
    @if(!empty($_GET['import']) && $_GET['import'] == 1)
        <form method="post" action="{{url('ecommerce/edit/'.$product->id.'?import=1')}}" id="form" enctype="multipart/form-data">
    @else
        <form role="form" action="{{ route('product.update', $product->id) }}" method="POST" id="form" enctype="multipart/form-data">
    @endif
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-uppercase m-b-34">
            Tambah Produk
            <a class="btn btn-success pull-right" href="javascript:history.go(-1)"><i class="fas fa fa-eye fa-xs"></i> 
            List Produk</a></h4>
            <hr class="mt-4  mb-3">
            <div class="col-lg-12 col-md-12">
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
                    <input name="title" id="title" class="form-control unique" type="text" value="{{$product->title}}" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label">
                    Kategori Produk
                        <span class="required"><code>*</code></span></label>
                    <div class="col-8">
                        <select name="mainid" id="maincats" class="custom-select col-12">
                            @foreach($categories as $category)
                                @if($product->main_category == $category->id)
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label">Sub Kategori<span class="required"><code>*</code></span></label>
                    <div class="col-8">
                        <select name="subid" id="subs" class="custom-select col-12">
                            @if($product->category == '')
                            <option value="">Pilih Sub Kategori</option>
                            @endif
                            @foreach($subs as $sub)
                                @if($product->category == $sub->id)
                                    <option value="{{$sub->id}}" selected>{{$sub->name}}</option>
                                @else
                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label">Merek</label>
                    <div class="col-8">
                        <select name="id_brand" class="custom-select col-12">
                            <option value="">Pilih..</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id_brand }}" {{ $brand->id_brand == $product->id_brand ? 'selected':'' }}>
                                                {{ ucfirst($brand->nama_brand) }}
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>   
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 15px;">
                    Gambar Produk
                </h5>
                <hr class="mt-4  mb-3">
                <div class="row">
                {{-- <div class="col-lg-6 col-md-4">
                    <div class="form-wrap form-wrap2 mt-4">
                        <label class="col-6 col-form-label">Gambar Produk</label>
                        <div class="col-lg-12 col-md-12">
                            <div class="upload-photo" style="margin-top: 0px;">
                                <input type="file" id="input-file-now" class="{{ $errors->has('fimage') ? ' is-invalid' : '' }} dropify" 
                                data-height="200" data-default-file="{{$product->feature_image}}" name="photo" />
                            </div>
                            <div id="gendererror"></div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-4">
                    <br>
                    <label class="col-8 col-form-label">Gambar Produk</label>
                    <div class="relative">
                        <div id="amazingslider-wrapper-1" class="m-b-40">
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                            <ul class="amazingslider-slides" style="display:none;">
                            @if(count($galleries) == 0)
                                <li><a href="{{asset('assets/img/profile-img.jpg')}}" class="html5lightbox"><img src="{{asset('assets/img/profile-img.jpg')}}" alt="" title="" /></a> </li>
                            @else 
                            @foreach($galleries as $gallery)
                                <li><a href="{{$gallery->image}}" class="html5lightbox"><img src="{{$gallery->image}}" alt="" title="" /></a> </li>
                            @endforeach
                            @endif
                            </ul>
                            <ul class="amazingslider-thumbnails" style="display:none;">
                            @if(count($galleries) == 0)
                                <li><a href="{{asset('assets/img/profile-img.jpg')}}" class="html5lightbox"><img src="{{asset('assets/img/profile-img.jpg')}}" alt="" title="" /></a> </li>
                            @else 
                            @foreach($galleries as $gallery)
                                <li><a href="{{$gallery->image}}" class="html5lightbox"><img src="{{$gallery->image}}" alt="" title="" /></a> </li>
                            @endforeach
                            @endif
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="upload-photo">
                    <label class="col-8 col-form-label">Gambar Produk</label>
                        <input type="file" id="input-file-now" class="dropify" name="photo" data-height="100" data-default-file="{{$product->feature_image}}" />
                    </div>
                
                </div>
                <div class="col-lg-8 col-md-8">
                <div class="form-wrap form-wrap2 mt-4">
                    <label class="col-8 col-form-label">Gambar Produk</label>
                    <div class="col-lg-12 col-md-12">
                    <form enctype="multipart/form-data">
                        <div class="file-loading">
                            <input id="kv-explorer" type="file" accept="image/*" name="file[]" multiple>
                        </div>
                        <div id="fileerror"></div>
                        <div id="counts"></div>
                    </div>
                    <br>
                    <div class="p-l-15 p-r-15">
                    <input type="hidden" name="count" id="count" value="{{count($galleries)}}">
                    <input type="hidden" id="a" name="jml" value="">
                        <input type="checkbox" class="js-switch" data-color="#4886ff" data-size="small" name="galdel" value="1">
                        <label class="m-l-10"> Hapus gambar  </label>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="font-size: 15px;">
                    Management Produk
                    </h6>
                    <hr class="mt-4  mb-3">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group m-t-40 row">
                            <label class="col-4 col-form-label">Stok</label>
                            <div class="col-8">
                                <input name="stock" class="form-control" value="{{$product->stock}}" placeholder="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Harga(Rp)<span class="required"><code>*</code></span></label>
                            <div class="col-8">
                                <input name="price" id="rupiah" class="form-control" value="{{number_format($product->price, 0,',','.')}}" placeholder="Rp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">SKU
                                <p>
                                    <small>Masukan SKU untuk menambahkan kode unik ke produk.</small>
                                </p>
                            </label>
                            <div class="col-8">
                                <input name="sku" class="form-control" placeholder="Masukan Sku" value="{{$product->sku}}">
                            </div>
                        </div>
                    </div> 
                </div>
            </div>    
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="font-size: 15px;">Spesifikasi Produk</h6>
                    <hr class="mt-4  mb-3">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group row" id="dimension">
                        <label class="col-4 col-form-label">Dimensi(cm)<code>*</code></span>
                                <p>
                                    <small>(Masukan dimensi untuk ukuran paket (bukan ukuran barang))</small> 
                                </p>
                            </label>
                            <div class="col-2">
                            <input type="number" name="length" min="0" max="1000000" step="1" class="form-control" value="{{$product->length}}" autocomplete="off" placeholder="L" required>
                                <small>(Panjang produk)</small>
                            </div>
                            <div class="col-2">
                                <input type="number" name="width" min="0" max="1000000" step="1" class="form-control" value="{{$product->width}}" autocomplete="off" placeholder="W" required>
                                <small>(Lebar produk)</small>
                            </div>
                            <div class="col-2">
                                <input type="number" name="height" min="0" max="1000000" step="1" class="form-control" value="{{$product->height}}" autocomplete="off" placeholder="H" required>
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
                                <input name="color" type="text" class="form-control" value="{{$product->color}}" data-role="tagsinput">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Ukuran
                                <p>
                                    <small>(Masukan warna produk dipisahkan dengan koma[,]/enter)</small>
                                </p>
                            </label>
                            <div class="col-8">
                                <div class="tags-default">
                                    <input name="sizes" type="text" class="form-control" value="{{$product->sizes}}" data-role="tagsinput">
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>    
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="font-size: 15px;">
                        Deskripsi Produk 
                    </h6>
                    <hr class="mt-4  mb-3">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Deskripsi
                                <p>
                                    <small>
                                        Masukan deskripsi dan informasi detail produk.Rekomendasi panjang >= 200 karakter.
                                    </small>
                                </p>
                            </label>
                            <div class="col-8">
                                <textarea name="description" class="form-control" rows="5">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">T & C
                                
                            </label>
                            <div class="col-8">
                                <textarea name="policy" class="form-control" rows="5">{{$product->policy}}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-4 col-form-label">SLA(Days)</label>
                            <div class="col-8">
                                <input name="sla" type="text" class="form-control" value="{{$product->sla}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
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
                                <input name="url" class="form-control" value="{{$product->url}}" placeholder="https://www.youtube.com/">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">
                               Video Produk 2
                                <span class="required"> <small style="font-size: 9px;">(Pilihan)</small> </span>
                            </label>
                            <div class="col-8">
                                <input name="url2" class="form-control" value="{{$product->url2}}" placeholder="https://www.youtube.com/">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">
                                Video Produk 3
                                <span class="required"> <small style="font-size: 9px;">(Pilihan)</small> </span>
                            </label>
                            <div class="col-8">
                                <input name="url3" class="form-control" value="{{$product->url3}}" placeholder="https://www.youtube.com/">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-4 col-form-label">
                                Produk Tags 
                                <span class="required">
                                    <p>
                                        <small>(Masukan produk tags dipisahkan dengan koma[,]/enter)</small>
                                    </p>
                                </label>
                            <div class="col-8">
                                <div class="tags-default">
                                    <input type="text" name="tags" class="form-control" value="{{$product->tags}}" data-role="tagsinput">
                                </div>
                                <div class="form-row">
                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>    
        </div>
        
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 col-md-12">
                        <div class="button-group">
                            <button type="submit" class="btn btn-primary waves-effect waves-light m-t-10 pull-right"><i class="fa fa-edit"></i> Update</button>
                        </div>
                    </div> 
                </div>
            </div>    
        </div>
        </form> 
    </div>
</div>
@endsection

@push('js')
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="{{asset('assets/fileinput/sortable.js')}}" type="text/javascript"></script>
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
 
  <script>
      $(document).ready(function () {
        @if(\Session::has('message'))
            $.toast({
                heading: 'Warning!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3000,
                stack: 6
            });
            @endif
    })
      $(document).ready(function () {
          $("#kv-explorer").fileinput({
                'theme': 'explorer-fas',
                'uploadUrl': '#',
                uploadAsync: false,
                overwriteInitial: false,
                reversePreviewOrder: true,
                initialPreviewAsData: true,
                'showUpload': false,
                maxFileCount: 10,
                minImageWidth: 300,
                minImageHeight: 300,
                uploadExtraData: function() {
                    return {
                        _token: "{{ csrf_token() }}",
                    };
                },
              
                fileActionSettings: {
                            showRemove: true,
                            showUpload: false,
                            showZoom: true,
                            showDrag: true,
                },
                allowedFileExtensions: ["jpg", "png", "gif"]
            }).on('filesorted', function(e, params) {
                console.log('Modified initial preview is ', $("#input-pr-rev").data('fileinput').initialPreview);
            })
        
      });
  </script>
 
  <script>
      $(function() {
          // Switchery
          var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
          $('.js-switch').each(function() {
              new Switchery($(this)[0], $(this).data());
          });

      });

      $("#allow").change(function () {
           $("#dimension").slideToggle("slow");
        });
  </script>

<script type="text/javascript">
		
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
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
</script>

  <script>
  $("#maincats").change(function () {
        $("#subs").html('<option value="">Choose..</option>');
        $("#subs").attr('disabled',true);
        $("#childs").html('<option value="">Choose..</option>');
        $("#childs").attr('disabled',true);
        var mainid = $(this).val();
        $.get('{{url('/')}}/subcats/'+mainid, function(response){
            $("#subs").attr('disabled',false);
            $.each(response, function(i, cart){
                $.each(cart, function (index, data) {
                    $("#subs").append('<option value="'+data.id+'">'+data.name+'</option>');
                })
            })
        });
    });
  </script>
  
  <script>
   
    $(document).ready(function () {
    id_product = <?php echo $product->id ?>;
    jQuery.validator.addMethod("nameRegex", function(value, element) {
            return this.optional(element) || /^[a-z0-9\ \s]+$/i.test(value);
        }, "Not Allowed for Special Characters");

    $('#form').validate({ // initialize the plugin
        rules: {
            title: {
                required: true,
                maxlength: 255,
                remote:{
                url: './edit/check',
                    type: "get"
                }
            },
            mainid: {
                required: true,
            },
            photo: {
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
            } else if(element.attr("name") == 'jml') {
                error.insertAfter("#counts");
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            
            title: {
                required: "The Product Name field is required.",
                maxlength: "Maximum of 10 characters",
                remote: "Username already taken"
            },
            mainid: {
                required: "Kolom kategori produk harus di isi.",
            },
            photo: {
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
</script>
  <script>
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
