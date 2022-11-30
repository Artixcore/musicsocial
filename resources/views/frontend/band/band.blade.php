@extends('layouts.app')

@section('meta')

<meta name="description" content="All Bands are here.">
<meta name="keywords" content="Music | Social Networking">
<meta name="author" content="Ismam Tabriz">

@endsection

@section('style_css')
{{-- <style>
    .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
</style> --}}
@endsection
@section('content')
<div class="py-3">
<div class="row">
        <div class="col-md-3">
            <ul class="list-group list-group-flush sha">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
        </div>

        <div class="col-md-6">
            <div class="card sha">
                <img src="https://wallpaperaccess.com/full/30100.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>


    <div class="col-md-3">
        <ul class="list-group list-group-flush sha">
            <li class="list-group-item text-center"><a class="btn btn-outline-success" href="#">Cheate New Band</a></li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
    </div>


</div>
</div>
@endsection
