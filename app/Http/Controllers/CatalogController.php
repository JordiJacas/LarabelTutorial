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
   		return view('catalog.show', array('pelicula'=>$this->arrayPeliculas[$id]))->with("id",$id);
	}

	 public function getCreate()
	{
   		return view('catalog.create');
	}

	public function getEdit($id)
	{
   		return view('catalog.edit', array('pelicula'=>$this->arrayPeliculas[$id]));
	}
}
