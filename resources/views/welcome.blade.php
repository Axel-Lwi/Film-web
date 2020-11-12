@extends('template.master')

@section('content')
<div class="row">
  @foreach ($genre as $homegenre)
  <h2>{{$homegenre->name}}</h2>
  <a href="{{route('pergenre',['genrename'=>$homegenre->id])}}" class="btn">lainnya</a>
  <div class="row justify-content-center">
    @foreach ($movie as $homemovie) 
      @if ($homegenre->id == $homemovie->genre_id)
          
      
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('img/'.$homemovie->photo)}}" alt="movie-thumb">
          <div class="card-body">
          <h5>{{$homemovie->title}}</h5>
          
          <a href="{{route('detail',['mov_id'=>$homemovie->id])}}" class="btn btn-primary btn-block">Lihat Film</a>
          </div>
        </div>
      @endif
    @endforeach
  </div>
  @endforeach
</div>
  

@endsection