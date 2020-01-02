@extends('layout.master')

@section('content')


<div class="site-section" id="about-section">
    <div class="container">
      <div class="row ">
        <div class="col-12 mb-4 position-relative">
          <h2 class="section-title">About Me</h2>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
          <div class="bg-light pt-5">
          <img src="images/me.jpg" alt="Image" class="img-fluid" height="600">
          </div>
        </div>
        <div class="col-lg-4 order-2 order-lg-1">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
        </div>
        <div class="col-lg-4 order-3 order-lg-3">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam qui maiores, ipsa quibusdam distinctio! Expedita ipsum ex porro obcaecati.</p>
          <p><a href="/contact" class="btn smoothscroll btn-primary">Contact Me</a></p>
        </div>

      </div>
    </div>
  </div>




@endsection()
