<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class IdeasController extends Controller
{
    public function index()
    {
        $ideas = Idea::orderBy('id','desc')->get();
        return $ideas;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'descripcion'   =>  'required'
        ]);

        $idea = Idea::create($data);
        return;
    }

    public function destroy($id)
    {
        $idea = Idea::find($id)->delete();
        return;
    }
}
