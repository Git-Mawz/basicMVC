<?php

namespace App\Controller;

use App\Controller\CoreController;
use App\Model\Admin;

class AdminController extends CoreController {
    
    public function browse () {

        $admin = new Admin();

        $data = [
            'username' => $admin->getUsername(),
            'firstName' => $admin->getFirstName(),
            'lastName' => $admin->getLastName()

        ];

        $this->display('admin', $data);

    }

}