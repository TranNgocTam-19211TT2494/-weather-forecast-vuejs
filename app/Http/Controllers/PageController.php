<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = json_decode(
            Http::get('https://api.themoviedb.org/3/trending/tv/day?api_key=a4999a28333d1147dbac0d104526337a&language=vi-VN&page=1')
            
        );
        $sides = json_decode(
            Http::get('https://api.themoviedb.org/3/trending/tv/week?api_key=a4999a28333d1147dbac0d104526337a&language=vi-VN&page=1')
            
        );
        
        //dd(array_slice($movies->results, 0, 6));
        return view('home')->with('movies',array_slice($movies->results, 0, 6))
                           ->with('sides',array_slice($sides->results, 0, 8));
    }

    //Chi tiết phim:
    public function movieById($id)
    {
        //https://api.themoviedb.org/3/tv/{tv_id}?api_key=<<api_key>>&language=en-US
        $movie = json_decode(
            Http::get('https://api.themoviedb.org/3/tv/+'.$id.'+?api_key=a4999a28333d1147dbac0d104526337a&language=vi-VN')
            
        );
       
        //dd($movie);
        $genres = $movie->genres;
        //dd($genres);
        return view('pages.movie-detail')->with('movie',$movie)->with('genres' , $genres);
    }
    //Video phim:
    public function movieWatchingByKey($id)
    {
        $video = json_decode(
            Http::get('https://api.themoviedb.org/3/tv/+'.$id.'+/videos?api_key=a4999a28333d1147dbac0d104526337a&language=en-US')
        );
        $movie = json_decode(
            Http::get('https://api.themoviedb.org/3/tv/+'.$id.'+?api_key=a4999a28333d1147dbac0d104526337a&language=vi-VN')
        );

        //dd($video->results[0]);
        return view('pages.movie-watching')->with('movie',$movie)->with('video',$video->results[0]);
    }
}
