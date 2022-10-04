<?php
    if(isset($_POST['Calcular']))
    {
        $precio =$_POST['precio'];
        $ud =$_POST['unidades'];

        $desc = $precio * 0.05;
        $nprecio = $precio - $desc;
        $total = $nprecio * $ud;
        $desc_esp = $total * 0.07;
        $importe = $total - $desc_esp;
        $obsequio = $ud * 2;
        
        echo "
        <div>
        <p>El nuevo precio de la gaseosa es: $nprecio</p>
        <p>El importe de la compra es: $total</p>
        <p>El importe del descuento es: $desc_esp</p>
        <p>El importe a pagar es:$importe</p>
        <p>El obsequio de su compra es: $obsequio</p>
        </div>";
         
    }
?>