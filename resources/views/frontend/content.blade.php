@extends('frontend.layouts.index')

@section('content')
<!-- contents -->'
<div class="custom-content" style="background:#f7f7f7;min-height: 400px;">

    <div class="row">
        <div class="container">
            @foreach($data as $row)
            <div class="col-12 pb-3">
                <a href="/detail/{{$row->id}}">
                    <div class="card custom-card" style="box-shadow: 1px 1px 5px #c7c7c7; border-radius:5px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title}}</h5>
                            <span class="badge badge-primary">{{ $row->creator }}</span>
                            <span class="badge badge-info">{{ $row->category }}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-12">
            {!! $data->links() !!}

            </div>
        </div>
    </div>
</div>
<!-- end-contents -->
@endsection