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
}
