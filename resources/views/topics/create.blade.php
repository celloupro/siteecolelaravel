@extends('layouts.app')
    {!! NoCaptcha::renderJs() !!}


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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                         <h1>Créer un topic</h1>
                        <hr>
                        <form action="{{ route('topics.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titre du topic</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
                            @error('title')
                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Votre sujet</label>
                            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5"></textarea>
                            @error('content')
                            <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                         </div>
                       
         
                        <button type="submit" class="btn btn-primary">Créer mon topic</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<br><br><br><br><br>
@endsection
