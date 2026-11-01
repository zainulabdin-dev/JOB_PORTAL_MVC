@extends('admin.sidbar')
@section('admin')
    <div class="container">
        <h1 style="margin-left: 500px;margin-top:30px;">Insert job type</h1>
        <div class="row text-center">
            <div class="col-md-6 offset-3">
                <form action="{{route('jobtype')}}" method="post">
                    @csrf
                <input type="text" class="form-control mt-5" style="margin-left:100px;" name="name">
                <textarea name="description" class="form-control mt-4"style="margin-left:100px;" ></textarea>
            <button class="btn btn-danger mt-5"style="margin-left:170px;">INSERT</button>
        </form>   
        </div>
        </div> 
    </div>
@endsection