<?php

App::uses('AppController', 'Controller');

class IndexController extends AppController {

    public $uses = array();

    public function beforeFilter() {
        parent::beforeFilter();
    }
    
    public function index() {
        echo 'qqqqqqqqqq';
    }

}
