@extends('layouts.app')

@push('before-css')
@endpush

@section('content')
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- box -->
    <!-- ============================================================== -->
    <div class="row page-titles">
      <div class="col-md-12 align-self-center">
        <h4 class="card-title text-uppercase m-b-15 font-18 text-dark font-medium">Default cards</h4>
        <h6 class="card-subtitle m-b-15 text-muted"> Use the classes <code>btn btn-default, btn-default, btn-default</code> to quickly create different kinds of buttons. Use the classes <code>btn btn-default</code>. </h6>
      </div>
    </div>
    <div class="row">
      <!-- Column -->
      <div class="col-lg-4 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img1.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in</h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new. </p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img2.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in </h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new. </p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img3.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>
          <div class="card-body p-b-0">
            <h4 class="card-title2 text-primary">American writer of bad cowboy stories arrived in</h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new. </p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart text-primary"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <!-- Column -->
    </div>
    <div class="row">
      <!-- Column -->
      <div class="col-lg-6 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img5.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories</h4>
            <br>
            <p class="card-text m-b-20 font-16">Volunteering to help people in need combined with travelling to faraway places is a new trend in the travel industry. It is called voluntourism.</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-7 col-md-6">15.07.2017</div>
              <div class="col-lg-5 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-6 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img6.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in Vienna one cold morning in </h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new trend in the travel industry. It is called voluntourism. </p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-7 col-md-6">15.07.2017</div>
              <div class="col-lg-5 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <!-- Column -->
    </div>
    <div class="row page-titles mt-4">
      <div class="col-md-12 align-self-center">
        <h4 class="card-title text-uppercase m-b-15 font-18 font-medium">Large card</h4>
        <h6 class="card-subtitle m-b-15 text-muted">Use the classes <code>btn btn-default, btn-default, btn-default</code> to quickly create different kinds of buttons. Use the classes btn btn-default.</h6>
      </div>
    </div>
    <div class="row">
      <!-- Column -->
      <div class="col-lg-8 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img7.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in Vienna one</h4>
            <p class="card-text m-b-20 font-16">It was shortly after World War II. Vienna was in ruins and occupied by the four Allied powers, the Americans, the Russians, the British and the French. Holly Martins had been invited to Vienna by an old friend, Harry Lime, and so he was surprised that Harry was not there to meet him.</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-7 col-md-6">15.07.2017</div>
              <div class="col-lg-5 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img4.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in</h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new trend.</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <!-- Column -->
    </div>




    <div class="row page-titles mt-4">
      <div class="col-md-12 align-self-center">
        <h4 class="card-title text-uppercase m-b-30 font-18 font-medium text-dark">custom cards</h4>
        <h6 class="card-subtitle m-b-15 text-muted">

          Use the classes <code>btn btn-default, btn-default, btn-default</code> to quickly create different kinds of buttons. Use the classes <code>btn btn-default</code>.


        </h6>
      </div>
    </div>
    <div class="row">
      <!-- Column -->
      <div class="col-lg-6 col-md-6 p-r-0">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img8.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4 text-right"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>

        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-6 col-md-6 p-l-0">
        <!-- Card -->
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in Vienna one cold morning in February</h4>
            <p class="card-text font-16">It was shortly after World War II. Vienna was in ruins and occupied by the four Allied powers, the Americans, the Russians, the British and the French. Holly Martins had </p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-7">15.07.2017</div>
              <div class="col-lg-5 col-md-5">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>

      <!-- Column -->
    </div>



    <div class="row m-b-25">
      <!-- Column -->

      <div class="col-lg-6 col-md-6 p-r-0">
        <!-- Card -->
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in Vienna one cold morning in February</h4>
            <p class="card-text font-16">It was shortly after World War II. Vienna was in ruins and occupied by the four Allied powers, the Americans, the Russians, the British and the French. Holly Martins had </p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div><div class="col-lg-6 col-md-6 p-l-0">
        <!-- Card -->
        <div class="card">
          <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{asset('assets/imgs/gallery/img9.jpg')}}" alt="Card image cap">
            <div class="card-img-details p-4"><a href="" class="label label-default">Literature</a> <a href="" class="label label-default">Books</a> </div>
          </div>

        </div>
        <!-- Card -->
      </div>

      <!-- Column -->
    </div>









    <div class="row page-titles mt-4">
      <div class="col-md-12 align-self-center">
        <h4 class="card-title text-uppercase m-b-30 font-18 font-medium text-dark">Small Cards</h4>
        <h6 class="card-subtitle m-b-15 text-muted"> Use the classes <code>btn btn-default, btn-default, btn-default</code> to quickly create different kinds of buttons. Use the classes <code>btn btn-default</code>. </h6>
      </div>
    </div>
    <div class="row">
      <!-- Column -->
      <div class="col-lg-4 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in</h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new trend</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in</h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new trend</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in</h4>
            <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new trend</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-5 col-md-6">15.07.2017</div>
              <div class="col-lg-7 col-md-6">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <!-- Column -->
    </div>
    <div class="row">
      <!-- Column -->
      <div class="col-lg-6 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories Holly Martins</h4>
            <p class="card-text m-b-20 font-16">It was shortly after World War II. Vienna was in ruins and occupied by the four Allied powers, the Americans, the Russians, the British and the French. Holly Martins</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-7 col-md-7">15.07.2017</div>
              <div class="col-lg-5 col-md-5">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
      </div>
      <div class="col-lg-6 col-md-6">
        <!-- Card -->
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title2">American writer of bad cowboy stories arrived in Vienna one</h4>
            <p class="card-text m-b-20 font-16">It was shortly after World War II. Vienna was in ruins and occupied by the four Allied powers, the Americans, the Russians, the British and the French. Holly Martins</p>
            <div class="row b-t-1 p-t-15">
              <div class="col-lg-7 col-md-7">15.07.2017</div>
              <div class="col-lg-5 col-md-5">
                <ul class="card-detail">
                  <li><i class="fas fa-comment"></i> 10</li>
                  <li><i class="fas fa-heart"></i> 315</li>
                  <li><i class="fas fa-share-alt"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
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
