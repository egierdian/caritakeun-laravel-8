@extends('frontend.layouts.index')

@section('content')
<!-- contents -->
<div class="custom-content" style="background:#f3f3f3;min-height: 400px;">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <div class="card">
                    <div class="card-body">
                        <h4>{{$data->title}}</h4>
                        {!! $data->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end-contents -->
@endsection