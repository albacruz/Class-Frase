<?php
   require __DIR__ . '/../vendor/autoload.php';

   $aSettings = require __DIR__ . '/../config/app.php';

   $app = new \Slim\App($aSettings);

   require __DIR__ . '/../provider/provider.php';

   require __DIR__ . '/../app/routes/routes.php';