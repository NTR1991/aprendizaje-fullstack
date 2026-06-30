<?php

//Ejercicio1

//Definir las siguientes constantes usando define():

define("NOMBRE_EMPRESA", "TechSolutions");

define("IVA", 21);

define("DESCUENTO_DEFAULT", 10);

define("PRECIO_HORA", 35.50);

define("MONEDA", "€");


//Definir las siguientes constantes usando const

const  ANIO_FUNDACION = 2015;
const  PAIS = "España";
const  TAZA_INTERES = 5.5;


echo "Nombre de la empresa: " . NOMBRE_EMPRESA . "\n";
echo "IVA: " . IVA . "%\n";
echo "Descuento por defecto: " . DESCUENTO_DEFAULT . "%\n";
echo "Precio por hora: " . PRECIO_HORA . " " . MONEDA . "\n";
echo "Moneda: " . MONEDA . "\n";
echo "Año de fundacion: " . ANIO_FUNDACION . "\n";
echo "Pais: " . PAIS . "\n";
echo "Tasa de interés: " . TAZA_INTERES . "%\n";



//Ejercicio2
//Definir las siguientes constantes con define()

define("EMPRESA_NOMBRE", "MiTiendaOnline");
define("EMPRESA_EMAIL", "info@mitienda.com");
define("IVA_GENERAL", 21);
define("IVA_REDUCIDO", 10);
define("GASTOS_ENVIO", 4.99);
define("ENVIO_GRATIS_DESDE", 50);
define("MONEDA", "€");


//Definir las siguientes constantes con const
const DESCUENTO_BLACK_FRIDAY = 30;
const DESCUENTO_NAVIDAD = 15;
const DESCUENTO_NUEVO_USUARIO = 10;
const DIAS_GARANTIA = 365;



echo "Empresa: " . EMPRESA_NOMBRE . "\n";
echo "Email: " . EMPRESA_EMAIL . "\n";
echo "IVA general: " . IVA_GENERAL . "%\n";
echo "IVA reducido: " . IVA_REDUCIDO . "%\n";
echo "Gastos de envío: " . GASTOS_ENVIO . " " . MONEDA . "\n";
echo "Envío gratis desde: " . ENVIO_GRATIS_DESDE . " " . MONEDA . "\n";
echo "Descuento Black Friday: " . DESCUENTO_BLACK_FRIDAY . "%\n";
echo "Descuento Navidad: " . DESCUENTO_NAVIDAD . "%\n";
echo "Descuento nuevo usuario: " . DESCUENTO_NUEVO_USUARIO . "%\n";
echo "Días de garantía: " . DIAS_GARANTIA . " días\n";




//Ejercicio3

//Definir las siguientes constantes con define()
define("EMPRESA_NOMBRE", "HR Solutions");
define("EMPRESA_RUT", "B-12345678");
define("ANIO_CURRENT", 2026);
define("SALARIO_MINIMO", 1166.70);
define("HORAS_MENSUALES", 160);
define("IVA", 21);
define("RETENCION_IRPF", 15);
define("SEGURIDAD_SOCIAL", 6.35);
define("MONEDA", "€");

//Definir las siguientes constantes con const
const DIAS_VACACIONES = 22;
const HORAS_SEMANALES = 40;
const MESES_AÑO = 12;
const DIAS_MES = 30;

//Calcular el salario por hora
$salarioHora = SALARIO_MINIMO / HORAS_MENSUALES;

//Calcular la retención de IRPF
$irpf = SALARIO_MINIMO * RETENCION_IRPF / 100;
$seguridadSocial = SALARIO_MINIMO * SEGURIDAD_SOCIAL / 100;


$salarioNeto = SALARIO_MINIMO - $irpf - $seguridadSocial;


echo "Empresa: " . EMPRESA_NOMBRE . "\n";
echo "RUT: " . EMPRESA_RUT . "\n";
echo "Año: " . ANIO_CURRENT . "\n";
echo "Salario mínimo: " . SALARIO_MINIMO . " " . MONEDA . "\n";
echo "Horas mensuales: " . HORAS_MENSUALES . " horas\n";
echo "Salario por hora: " . $salarioHora . " " . MONEDA . "\n";
echo "Retención IRPF (15%): " . $irpf . " " . MONEDA . "\n";
echo "Seguridad Social (6.35%): " . $seguridadSocial . " " . MONEDA . "\n";
echo "Salario neto: " . $salarioNeto . " " . MONEDA . "\n";
echo "Días de vacaciones: " . DIAS_VACACIONES . " días\n";
echo "Horas semanales: " . HORAS_SEMANALES . " horas\n";
echo "Meses al año: " . MESES_AÑO . "\n";
echo "Días por mes: " . DIAS_MES . "\n";


?>

