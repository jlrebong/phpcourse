<?php


class LoginView {
    public function __construct(private $model) {}

    public function render($error=null) {
        include "./view/pages/login.php";
    }
}