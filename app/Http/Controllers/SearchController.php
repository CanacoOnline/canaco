<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\User;

class SearchController extends Controller
{
    public function search($search = null)
    {
        if(is_null($search)){
            $search=\Request::get('search');

            return redirect()->route('productSearch', array('search'=> $search));
        }
        $videos = Producto::where('title', 'LIKE', '%'.$search.'%')
        ->orWhere('description', 'LIKE', '%'.$search.'%')
        ->orWhere('description2', 'LIKE', '%'.$search.'%')
        ->orWhere('categoria', 'LIKE', '%'.$search.'%')
        ->paginate(5);

        $perfil = User::where('name', 'LIKE', '%'.$search.'%')
        ->paginate(5);

        return view('search',array(
            'videos' => $videos,
            'perfil' => $perfil,
            'search' => $search
        ));
    }
}
