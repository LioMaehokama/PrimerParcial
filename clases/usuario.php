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

  public static function ModificarUsuario($dni, $voto, $provincia, $localidad)
  {
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
    $consulta =$objetoAccesoDato->RetornarConsulta("UPDATE votacion SET presidenciable=:voto, provincia=:provincia, localidad=:localidad WHERE dni=:dni");
    //$consulta = $objetoAccesoDato->RetornarConsulta("CALL traerTodosLosUsuarios");
    $consulta->bindValue(':dni', $dni, PDO::PARAM_INT);
    $consulta->bindValue(':voto', $voto, PDO::PARAM_INT);
    $consulta->bindValue(':provincia', $provincia, PDO::PARAM_INT);
    $consulta->bindValue(':localidad', $localidad, PDO::PARAM_INT);
    $consulta->execute();           
  }
   
}
?>