<?php
require_once 'constants.php';
require_once 'function.php';

debug_to_console($_SESSION, 'session aray');
debug_to_console(session_id(), 'session id');


require_once './Models/functionModels.php';

require_once './Models/inscriptionModels.php';
require_once './Models/connectionModels.php';

require_once './Controllers/profilControllers.php';

require_once './Controllers/indexControllers.php';
