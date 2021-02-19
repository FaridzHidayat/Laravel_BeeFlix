<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;
use App\episode;
use App\genre;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $movies=movie::select('*')->where('genre_id','=','1')->get();
        $movies1=movie::select('*')->where('genre_id','=','2')->get();
        $movies2=movie::select('*')->where('genre_id','=','3')->get();
        return view('homepage',['movies'=>$movies,'movies1'=>$movies1,'movies2'=>$movies2]);
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
        $eps = episode::select('*')->where('movie_id','=',$id)->paginate(3);
        $passing = movie::select('*')->join('genres','movies.genre_id','genres.id')->where('movies.id','=',$id)->get();
        return view('moviedetail',['passing'=>$passing,'eps'=>$eps]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = genre::select('*')->where('id','=',$id)->get();
        $passing1 = movie::select('movies.id','movies.*')->join('genres','movies.genre_id','genres.id')->where('movies.genre_id','=',$id)->get();
        return view('categori',['passing1'=>$passing1,'genre'=>$genre]);
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
