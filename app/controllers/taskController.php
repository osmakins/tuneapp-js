<?php

class taskController extends taskModel{

  public $f3;

  public function __construct($f3){
    $this->f3 = $f3;
    if($f3->get('SESSION.user') === NULL){
      $f3->reroute('/login');
    }
  }

  public function tasks(){
    $this->f3->set('content', 'pages/tasks/tasks.htm');
  }
}