@extends('frontend.layouts.index')

@section('content')
<!-- contents -->
<div class="custom-content" style="background:#f3f3f3;min-height: 400px;">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 style="font-weight: 600; margin-bottom:10px;">{{$data->title}}</h3>
                        {!! $data->content !!}
                        <span class="badge badge-primary">{{ $data->creator }}</span>
                        <span class="badge badge-info">#{{ $data->category }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end-contents -->
@endsection