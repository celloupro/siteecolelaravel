@extends('layouts.app')

@section('content')
    
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.html">Our Teacher</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">John Doe</li>
          </ul>
          <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->
  
  <!-- teacher details -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mb-5">
          <img class="img-fluid w-100" src="{{asset('style/images/teachers/teacher-1.jpg')}}" alt="teacher">
        </div>
        <div class="col-md-6 mb-5">
          <h3>Principale</h3>
          <h6 class="text-color">Computer Science</h6>
          <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque accusamus tenetur ea harum
            delectus ab consequatur excepturi, odit qui in quo quia voluptate nam optio, culpa aspernatur. Error placeat
            iusto officia voluptas quae.</p>
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
              <h4 class="mb-4">CONTACT INFO:</h4>
              <ul class="list-unstyled">
                <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>johndoe@email.com</a></li>
                <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>+120 345 876</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i>john Doe</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i>john Doe</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-skype mr-2"></i>john Doe</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-world mr-2"></i>johnDoe.com</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-location-pin mr-2"></i>1313 Boulevard
                    Cremazie,Quebec</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4 class="mb-4">SUMMARY OF ACTIVITIES/INTERESTS</h4>
              <ul class="list-unstyled">
                <li class="mb-3">Computer Networking</li>
                <li class="mb-3">Computer Security</li>
                <li class="mb-3">Human Computer Interfacing</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12">
          <h4 class="mb-4">BIOGRAPHY</h4>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <h4 class="mb-4">censeur et prof</h4>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="{{asset('style/images/teachers/teacher-1.jpg')}}" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><a class="text-color" href="#">prof</a></li>
              </ul>
              <a href="course-single.html">
                <h4 class="card-title">Complete Freelancing</h4>
              </a>
              <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna.</p>
              
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="{{asset('style/images/teachers/teacher-1.jpg')}}" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><a class="text-color" href="#">censeur</a></li>
              </ul>
              <a href="course-single.html">
                <h4 class="card-title">Branding Design</h4>
              </a>
              <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna.</p>
              
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="{{asset('style/images/teachers/teacher-1.jpg')}}" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><a class="text-color" href="#">(role dans l'ecole)</a></li>
              </ul>
              <a href="course-single.html">
                <h4 class="card-title">Art Design</h4>
              </a>
              <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /teacher details -->
  
@endsection