<?php
/*
|---------------------------------------------------------------------
| Database configuration
|---------------------------------------------------------------------
|  Different types of database configurations are defined here.
|
|
 */

return [
   /*
    | ---------------------------------------------------------
    | default database to use in application
    |--------------------------------------------------------
    |
    */
   'default' => 'mysql',

   'connection_params' => [

      'sqlite' => [
          'driver'    => 'sqlite',
          'database'  => 'meher-lib.sqlite',
          'prefix'    => 'prefix'
      ],


      'mysql' => [
         'driver'   => 'mysql',
         'host'     => 'localhost',
         'database' => 'meher_library',
         'username' => 'root',
         'password' => 'inspire@2009',
         'port' => '3306'
      ]
    ],

   /*
    | ---------------------------------------------------------
    | redis configuartion
    |--------------------------------------------------------
    */
   'redis' => []

];
