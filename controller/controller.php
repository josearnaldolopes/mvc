<?php
class controller {
    public function model() {
        require_once 'model/model.php';
    }
    public function view() {
        $this->model();
        require_once 'view/view.php';
    }
}