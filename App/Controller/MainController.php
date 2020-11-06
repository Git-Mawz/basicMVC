<?php

namespace App\Controller;

use App\Controller\CoreController;


class MainController extends CoreController{

    public function error404() {
        $this->display('error404', []);
    }

    public function browse () {
        $this->display('main');
    }

}