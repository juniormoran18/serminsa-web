<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;




class NoticiasController extends Controller
{
    
    public function index(){
        $noticias = Noticia::all();
        
        return view('admin.index')->with('noticias',$noticias);
    }
    
    public function edit($id){
        
        $noticias = Noticia::find($id);
        //aca en view indica por favor la vista v:
        
        return view('admin.editar')->with('noticias',$noticias);
    }
    
    public function create(){
        
        //Retornas la vista donde esta el formulario para registrar la noticia
        
        return view('admin.create');
    }
    
    public function store(Request $request){
        
        \Log::info($request);
        $noticia = new Noticia();
        
        $noticia->titulo = $request->titulo;
        $noticia->contenido = $request->contenido;
        
        $imagen = $request->imagen;
        if($imagen !== null && $imagen->isValid()){
            $imageName = "serminsa_" . date("Ymd_His_") . preg_replace("([^A-Za-z0-9.])", "", $imagen->getClientOriginalName());
            
            
            $imagenSaved = $request->file('imagen')->store('noticias');
            $imagen->save(storage_path("app/noticias/$imageName"));
            $noticia->imagen = url("images/noticias/$imageName");
        }
        $noticia->save();
       
       return redirect()->route("admin.index");
    }
    
    public function delete($id){
        
        $noticia  = Noticia::destroy($id);
    }
}
