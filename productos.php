?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<br>
</br>
</br>
</br>
</br>
    <?php if($mensaje!=""){?>
    <div class="alert alert-success">
        <?php echo ($mensaje); ?>

        <a href="mostrarCarrito.php" class="badge badge-success">Ver Carrito</a>
        </div>
        <?php  }?>

        <div class="row">
         <?php
            $sentencia=$pdo->prepare("SELECT * FROM `tb_productos`");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);
         ?>
         <?php foreach($listaProductos as $producto) { ?>
            <div class="col-3">
                <div class="card">
                    <img
                    
                    title=<?php echo $producto['Nombre'];?>
                    alt=<?php echo $producto['Nombre'];?>
                    class="card-img-top"
                    src="<?php echo $producto['Imagen'];?>"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="<?php echo $producto['Descripcion'];?>"
                    height="250px"
                    >
                    <div class="card-body">
                     <span><?php echo $producto['Nombre'];?></span>
                        <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                        <p class="card-text">Porciones:<?php echo $producto['Porcion'];?></p>
                    <form action="" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($producto['Id'], COD,KEY);?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD,KEY);?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD,KEY);?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                    <input type="hidden" name="porcion" id="porcion" value="<?php echo openssl_encrypt($producto['Porcion'], COD,KEY);?>">


                    <button class="btn btn-primary" 
                        name="btnAccion"
                        value="Agregar" 
                        type="submit"
                        >
                        Agregar al Carrito</br>
                        </button>
     
                    </form>
 
                    </div>
                </div>
         </br>
            </div>
       

            <?php } ?>
        </div>
        <script>

    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    </script>

    <?php include 'templates/pie.php'; ?>