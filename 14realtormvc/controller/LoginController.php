<?php

class LoginController {
    private $model;
    private $view;
    private $users;
    private $error;
    
    public function __construct() {
        $this->model = new LoginModel();
        $this->view  = new LoginView($this->model);
        $this->users = array();
        $this->error = null;
    }

    public function validateUser($post) {
        if (isset($post['submit'])) {
            $options = array();
            $options['username'] = $post['username'];
            $options['password'] = $post['password'];
            
            $this->users = $this->model->fetch($options);

            if(!count($this->users)) {
                $this->error = 'Validation Error';
            } else {
                $_SESSION['authenticated'] = true;
                header('location: index.php');
            }
        } 
    }

    public function render() {

        $this->view->render($this->error);
    }

}