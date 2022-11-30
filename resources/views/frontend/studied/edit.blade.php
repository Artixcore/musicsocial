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
            <div class="card-body">
                <form action="{{ url('updateabout') }}/{{ Auth::user()->id }}" method="POST">
                    @csrf
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">About</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="desc" placeholder="About you (250 word Maximum)" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Quote</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="favorite_quote" placeholder="Your Favorite Quote" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                          <input type="submit" value="Save" class="btn btn-outline-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>


</div>
@endsection

@section('footer_js')

@endsection
