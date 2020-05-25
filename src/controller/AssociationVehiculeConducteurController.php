<?php
namespace App\Controller;

use App\Model\Animal;

class AnimalController extends AbstractController {
    
    public static function index() {
        echo self::getTwig()->render('association_vehicule_conducteur/index.html', [
            'association' => $association
        ]);
    }


}
