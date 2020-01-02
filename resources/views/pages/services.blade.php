@extends('layout.master')

@section('content')

<div class="site-section" id="services-section">
    <div class="container">
      <div class="row ">
        <div class="col-12 mb-5 position-relative">
          <h2 class="section-title text-center mb-5">My Services</h2>
        </div>

        <div class="col-md-6 mb-4">
          <div class="service d-flex h-100">
            <div class="service-number mr-4"><span class="icon-style"></span></div>
            <div class="service-about">
              <h3>Web Development Languages </h3>
              <p>Backend engineer  server-side programming languages like Java, Python, Ruby, PHP ,  . Net etc. ></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="service d-flex h-100">
            <div class="service-number mr-4"><span class="icon-business_center"></span></div>
            <div class="service-about">
              <h3>Database and cache </h3>
              <p>various DBMS technology is another important need of backend developer. MySQL, MongoDB, Oracle, SQLServer, Redis are widely used for this purpose. Knowledge of caching mechanisms like varnish, Memcached, Redis is a plus. </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="service d-flex h-100">
            <div class="service-number mr-4"><span class="icon-desktop_windows"></span></div>
            <div class="service-about">
              <h3>Server</h3>
              <p>Exposure to handling Apache, Nginx, IIS servers, Microsoft IIS

                is desirable. A good background in Linux helps tremendously in administering servers. </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="service d-flex h-100">
            <div class="service-number mr-4"><span class="icon-layers"></span></div>
            <div class="service-about">
              <h3>Web Design</h3>
              <p>I design and develop responsive Search Engine friendly websites that help you to achieve the goals of your business</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-layers"></span></div>
              <div class="service-about">
                <h3>API (REST & SOAP):</h3>
                <p>I have a Knowledge of web services or API is also important for full stack developers.  creations and consumption of REST and SOAP services is desirable. </p>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>

@endsection()
