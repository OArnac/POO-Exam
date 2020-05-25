<?php

echo self::getTwig()->render('vehicule/index.html', [
    'vehicules' => $vehicules
]);

?>