<?php

echo self::getTwig()->render('conducteur/index.html', [
    'conducteur' => $conducteur
]);

?>