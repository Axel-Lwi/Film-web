@extends('template.master')

@section('content')
  @foreach ($genre as $homegenre)
  <h2>{{$homegenre->name}}</h2>
  <div class="row justify">
    @foreach ($movie as $homemovie) 

        <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="{{asset('img/'.$homemovie->photo)}}" alt="movie-thumb">
          <div class="card-body">
          <h5>{{$homemovie->title}}</h5>
          
          <a href="{{route('detail',['mov_id'=>$homemovie->id])}}" class="btn btn-primary btn-block">Lihat Film</a>
          </div>
        </div>
    @endforeach
  </div>
  @endforeach

@endsection