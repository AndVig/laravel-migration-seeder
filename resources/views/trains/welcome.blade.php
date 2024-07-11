@extends ('layouts.app')

@section('main')
<h1>treni</h1>
<div class="row">
    @foreach ($trains as $train)
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$train->train_code}}</h5>
                <p class="card-text">
                    da: {{$train->departure_station}}
                    data partenza: {{$train->departure_time}}
                    <hr>
                    a: {{$train->arrival_station}}
                    data arrivo: {{$train->arrival_time}}
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection