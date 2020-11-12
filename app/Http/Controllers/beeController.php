<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class beeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = DB::table('genres')->get();
        $movie = DB::table('movies')->get();

        return view('welcome', compact('genre','movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = DB::table('movies')->join('genres','movies.genre_id','=','genres.id')
                                    ->where('movies.id',$id)
                                    ->select('movies.*','genres.name')
                                    ->get();
        $episode = DB::table('episodes')->where('movie_id',$id)->paginate(3);

        return view('detail', compact('episode','movie'));
    }

    public function pergenre($id)
    {
        $genre = DB::table('genres')->where('id',$id)->get();
        $movie = DB::table('movies')->where('genre_id',$id)->get();

        return view('pergenre', compact('genre','movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
