<?php


class View {
    public function render($data=null) {
        if(isset($data)) {
            echo "<h1>Hello $data</h1>";
        } else {
            echo "<h1>Hello World</h1>";
        }

        // or
        include "./pages/view.php";
        
    }
}