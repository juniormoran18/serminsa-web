<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class HomeController extends Controller
{
    public function index() {
        $noticiasIds = [1,2,3];
        $noticiasIds2 = [4,5,6];
        $noticiasIds3 = [1];

        
        //Las 3 primeras noticias
        $noticias1 = Noticia::query()
            ->whereIn('id',$noticiasIds)
            ->get();
        //Las 3 ùltimas noticias    
        $noticias2 = Noticia::query()
            ->whereIn('id',$noticiasIds2)
            ->get();

        //envio de 1
        $noticias3 = Noticia::query()
            ->whereIn('id',$noticiasIds3)
            ->get();



        $data = 
            [
                'noticias' => $noticias1,
                'segundasNoticias' => $noticias2,
                'terceranoticias' => $noticias3
            ];
        return view('es.inicio',$data);
    }

    public function enindex() {
        $noticiasIds4 = [7,8,9];
        $noticiasIds5 = [10,11,12];

        //envio de noticias en ingles
        $noticias4 = Noticia::query()
            ->whereIn('id',$noticiasIds4)
            ->get();
        $noticias5 = Noticia::query()
            ->whereIn('id',$noticiasIds5)
            ->get();

        $data =
            [
                'noticiasingles' => $noticias4,
                'noticiasingles1' => $noticias5
            ];
        return view('en.inicio',$data);
    }
}
