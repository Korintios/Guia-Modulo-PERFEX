<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Plantilla de Modulo
Description: Descripcion del Modulo.
Version: 1.0.0
Requires at least: 2.3.*
*/

//! Declaramos la constante del nombre del Modulo.
define('INVESTIGADORES_MODULE_NAME', 'investigadores');

//! Utilizamos el siguiente metodo para llamar a la funcion de instalacion.
register_activation_hook(INVESTIGADORES_MODULE_NAME, 'investigator_module_activation_hook');

function investigator_module_activation_hook()
{
    //! Utilizamos &get_instance() para acceder a las funciones generales del metodo.
	$CI = &get_instance(); 
    /* 
    *Require para llamar al archivo en el cual usamos la variable global __DIR__ 
    *para acceder al directorio actual y concatenarlo con el archivo install.php 
    */
	require_once(__DIR__ . '/install.php');
}
?>