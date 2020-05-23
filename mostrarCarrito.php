<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<br>
<h3>Lista del Carrito</h3>

<table class="table table-light">
    <tbody>
        <tr>
           <th width="40%">Descripción</th>
           <th width="15%" class="text-center">Cantidad</th>
           <th width="20%" class="text-center">Precio</th>
           <th width="20%" class="text-center">Total</th>
           <th width="5%">--</th>
        </tr>
        <tr>
            <td width="40%" class="text-center">Torta</td>
            <td width="15%" class="text-center">1</td>
            <td width="20%" class="text-center">$21.000</td>
            <td width="20%" class="text-center">$21.000</td>
            <td width="5%"><button class="btn btn-danger" type="button">Eliminar</button></td>
        </tr>
        <tr>
            <td width="40%" class="text-center">Torta</td>
            <td width="15%" class="text-center">1</td>
            <td width="20%" class="text-center">$21.000</td>
            <td width="20%" class="text-center">$21.000</td>
            <td width="5%"><button class="btn btn-danger" type="button">Eliminar</button></td>
        </tr>
        <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right"><h3>$<?php echo number_format(42,3)?></h3></td>
            <td></td>
        </tr>



    </tbody>
</table>


<?php include 'templates/pie.php'; ?>