<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;

class SongsController extends Controller
{

    public function index()
    {
        $songs = Song::get();

        return view('songs.list', compact('songs'));
    }

    public function details($id)
    {
        $songs = Song::find($id);

        return view('songs.details', compact('songs'));
    }

}
