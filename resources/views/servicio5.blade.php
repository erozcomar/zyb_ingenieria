@extends('plantilla')

@section('seccion')


<section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{trans('zyb.servicio5')}}</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
    </div>
    <div class="container about5-container wow fadeInUp">
      <div class="row">
        <div class="col-md-4 col-md-push-6 about-content">
          <p class="about-text">
           {{trans('zyb.servicio5-completo')}}
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection