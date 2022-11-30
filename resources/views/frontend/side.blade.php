<div class="col-3">
    <div class="card sha">
        <li class="list-group-item"><i class="fas fa-address-card fa-lg"></i><a style="color:#000000; font-size:20px;" href="{{url('about')}}/{{ Auth::user()->name }}"> About </a> </li>
        <li class="list-group-item"><i class="fas fa-user-tie fa-lg"></i><a style="color:#000000; font-size:20px;" href="{{url('professional')}}/{{ Auth::user()->name }}"> Professional </a> </li>
        <li class="list-group-item"><i class="fas fa-graduation-cap fa-lg"></i><a style="color:#000000; font-size:20px;" href="{{url('studied')}}/{{ Auth::user()->name }}"> Studied </a> </li>
        <li class="list-group-item"><i class="fas fa-briefcase fa-lg"></i><a style="color:#000000; font-size:20px;" href="{{url('work')}}/{{ Auth::user()->name }}"> Work </a> </li>
        <li class="list-group-item"><i class="fas fa-restroom fa-lg"></i><a style="color:#000000; font-size:20px;" href="{{url('relation')}}/{{ Auth::user()->name }}"> Relationship </a> </li>
        <li class="list-group-item"><i class="fas fa-home fa-lg"></i><a style="color:#000000; font-size:20px;" href="{{url('livin')}}/{{ Auth::user()->name }}"> Live In </a> </li>
    </div>
</div>
