@extends("master")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h4>Result for search</h4>
            <div class="row">
                @foreach ($datas as $data )

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $data->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $data->name }}</h5>
                          <p class="card-text">{{ $data->price }}</p>
                          <p class="card-text">{{ $data->category }}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                    
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection