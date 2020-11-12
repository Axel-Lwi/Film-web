@extends('template.master')

@section('content')
    <div class="row justify-content-center">
    @foreach ($movie as $detmovie)
        <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/'.$detmovie->photo)}}" alt="Card image cap">
            <div class="card-body">
            <h2>{{$detmovie->title}}</h2>
            <p class="card-text">{{$detmovie->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Rating : {{$detmovie->rating}}/5</li>
            <li class="list-group-item">Kategori : <a href="{{route('pergenre',['genrename'=>$detmovie->genre_id])}}">{{$detmovie->name}}</a></li>   
            <li class="list-group-item">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                      <tr>
                      <th scope="col">Episode</th>
                      <th scope="col">Judul</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($episode as $epi)
                            <tr>
                                <td>{{$epi->episode}}</td>
                                <td>{{$epi->title}}</td>
                            </tr>
                        @endforeach         
                    </tbody>
                  </table>
                  {{ $episode->links() }}
            </li>
            </ul>
            <div class="card-body">
            </div>
        </div>
        </div>
    @endforeach
    </div>
@endsection

