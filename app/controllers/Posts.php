<?php

class Posts extends Controller {
    public function __construct() {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
    }

    public function index() {

        $data = [];


        $this->view('posts/index', $data);
    }
}



function isLoggedIn() {
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
