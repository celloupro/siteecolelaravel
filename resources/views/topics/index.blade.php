@extends('layouts.app')

@section('content')

<!-- notice -->
<section class="section">
    <div class="container">
    <div class="container"><br><br><br><br><br><br>
        <div class="row mb-4 justify-content-between">
            <div class=""></div>
           
        </div>
        
      <div class="row">
        <div class="col-12">
          <ul class="list-unstyled">
            <!-- notice item -->
            @foreach ($topics as $topic)
                <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                    
                        <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                        <h4><a href="{{ route('topics.show', $topic) }}">{{ $topic->title }}</a></h4>
                        <p>{{ $topic->content}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <small>Posté le{{ $topic->created_at->format('d/m/y a H:m')}}</small>
                          <span class="badge badge primary">{{ $topic->user->name}}</span>
                        </div>

                        </div>
                    {{-- <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="notice-single.html" class="btn btn-primary">read more</a></div> --}}
                </li>
            @endforeach
            <!-- notice item -->
          </ul>
        </div>
      </div>
      <div class="row justify-content-center">
          {{$topics->links()}}
      </div>
    </div>
  </section>
  
@endsection