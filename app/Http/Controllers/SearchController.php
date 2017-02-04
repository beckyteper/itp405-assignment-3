<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function search() {
        return view('search');
    }

    public function results() {
        $search = request('dvdTitle');

        /*
            SELECT title, rating_name, genre_name
            FROM dvds
            INNER JOIN ratings
            ON dvds.rating_id = ratings.id
            INNER JOIN genres
            ON dvds.genre_id = genres.id
            WHERE title LIKE '%searchterm%'
        */
        $dvds = DB::table('dvds')
            ->select('title', 'rating_name', 'genre_name')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
            ->join('genres', 'dvds.genre_id', '=', 'genres.id')
            ->where('title', 'LIKE', "%$search%")
            ->orderby('title', 'ASC')
            ->get();

        return view('search-results', [
            'dvds' => $dvds,
            'search' => $search
        ]);
    }

    public function redirectFromHome() {
        return redirect('/dvds/search');
    }
}
