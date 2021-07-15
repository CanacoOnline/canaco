<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Producto;
use App\Models\User;
use Auth;
use Carbon\Carbon;
class subirController extends Controller
{

    public function __construct(){
        Carbon::setLocale('es');
    }

    public function crearProducto(){
        if(Auth::guest()){
            return redirect('login');
        }
        if (Auth::user()->rol_id == 2) {
            return view('archivos.crearProducto');
        }
        else{
            return redirect('login');
        }
    }

    public function crearServicio(){
        if(Auth::guest()){
            return redirect('login');
        }
        if (Auth::user()->rol_id == 2) {
            $sql = 'SELECT * FROM cateservicio';
            $categoria =  DB::select($sql);
            return view('archivos.crearServicio',compact('categoria'));
        }
        else{
            return redirect('login');
        }
    }

    public function crearPromocion(){
        if(Auth::guest()){
            return redirect('login');
        }
        if (Auth::user()->rol_id == 2) {
            return view('archivos.crearPromocion');
        }
        else{
            return redirect('login');
        }
    }

    public function crearCupon(){
        if(Auth::guest()){
            return redirect('login');
        }
        if (Auth::user()->rol_id == 2) {
            return view('archivos.crearCupon');
        }
        else{
            return redirect('login');
        }	
    }

