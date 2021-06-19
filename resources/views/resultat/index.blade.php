@extends('layouts.app')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Our teacher</a></li>
            <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
          </ul>
          <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  
<!-- teachers -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- teacher category list -->
          <ul class="list-inline text-center filter-controls mb-5">
            <li class="list-inline-item m-3 text-uppercase active" data-filter="all">All</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="terminale">Terminale</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="1ere">1ere</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="2nd">2nd</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="3eme">3eme</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="4eme">4eme</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="5eme">5eme</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="6eme">6eme</li>
          </ul>
        </div>
      </div>
      <!-- teacher list -->
      <div class="row filtr-container mb-40">
        @foreach ($resultat as $item)
            <!-- teacher -->
            <div data-category="{{$item->niveau}}" class="col-lg-4 col-sm-6 mb-5 mb-10 filtr-item">
                <div class="card border-0 rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" width="260" height="200" src="{{asset('storage/'.$item->photo)}}" alt="teacher">
                <div class="card-body">
                    <a href="">
                    <h4 class="card-title">{{$item->nom}}</h4>
                    </a>
                    <div class="row">
                        <div class="col-md-6">
                            <p>{{$item->moyenne}}</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{$item->classe}}</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- teacher -->
        @endforeach
      </div>
    </div>
  </section>
  <!-- /teachers -->

@endsection