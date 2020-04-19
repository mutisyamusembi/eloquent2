<?php

require 'vendor/autoload.php'

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $tavble->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});



?>