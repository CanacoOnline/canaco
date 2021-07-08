<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Auth;
class commentController extends Controller
{
    public function store(Request $request){
        $validate = $this->validate($request,[
            'body'=> 'required'
        ]);

        $comment = new Comments();
        $user = \Auth::user();

        $comment->user_id=$user->id;
        $comment->producto_id=$request->input('producto_id');
        $comment->body=$request->input('body');
        $comment->save();

        return redirect()->route('detailProducto',['producto_id' => $comment->producto_id])->with(array(
            'message' => 'Comentario añadido correctamente!'
        ));
    }

    public function delete($comment_id){
        $user = \Auth::user();
        $comment = Comments::find($comment_id);

        //if($user &&($comment->user_id==$user->id || $comment->producto->user_id==$user->id)){
            $comment->delete();
        //}
        return redirect()->route('detailProducto',['producto_id' => $comment->producto_id])->with(array(
            'message' => 'Comentario borrado correctamente!'
        ));
    }
}
