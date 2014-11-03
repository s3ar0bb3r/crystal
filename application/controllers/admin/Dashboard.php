<?php
class Dashboard extends AdminBaseController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if(logged_in()) {
            $this->ag_auth->view('dashboard');
        }
        else {
            $this->login();
        }
    }

}