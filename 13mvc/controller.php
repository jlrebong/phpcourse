<?php


class Controller {
    public function __construct(
        private $model, 
        private $view
    ) {

    }

    public function render() {
        // Note: We can add some logic here to pass to the view
        // $this->view->render();

        $data = 'Tommy';
        $this->view->render($data);
    }
}