<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */
    
   'driver' => env('MAIL_DRIVER', 'smtp'),

   'host' => env('MAIL_HOST', 'smtp.gmail.com'),
   'port' => env('MAIL_PORT', 465),

   'from' => [
   'address' => env('MAIL_FROM_ADDRESS', 'cristianbono87@gmail.com'),
   'name' => env('MAIL_FROM_NAME', 'Cristian Bono'),
   ],
   'encryption' => env('MAIL_ENCRYPTION', 'ssl'),

   'username' => env('MAIL_USERNAME'),
   'password' => env('MAIL_PASSWORD'),

];
