<?php
if(isset($_POST['Calcular']))
{
    $nhijos = $_POST['nhijos'];
    $bonif = $nhijos * 50;
    $totalmes = $_POST['totalmes'];
    $comision = $totalmes * 0.075;
    $sueldobruto = 600 + $bonif + $comision;
    $dscto = $sueldobruto * 0.11;
    $sueldoneto = $sueldobruto - $dscto;
    echo "<div>
    <p>La comisión es de: $comision</p>
    <p>La bonificación es de: $bonif</p>
    <p>El sueldo bruto es: $sueldobruto</p>
    <p>El descuento es de: $dscto</p>
    <p>El sueldo neto es de: $sueldoneto</p>
    </div>";
}
?>