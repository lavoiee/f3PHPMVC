<?php

  require_once("vendor/autoload.php");

  $f3 = Base::instance();

  // config() is defined in base.php
  $f3->config('config.ini');

  // Base routes
  $f3->config('routes.ini');

  $f3->run();

 ?>
