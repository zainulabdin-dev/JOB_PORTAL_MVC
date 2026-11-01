@extends('user.navbar')
@section('nav')
    <div class="continer">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                @foreach ($data as $data )
                    <div class="card text-center">
  <div class="card-header">
  </div>
  <h1>{{$data['title']}}</h1>
  <div class="card-body">
    <h5>job description</h5>
    <p class="card-title">{{$data['description']}}</p>
     <h5>location</h5>
    <p class="card-text">{{$data['location']}}</p>
     <h5>job time</h5>
    <p class="card-text">{{$data['job_time']}}</p>
     <h5>company name</h5>
    <p class="card-text">{{$data['company_name']}}</p>

    <a href="{{route('job_by_id',$data['id'])}}" class="btn btn-primary">apply now</a>
  </div>
</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection