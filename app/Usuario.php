<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    /*public function validaUsuario($usuario, $senha){
      $dados_usuario = DB::select("select * from usuario where usuario = $usuario and senha = $senha");
      return ($dados_usuario);
    }**/


}
