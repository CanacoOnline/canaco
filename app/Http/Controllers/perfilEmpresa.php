<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Producto;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class perfilEmpresa extends Controller
{
    public function __construct(){
        Carbon::setlocale('es');

        $fecha1 = now()->toDateString();
        $sql = 'SELECT dias FROM users';
        $exp =  DB::select($sql);

        foreach($exp as $expi){
            if($expi->dias==$fecha1){
                $affected = DB::table('users')
                ->where('id', $expi->id)
                ->update(['rol_id' => 3]);
            }      
        }
    }

  
    
    public function expiracion(){
        $fecha1 = now()->toDateString();
        $user = Auth::all();

        if($user->dias==$fecha1){
            return 'hola';
        }

    }

    public function index()
    {
        if(Auth::guest()){
            return redirect('login');
        }
        if (Auth::user()->rol_id == 2) {
            $productos = Producto::orderBy('id')->paginate(18);
            return view('cuenta.empresa',compact('productos'));
        }
        else{
            return redirect('login');
        }
    }
    
    public function ranking(){
        $productos = Producto::orderBy('visitas')->get()->take(5);
        $usuario = User::orderBy('visitas')->get()->take(5);

        
        return view('welcome',compact('productos','usuario'));
    }

    public function perfil(){
        $productos = Producto::orderBy('id')->paginate(18);
        return view('cuenta.perfil',compact('productos'));
    }

    public function promociones(){
        $promociones = Producto::orderBy('id')->paginate(18);
        return view('navMenu.promocion',compact('promociones'));
    }

    public function cupones(){
        $cupones = Producto::orderBy('id')->paginate(18);
        return view('navMenu.cupon',compact('cupones'));
    }

    public function getEmpresas(){
        $usuario = User::orderBy('id')->paginate(50);
        
        return view('empresas.empresas', array(
            'usuario' => $usuario
        ));
    }

}