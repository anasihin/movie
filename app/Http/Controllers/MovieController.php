<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mov;

class MovieController extends Controller
{
    public function index(Request $request){
        $data =  Mov::all();
        if($title = $request->title){
            $data->where('title' , $title);
        }

        if($description = $request->description){
            $data->where('description' , $description);
            
        }

        if($artist = $request->artist){
            $data->where('artist' , $artist);
            
        }

        if($genres = $request->genres){
            $data->where('genres' , $genres);
        }

        return $data;
    }

    public function show($id){
        $record = Mov::findOrFail($id);
        return $record;
    }

    public function store(Request $request){
        $record = new Mov;
        $record->fill($request->all());
        $record->save();
    }

    public function update($id, Request $request){
        $record = Mov::findOrFail($id);
        $record->fill($request->all());
        $record->save();
    }
}
