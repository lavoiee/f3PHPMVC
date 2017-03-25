<?php
// Class Main inherits from Base class AppController
class MainController extends Controller{

  function render($f3){
    $f3->set('name','world');
    $view=new View;
    echo $view->render('template.html');

    // Previous two lines can be shortened to:
    // echo Template::instance()->render('template.html');
  }

  function sayHello(){
    echo 'Hello, babe!';
  }
}
?>
