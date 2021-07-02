<?php
$peso=$_POST['peso'];
$altura=$_POST['altura'];
//convertir cm a m
$altu = $altura/100;
//IMC = Peso(kg)/altura*2(m)
$imc = $peso/($altura*$altura);

if ($imc>40) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad Tipo III";
 
} else if ($imc>39.99) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad Tipo II";
 
}else if ($imc>29.99) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad Tipo I";
}else if ($imc>27.00) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad";
}else if ($imc>26.99) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de sobre peso";
 
 }else if ($imc>24.99) {
  echo"Tu IMC es: ".$imc."Tu Diagnostico es: Peso Normal";
  
}else if ($imc>18.00) {
  echo"Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Peso Bajo"; 
}else {
  echo"Tu IMC es: ".$imc."Tu Diagnostico es: Algo salio mal";
  }
  ?>