    public function saveProducto(Request $request){
            //Validar formulario
        $validatedData = $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:20000',
        ]);
        //guardar 
        $producto = new Producto();
        $user = \Auth::user(); //conseguir usuario de la bd
        $producto->user_id = $user->id;
        $producto->title = $request->input('title');
        $producto->description = $request->input('description');
        $producto->description2 = $request->input('description2');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->fechaini = $request->input('fechaini');
        $producto->fechaexp = $request->input('fechaexp');
        $producto->tipo = $request->input('tipo');
        
        //subida miniatura(imagen)
        $image = $request->file('image');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));//leer carpetas
            $producto->image = $image_path;
        }
        $image2 = $request->file('image2');
        if($image2){
            $image_path2 = time().$image2->getClientOriginalName();
            \Storage::disk('images')->put($image_path2, \File::get($image2));//leer carpetas
            $producto->image2 = $image_path2;
        }
        $image3 = $request->file('image3');
        if($image3){
            $image_path3 = time().$image3->getClientOriginalName();
            \Storage::disk('images')->put($image_path3, \File::get($image3));//leer carpetas
            $producto->image3 = $image_path3;
        }
        $image4 = $request->file('image4');
        if($image4){
            $image_path4 = time().$image4->getClientOriginalName();
            \Storage::disk('images')->put($image_path4, \File::get($image4));//leer carpetas
            $producto->image4 = $image_path4;
        }
        $image5 = $request->file('image5');
        if($image5){
            $image_path5 = time().$image5->getClientOriginalName();
            \Storage::disk('images')->put($image_path5, \File::get($image5));//leer carpetas
            $producto->image5 = $image_path5;
        }
        $image6 = $request->file('image6');
        if($image6){
            $image_path6 = time().$image6->getClientOriginalName();
            \Storage::disk('images')->put($image_path6, \File::get($image6));//leer carpetas
            $producto->image6 = $image_path6;
        }
        $image7 = $request->file('image7');
        if($image7){
            $image_path7 = time().$image7->getClientOriginalName();
            \Storage::disk('images')->put($image_path7, \File::get($image7));//leer carpetas
            $producto->image7 = $image_path7;
        }
        $image8 = $request->file('image8');
        if($image8){
            $image_path8 = time().$image8->getClientOriginalName();
            \Storage::disk('images')->put($image_path8, \File::get($image8));//leer carpetas
            $producto->image8 = $image_path8;
        }
        $producto->save();
        return redirect()->route('empresa')->with(array(
        ));
    }
   
    //devolver producto
    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
    public function getPhoto($filename){
        $file = Storage::disk('public')->get($filename);
        return new Response($file, 200);
    }

    public function getProductoDetail($producto_id){
        $producto = Producto::find($producto_id);
        $producto->visitas =  $producto->visitas + 1;
        $producto->save();
        return view('archivos.detail', array(
            'producto' => $producto
        ));
    }

    public function getUserDetail($user_id){
        $usuario = User::find($user_id);
        $usuario->visitas =  $usuario->visitas + 1;
        $usuario->save();
        $productos = Producto::orderBy('id')->paginate(18);
        return view('cuenta.perfil', array(
            'usuario' => $usuario,
            'productos'=>$productos,
        ));
    }

    //eliminar imagen
    public function deleteProducto($img_id){
        $user = \Auth::user();
        $img = Producto::find($img_id);
        
        if($user && $img->user_id ==$user->id){
            //eliminar imagen
            Storage::disk('images')->delete($img->image);
                
            //Eliminar registro
            $img->delete();
            $message = array('message'=>'Producto eliminado correctamente');
        }
        else{
            $message = array('message'=>'El producto no se ha eliminado');
        } 
        return redirect('/empresa');
    }

    public function editProduct($producto_id){
        $user = \Auth::user();
        $edit=Producto::findOrFail($producto_id);
        $sql = 'SELECT * FROM cateservicio';
        $categoria =  DB::select($sql);

        if($user && $edit->user_id ==$user->id){
          
            return view('edit.editar',compact('edit','categoria'));
        }
        else{
            return view('welcome',array('edit'=>$edit));
        }
    }

    public function updateProduct($producto_id, Request $request){

            //guardar 
            $producto = Producto::findOrfail($producto_id);
            $user = \Auth::user(); //conseguir usuario de la bd
            $producto->user_id = $user->id;
            $producto->title = $request->input('title');
            $producto->description = $request->input('description');
            $producto->description2 = $request->input('description2');
            $producto->precio = $request->input('precio');
            $producto->categoria = $request->input('categoria');
            $producto->fechaini = $request->input('fechaini');
            $producto->fechaexp = $request->input('fechaexp');
            $producto->tipo = $request->input('tipo');
            
            //subida miniatura(imagen)
            $image = $request->file('image');
            if($image){
                $image_path = time().$image->getClientOriginalName();
                \Storage::disk('images')->put($image_path, \File::get($image));//leer carpetas
                $producto->image = $image_path;
            }
            $image2 = $request->file('image2');
            if($image2){
                $image_path2 = time().$image2->getClientOriginalName();
                \Storage::disk('images')->put($image_path2, \File::get($image2));//leer carpetas
                $producto->image2 = $image_path2;
            }
            $image3 = $request->file('image3');
            if($image3){
                $image_path3 = time().$image3->getClientOriginalName();
                \Storage::disk('images')->put($image_path3, \File::get($image3));//leer carpetas
                $producto->image3 = $image_path3;
            }
            $image4 = $request->file('image4');
            if($image4){
                $image_path4 = time().$image4->getClientOriginalName();
                \Storage::disk('images')->put($image_path4, \File::get($image4));//leer carpetas
                $producto->image4 = $image_path4;
            }
            $image5 = $request->file('image5');
            if($image5){
                $image_path5 = time().$image5->getClientOriginalName();
                \Storage::disk('images')->put($image_path5, \File::get($image5));//leer carpetas
                $producto->image5 = $image_path5;
            }
            $image6 = $request->file('image6');
            if($image6){
                $image_path6 = time().$image6->getClientOriginalName();
                \Storage::disk('images')->put($image_path6, \File::get($image6));//leer carpetas
                $producto->image6 = $image_path6;
            }
            $image7 = $request->file('image7');
            if($image7){
                $image_path7 = time().$image7->getClientOriginalName();
                \Storage::disk('images')->put($image_path7, \File::get($image7));//leer carpetas
                $producto->image7 = $image_path7;
            }
            $image8 = $request->file('image8');
            if($image8){
                $image_path8 = time().$image8->getClientOriginalName();
                \Storage::disk('images')->put($image_path8, \File::get($image8));//leer carpetas
                $producto->image8 = $image_path8;
            }
            $producto->update();
            return redirect()->route('empresa')->with(array('message'=> 'Se ha actualiazado correctamente.'));
    }
}