<?php
// config.php
define("WOWZA_HOST","http://127.0.0.1:8088/enginemanager");
define("WOWZA_SERVER_INSTANCE", "_defaultServer_");
define("WOWZA_VHOST_INSTANCE", "_defaultVHost_");
define("WOWZA_USERNAME", "Serios_Cem");
define("WOWZA_PASSWORD", "Aka504504");

// It is simple to create a setup object for transporting our settings
$setup = new Com\Wowza\Entities\Application\Helpers\Settings();
$setup->setHost(WOWZA_HOST);
$setup->setUsername(WOWZA_USERNAME);
$setup->setPassword(WOWZA_PASSWORD);

// Connect to the server or deal with statistics NOTICE THE CAPS IN COM AND WOWZA
$server = new Com\Wowza\Server($setup);
$sf = new Com\Wowza\Statistics($setup);
var_dump($response);