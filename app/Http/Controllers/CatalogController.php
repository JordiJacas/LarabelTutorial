<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
    public function getIndex()
	{
		$movies = Movie::all();
   		return view('catalog.index',["arrayPeliculas"=>$movies]);
	}

	public function getShow($id)
	{	
		$movies = Movie::findOrFail($id);
   		return view('catalog.show', ["pelicula"=>$movies])->with("id",$id);
	}

	 public function getCreate()
	{
   		return view('catalog.create');
	}

	public function getEdit($id)
	{
		$movies = Movie::findOrFail($id);
   		return view('catalog.edit', ["pelicula"=>$movies]);
	}
}
