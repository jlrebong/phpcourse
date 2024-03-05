<?php


class IndexController {
    
    private $model;
    private $view;
    private $filter;

    public function __construct() {
        $this->model = new HouseModel();
        $this->view  = new HouseView($this->model);
    }

    public function render() {
        $houses = $this->model->get();

        $this->filter = false;
        if (isset($_GET['type'])) {
            $this->filter = $_GET['type'];
        }

        // Filter
        $filtered_houses = array_filter($houses, function($house) {
            if (!$this->filter) return true;

            return $this->filter && $this->filter == $house['type'];
        });


        $this->view->render($filtered_houses);
    }

    public function renderAdminLink() {
        if(isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
            echo '<li><a href="admin.php">Admin</a></li><li><a href="logout.php">Logout</a></li>';        
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        }
    }
}