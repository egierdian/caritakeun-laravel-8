@extends('frontend.layouts.index')

@section('content')
<!-- contents -->
<div class="custom-content" style="background:#f7f7f7;min-height: 400px;margin-top:20px">
    <div class="row">
        <div class="container">
            <div class="col-12 pb-3">
                <div class="card " style="border:none; box-shadow: 1px 1px 5px #c7c7c7; border-radius:5px;">
                    <div class="card-body">
                        <h3 style="font-weight: 600; margin-bottom:10px;">{{$data->title}}</h3>
                        {!! $data->content !!}
                        <p></p>
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