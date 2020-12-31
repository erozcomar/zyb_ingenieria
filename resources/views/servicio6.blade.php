@extends('plantilla')

@section('seccion')

<section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{trans('zyb.servicio6')}}</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
    </div>
    <div class="container about6-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <p class="about-text">
           {{trans('zyb.servicio6-completo')}}
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection