<?php
class usuario
{

  public $dni;
  public $sexo;
  public $provincia;
  public $presidenciable;
  public $id;
   
  public static function TraerTodosLosUsuarios()
  {
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
    $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuario");
    //$consulta = $objetoAccesoDato->RetornarConsulta("CALL traerTodosLosUsuarios");
    $consulta->execute();           
    return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 
  }

  public static function InsertarUsuario($dni, $sexo)
  {
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
    $consulta = $objetoAccesoDato->RetornarConsulta("INSERT into votacion (dni, sexo) values (:paramDni, :paramSexo)");
    $consulta->bindValue(':paramDni', $dni, PDO::PARAM_INT);
    $consulta->bindValue(':paramSexo', $sexo);
    $consulta->execute();       
    return $objetoAccesoDato->RetornarUltimoIdInsertado();
  }

  public static function TraerUsuarioxId($dni)
  {
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
    $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM votacion WHERE dni = :dni");
    //$consulta = $objetoAccesoDato->RetornarConsulta("CALL traerTodosLosUsuarios");
    $consulta->bindValue(':dni', $dni, PDO::PARAM_INT);
    $consulta->execute();           
    $UsuarioBuscado = $consulta->fetchObject('usuario');
    return $UsuarioBuscado;
  }

  public function validarusuario($usuario)
  {
    /*$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
    // $consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario where dni='$usuario'");
    $consulta = $objetoAccesoDato->RetornarConsulta("CALL validarUsuario(:dni)");
    $consulta->bindValue(':dni', $usuario, PDO::PARAM_INT);
    $consulta->execute(); 
    $UsuarioBuscado = $consulta->fetchObject('usuario');
    return $UsuarioBuscado;*/

  }
   
}
?>