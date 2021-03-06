@extends('layout.master')

@section('content')

<h1>Contact</h1>
<hr />


{!! Form::open(['action'=> 'PagesController@dosend', 'method'=>'POST' ])  !!}
<div class="row mb-4"> 
    <div class="form-group col-12 ">
        {{ Form::label('Name') }}
        {{ Form::text('name', '', [ 'placeholder'=>'Enter your name', 'class'=>'form-control' ]) }}
    </div>

    <div class="form-group col-12  ">
        {{ Form::label('Email') }}
        {{ Form::text('email', '', [ 'placeholder'=>'Enter your email', 'class'=>'form-control' ]) }}
    </div>
    
    <div class="form-group col-12 " >
        {{ Form::label('Subject') }}
        {{ Form::text('subject', '', [ 'placeholder'=>'Enter your subject', 'class'=>'form-control' ]) }}
    </div>

    
    <div class="form-group col-12 ">
        {{ Form::label('Body') }}
        {{ Form::textarea('body', '', [ 'placeholder'=>'Enter message', 'class'=>'form-control' ]) }}
    </div>

    <div class="form-group pull-right">
        {{ Form::submit('Send Message', ['class'=>'btn btn-primary']) }}
    </div>
</div>
{!! Form::close()  !!}

<footer class="site-section bg-light footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-3">
          <h3 class="footer-title">Me Address</h3>
          <p><span class="d-inline-block d-md-block">203 Fake St. Mountain View,</span> San Francisco, California, USA</p>
        </div>
        <div class="col-md-5 mx-auto">
          <div class="row">
            <div class="col-lg-4">
              <h3 class="footer-title">Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Web App</a></li>
                <li><a href="#">Graphic</a></li>
                <li><a href="#">Branding</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h3 class="footer-title">Resources</h3>
              <ul class="list-unstyled">
                <li><a href="#">Web App</a></li>
                <li><a href="#">Graphic</a></li>
                <li><a href="#">Branding</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h3 class="footer-title">Links</h3>
              <ul class="list-unstyled">
                <li><a href="#">Web App</a></li>
                <li><a href="#">Graphic</a></li>
                <li><a href="#">Branding</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h3 class="footer-title">Follow Me</h3>
          <a href="#" class="social-circle"><span class="icon-twitter"></span></a>
          <a href="#" class="social-circle"><span class="icon-facebook"></span></a>
          <a href="#" class="social-circle"><span class="icon-instagram"></span></a>
          <a href="#" class="social-circle"><span class="icon-dribbble"></span></a>
          <a href="#" class="social-circle"><span class="icon-linkedin"></span></a>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          </div>
      </div>
    </div>
  </footer>
@endsection()
