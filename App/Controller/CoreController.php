<?php

namespace App\Controller;

class CoreController {


    public static function display($view, array $viewData = []) {


        extract($viewData);

        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/' . $view . '.php';
        include __DIR__ . '/../views/footer.php';

    }

}