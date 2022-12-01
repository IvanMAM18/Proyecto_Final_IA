
<?php $nueva=""; ?>

<button id="btnClick">Cuenta</button>
<button id="btnClear">Reset</button>
<p id="contarClick"></p>
<script type="text/javascript">
        
        var btnElm = document.getElementById('btnClick'),
            btnClear = document.getElementById('btnClear'),
            pElm = document.getElementById('contarClick')
            sect = document.getElementById('sect'),
            contar = 0;
            
            const sbg = function(){
                const randColor = Math.floor(Math.random() * 16777215).toString(16);
                sect.style.backgroundColor = "#" + randColor;
            }
            
            pElm.textContent = 0;
            
            btnElm.onclick = function(){
                contar++;
                pElm.textContent = contar;
                var contardor="contador";
                <?php $nueva="algo"; ?>             
                sbg();
        }
        
        btnClear.onclick = function(){
            pElm.textContent = 0;
            contar = 0;
            sect.style.backgroundColor = "white";
            <?php $nueva="nada"; ?> 

        }
    </script>
<?php

// En varias líneas para facilitar la lectura:
$imagenes=["personajes/cuadroBlanco.png","personajes/camino.png","personajes/fuego.png",
            "personajes/ganar.png","personajes/zeldaVillano.png",
           "personajes/zelda/zelda_inicio.png","personajes/zelda/zelda_espaldas.png",
           "personajes/zelda/zelda_derecha.png","personajes/zelda/zelda_izquierda.png"];
$matriz = [
  ["personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png"],
  ["personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png"],
  ["personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png"],
  ["personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png"],
  ["personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png"],
  ["personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png", "personajes/cuadroBlanco.png"]
];
$matrizImagenes = [["aqui","aqui","aqui"],
                    ["personajes/cuadroBlanco.png","aqui","aqui"]];
$tamaño=count($matrizImagenes);
$tamañoMatriz = count($matriz)*count($matriz);
$numeroMartriz =count($matriz);
$contador=0;
$conteoVueltas=0;
$j=0;
$boton="";
$contadorNuevo=0;

$posicionX = rand(0, 5);
$posicionY = rand(0, 5);
$posicionFuegoX =rand(0,($posicionX-2));
$posicionFuegoY =rand(0,($posicionY-2));
echo $nueva." -nuevoo";
if($boton=="reiniciar"){
}else if($boton=="final"){

}else if($boton=="paso"){
    $contadorNuevo+=1;
}
echo $contadorNuevo."contador: ";
$posicionZeldaX=5;
$posicionZeldaY=0;
$ganado="no";
print "$posicionX - $posicionY<br>";
$segundos=0;
$left=62;
$top=0;
$algo=0;

if($posicionX==1 && $posicionY==2){
    $posicionX=1;
}else if($posicionX==0 && $posicionY==5){
    $posicionX=1;
}else if($posicionX==5 && $posicionY==0){
    $posicionX=4;
}
$matriz[$posicionFuegoX][$posicionFuegoY]=$imagenes[2];
$matriz[$posicionX][$posicionY]=$imagenes[4];
if($posicionX==4 && $posicionY==1 ){
    $matriz[$posicionX-1][$posicionY]=$imagenes[2];
    $matriz[$posicionX][$posicionY-1]=$imagenes[2];
    $matriz[$posicionX][$posicionY+1]=$imagenes[2];
}else if($posicionX==1 && $posicionY==4 ){
    $matriz[$posicionX+1][$posicionY]=$imagenes[2];
    $matriz[$posicionX][$posicionY-1]=$imagenes[2];
    $matriz[$posicionX][$posicionY+1]=$imagenes[2];
}else{
    $matriz[$posicionX][$posicionY]=$imagenes[4];
    $matriz[$posicionX-1][$posicionY]=$imagenes[2];
    $matriz[$posicionX+1][$posicionY]=$imagenes[2];
    $matriz[$posicionX][$posicionY-1]=$imagenes[2];
    $matriz[$posicionX][$posicionY+1]=$imagenes[2];
}

$matriz[0][5]=$imagenes[3];
$matriz[$posicionZeldaX][$posicionZeldaY]=$imagenes[5];
echo $posicionZeldaX."--".$posicionZeldaY."<br>";
for($i=0; $i<$tamañoMatriz; $i++){
    
    $left+=62;
    if($i==$numeroMartriz || $i==($numeroMartriz*($conteoVueltas+1)) ){
        $j=0;
        $conteoVueltas++;
    }
    if($j==0){
        echo "<br>";
        $left=62;
        $top+=62;
    }
    if($matriz[$posicionZeldaX][$posicionZeldaY+$contador]){
        $matriz[$posicionZeldaX][$posicionZeldaY+($contador+1)]=$imagenes[7];
        $matriz[$posicionZeldaX][$posicionZeldaY+$contador]=$imagenes[1];
    }
    
    echo "<img src='".$matriz[$conteoVueltas][$j]."' border='0' style='width:62px; height:62px; position:absolute; left: ".$left."px; top: ".$top."px; '>";
    
    $j++;
}
$j=0;
$conteoVueltas=0;
echo "<br>";
do{
    for($i=0; $i<$tamañoMatriz; $i++){
    
        if($i==$numeroMartriz || $i==($numeroMartriz*($conteoVueltas+1)) ){
            $j=0;
            $conteoVueltas++;
        }
        if($j==0){
            echo "<br>";
        }
        if($matriz[$posicionZeldaX][$posicionZeldaY+$contador]){
            $matriz[$posicionZeldaX][$posicionZeldaY+($contador+1)]=$imagenes[7];
            $matriz[$posicionZeldaX][$posicionZeldaY+$contador]=$imagenes[1];
        }
        echo "<img src='".$matriz[$conteoVueltas][$j]."' border='0' style='width:62px; height:62px; margin-left: 0px; margin-right: 1px; '>";
        
        $j++;
    }
    $contador++;
    if($contador==5){
        $ganador="no";
    }else{
        $ganador="si";
    }
    $j=0;
    $conteoVueltas=0;
}while($ganador!="no");

    
?>