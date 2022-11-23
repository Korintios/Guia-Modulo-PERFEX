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