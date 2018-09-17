<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class HomeController extends Controller
{
    public function index() {
        $noticiasIds = [1,2,3];
        $noticiasIds2 = [4,5,6];
        
        //Las 3 primeras noticias
        $noticias1 = Noticia::query()
            ->whereIn('id',$noticiasIds)
            ->get();
        //Las 3 ùltimas noticias    
        $noticias2 = Noticia::query()
            ->whereIn('id',$noticiasIds2)
            ->get();    
        
        $data = 
            [
                'noticias' => $noticias1,
                'segundasNoticias' => $noticias2
            ];
        return view('es.inicio',$data);
    }
    public function enindex() {
        $noticias = Noticia::all();
        return view('en.inicio')->with('noticias', $noticias);
    }
}
