<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use View;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::all();
        return View::make('bookmarks.index')->with(['bookmarks' => $bookmarks]);
    }

    public function show($id)
    {
        $bookmark = bookmark::find($id);
        return View::make('bookmarks.show')->with(['bookmark' => $bookmark]);
    }

    public function destroy($id)
    {
        $bookmark = Bookmark::find($id);
        $bookmark->delete();
        return redirect()->route('bookmarks.index');
    }

    public function create()
    {
        return View::make('bookmarks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $bookmark = new Bookmark;
        $bookmark->name = $request->name;
        $bookmark->link = $request->link;
        $bookmark->save();
        return redirect()->route('bookmarks.index')->with('success', 'Bookmark creado correctamente.');
    }
}
