@extends('layouts.app')

@section('style_css')
{{-- <style>
    a{
        font-size: 20px;
    }
a:hover{
    font-size:25px;
}
</style> --}}
@endsection

@section('content')
<div class="container py-3">
{{-- @foreach ($user as $about) --}}

    <div class="row">

        @include('frontend.side')

      <div class="col-8">
        <div class="card sha">
            @if (Auth::user())
                <div class="card-header"><a href="{{ url('about/edit') }}/{{ Auth::user()->name }}" class="btn btn-outline-success">Edit</a></div>
            @else
            @endif
            @php
                $abouts = App\About::where('user_id', auth()->id())->get();
            @endphp
        @foreach ($abouts as $about)
            <div class="card-body">
                {{ $about->desc }}
            </div>
        @endforeach
        </div>
      </div>
    </div>


</div>
@endsection

@section('footer_js')

@endsection
