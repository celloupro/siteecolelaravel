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
  <section class="section"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @foreach($topics as $item)
                            @if(Auth::user()->name == $item->user->name)
                                <div class="card m-3">
                                    <div class="card-header font-weight-bold text-center text-capitalize text-primary">
                                        <a href="{{ route('topics.show', $item) }}">{{$item->title}}</a>
                                    </div>
                                    <div class="card-body text-justify">
                                        <p class="h6">{{$item->content}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="justify-content-between">
                                            posté le {{\Carbon\Carbon::parse($item->created_at)->format("d/m/Y H:m")}} 
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
