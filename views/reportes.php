<?php
require("pdf/fpdf.php");

Class PDF extends FPDF{

function Header(){
#LOGO
    $this- cell(-200);
    $this- image('IMG/hds.jpg',0,-10,220);
    #LETRA
    $this- Ln(10);
    $this- SetFont('arial','B',10);

    $this- Cell(-200);


    }
    function footer(){

        $this-SetFillColor(20.05,19);
        $this-Rect(0,270,220,30,'f');
        $this-sety(-20);
        $this-setfont('arial','',10);
        $this-settextocolor(255,255,255);
        $this-setx(90);
        $this-write(5, '             ');
        $this-ln();
    
    }
}
$pdf = new PDF();
$pdf-aliasnbpages();
$pdf-addpage();
$pdf-setfont('arial','',10);

$pdf-sety(70);
$pdf-setx(45);
$pdf-settextcolor(255,255,255);
$pdf-setfillcolor(79,59,120);
$pdf-cell(59,9,'nombre',0,0,'c',1);
$pdf-cell(17,9,'usuario',0,0,'c',1);
$pdf-cell(50,9,'password',0,0,'c',1);

include('db.php');
require('db.php');

$consulta = "SELECT *FROM  usuarios";
$resultado = mysql_query($conexion,$consulta);

$pdf-settextcolor(0,0,0);
$pdf-setfillcolor(240,240,255);

while($row = $resultado-fetch_assoc()){
    $

}


?>