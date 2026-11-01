@extends('admin.sidbar')
@section('admin')
@foreach ($data as $data1)

<div class="card mb-4 shadow-lg"
     style="
        background: #ffffff;
        border: none;
        border-radius: 14px;
        overflow: hidden;
        color: #1a1a1a;
     ">

    <!-- Card Header -->
    <div style="
        background: #f8f9fc;
        border-bottom: 1px solid #e5e7eb;
        padding: 18px 22px;
    ">
        <h4 class="mb-0" style="color: #111827; font-weight: 700;">
            {{ $data1['name'] }}
        </h4>
    </div>

    <!-- Card Body -->
    <div class="card-body" style="padding: 22px;">

        <div class="row">

            <div class="col-md-6 mb-4">
                <small style="color: #6b7280; font-weight: 600;">
                    EMAIL
                </small>
                <div style="color: #111827; font-size: 16px; margin-top: 5px;">
                    {{ $data1['email'] }}
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <small style="color: #6b7280; font-weight: 600;">
                    JOB TYPE
                </small>
                <div style="color: #111827; font-size: 16px; margin-top: 5px;">
                    {{ $data1['job_type'] }}
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <small style="color: #6b7280; font-weight: 600;">
                    DESCRIPTION
                </small>
                <div style="
                    color: #374151;
                    font-size: 15px;
                    line-height: 1.6;
                    margin-top: 5px;
                ">
                    {{ $data1['description'] }}
                </div>
            </div>

            <div class="col-md-6 mb-2">
                <small style="color: #6b7280; font-weight: 600;">
                    USER NAME
                </small>
                <div style="color: #111827; font-size: 16px; margin-top: 5px;">
                    {{ $data1['user']['name'] }}
                </div>
            </div>

            <div class="col-md-6 mb-2">
                <small style="color: #6b7280; font-weight: 600;">
                    USER EMAIL
                </small>
                <div style="color: #111827; font-size: 16px; margin-top: 5px;">
                    {{ $data1['user']['email'] }}
                </div>
            </div>

        </div>

    </div>

</div>

@endforeach
@endsection