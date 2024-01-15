<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    public function index()
    {
        // Fetch only playlists belonging to the authenticated user
        $playlists = Auth::user()->playlists;
        return view('playlists.index', ['playlists' => $playlists]);
    }

    public function create()
    {
        return view('playlists.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|required',
        ]);

        Auth::user()->playlists()->create([
            'name' => $request->name,
        ]);

        return redirect(route('playlists.index'));
    }

    
    public function show(Playlist $playlist)
    {
        // Make sure the requested playlist belongs to the authenticated user
        #$this->authorize('view', $playlist);
    
        // Fetch the songs related to the playlist for the authenticated user
        $songs = Auth::user()->playlists()->findOrFail($playlist->id)->songs;
    
        return view('playlists.show', [
            'playlist' => $playlist,
            'songs' => $songs,
        ]);
    }
    

    
    public function destroySong($playlistId, $songId)
    {

        $playlist = Auth::user()->playlists()->findOrFail($playlistId);

        $playlist->songs()->detach($songId);

        return redirect()->route('playlists.show', ['playlist' => $playlistId]);
    }

    public function edit(Playlist $playlist)
    {
        $this->authorize('update', $playlist);

    }

    public function update(Request $request, Playlist $playlist)
    {
        $this->authorize('update', $playlist);
    }

  
    public function destroy($id)
    {
      
        $playlist = Auth::user()->playlists()->findOrFail($id);
        $playlist->delete();

        return redirect()->route('playlists.index');
    }
}
