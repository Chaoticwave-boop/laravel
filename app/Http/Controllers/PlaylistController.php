<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playlists = Playlist::all();
        return view('playlists.index', ['playlists'=> $playlists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playlists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name' => "string|required"
        ]);

        Playlist::create([
            'name' => $request->name,
        ]);
        return redirect(route("playlists.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        return view('playlists.show',  ['playlists'=> $playlist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // PlaylistController.php

    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();
        return redirect()->route('playlists.index');
    }

   
    }
