<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Songs::all();
        return view('songs.index', ['songs'=> $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Songs $songs)
    {
        return view('songs.show' , ['songs' => $songs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Songs $songs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Songs $songs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Songs $songs)
    {
        //
    }

    public function showPlaylistForm(Songs $songs)
    {
        $playlist = Playlist::all();
        $user = Auth::user();
        return view("playlists.showPlaylistForm", ["playlist" => $playlist, "user" => $user, "song" => $songs]);
    }

    public function addSong(Playlist $playlist)
    {
        

    }

}
