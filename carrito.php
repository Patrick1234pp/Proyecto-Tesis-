<?php
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])) {

    switch($_POST['btnAccion']) {

        case 'Agregar':

            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY ))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY );
                $mensaje.="Ok Id Correcto".$ID."<br/>";

            }else {
                $mensaje.="Upss... Id Incorrecto".$ID."<br/>";
            }
            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje.="Ok nombre".$NOMBRE."<br/>";
            }else{  $mensaje.="Upps... algo pasa con el nombre"."<br/>"; break; 

            }
            if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje.="Ok cantidad".$CANTIDAD."<br/>";
            }else{  $mensaje.="Upps... algo pasa con la cantidad"."<br/>"; break; 

            }
            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))) {
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.="Ok precio".$PRECIO."<br/>";
            }else{  $mensaje.="Upps... algo pasa con el precio"."<br/>"; break; 

        }
        if(is_numeric(openssl_decrypt($_POST['porcion'],COD,KEY))) {
            $PORCION=openssl_decrypt($_POST['porcion'],COD,KEY);
            $mensaje.="Ok porcion".$PORCION."<br/>";
        }else{  $mensaje.="Upps... algo pasa con la porcion"."<br/>"; break; 

        }
            
            if(!isset($_SESSION['CARRITO'])) {
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO,
                    'PORCION'=>$PORCION
                );
                $_SESSION['CARRITO'][0]=$producto;
                $mensaje= "Producto Agregado al carrito";

            }else{

                $idProductos=array_column($_SESSION['CARRITO'],"ID");

                if(in_array($ID,$idProductos)) {
                    echo "<script>alert('El Producto ya ha sido seleccionado...');</script>";
                    $mensaje="";
                }else{

                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO,
                    'PORCION'=>$PORCION
                );
                $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                $mensaje= "Producto Agregado al carrito";
            }
        }
            //$mensaje= print_r( $_SESSION,true);


        break;
        case "Eliminar":
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY ))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY );

                foreach($_SESSION['CARRITO'] as $indice=>$producto) {
                    if($producto['ID']==$ID) {
                        unset($_SESSION['CARRITO'][$indice]);
                        echo "<script>alert('Producto Eliminado...');</script>";
                    }
                }
            }else {
                $mensaje.="Upss... Id Incorrecto".$ID."<br/>";
            }

        break;
    }

}


?>