@extends('admin.sidbar')
@section('admin')
   <h1 class="text-center mb-5 wow fadeInUp mt-5" style="margin-left: 160px;"  data-wow-delay="0.1s">All Category</h1>
@foreach ($data as $type)
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-4 mt-5 bg-secondary">
 <div class="card text-center">
  <div class="card-header">
  {{$type['created_at']}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$type['name']}}</h5>
    <p class="card-text">{{$type['description']}}</p>

  </div>
  <div class="card-footer text-muted">
  
  </div>
</div>
        </div>
    </div>
</div>
  
@endforeach

@endsection