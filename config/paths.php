<?php
/*
|---------------------------------------------------------------------
| Application Path
|---------------------------------------------------------------------
|  Application directories paths are defined here
|
 */

return [
   
   /*
    | ---------------------------------------------------------
    | views path
    |--------------------------------------------------------
    */
   'views' => resource_path('views'),

   /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => storage_path('framework/views/'),

];
