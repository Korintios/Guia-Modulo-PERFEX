# Tutorial de Creacion de Modulo
Bienvenidos a la explicacion de creacion del modulo desarrollada en PERFEX, sigue cada uno de los pasos
a continuacion para tener un modulo bien desarrollado.

# Paso 1: Crear Carpeta del Modulo.
Dentro de lo que conocemos como perfex encontraremos una gran variedad de carpetas entre las cuales deberemos dirigirnos a la llamada **modules** a la cual deberemos acceder y crear una nueva carpeta con el nombre que se desea o se requiera para el modulo teniendo en cuenta las siguientes reglas.

* El nombre de la carpeta debe ser corto y consiso (lo mas coherente posible).

* Todo en minusculas.

# Paso 2: Crear el Archivo Principal y Install.

## Paso 2.1: Archivo Principal.
El Archivo Principal debe tener por obligacion el mismo nombre de la carpeta ya que este se encargara de toda la funcionalidad del modulo en general.

> Ejemplo: si la carpeta se llama **prueba** entonces el archivo tambien recibira el nombre **prueba**.

> Codigo de Ejemplo: 
```php
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Plantilla de Modulo
Description: Modulo de Plantilla Desarrollado por REDTIC.
Version: 1.0.0
Requires at least: 2.3.*
*/

?>
```
Como podemos ver contamos con unos comentarios como lo son **Module Name** o **Description** los cuales se encargarian de modificar la parte visual del modulo al momento de instalarlo.

## Paso 2.2: Archivo Install.

El archivo install vendria siendo aquel en el que creariamos o manejariamos todas nuestras bases de datos que usaremos entorno a nuestro modulo.

 > Codigo de Ejemplo:

```php
<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!$CI->db->table_exists(db_prefix() . 'tabla')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . "tabla` (
      `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
      `nombre` varchar(300) NOT NULL,
      `activo` BOOLEAN
    ) ENGINE=InnoDB DEFAULT CHARSET=" . $CI->db->char_set . ';');
}

?>
```

Finalizado esto una buena forma de aplicarlo en nuestro archivo principal seria.

```php
<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Plantilla de Modulo
Description: Descripcion del Modulo.
Version: 1.0.0
Requires at least: 2.3.*
*/

define('INVESTIGADORES_MODULE_NAME', 'investigadores');

register_activation_hook(INVESTIGADORES_MODULE_NAME, 'investigator_module_activation_hook');

function investigator_module_activation_hook()
{
	$CI = &get_instance(); 
	require_once(__DIR__ . '/install.php');
}
?>
```

# Paso 3: MVC
Una vez realizados los pasos anteriores correctamente y verificar que funcionen dentro de PERFEX lo siguiente seria crear nuestras carpetas de **models**, **views**, **controllers** de esta manera como se esta escribiendo ya que representan mucha importancia dentro de esta jerarquia de funcionalidades como lo es PERFEX y su Framework Codeigniter 4.


