<?php 

$config['base_url'] = ROOT_DIR; // Base URL [ OPTIONAL define it like (e.g. http://localhost/) ]

$config['default_controller'] = 'main'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = ''; // Database host (e.g. localhost)
$config['db_name'] = ''; // Database name
$config['db_username'] = ''; // Database username
$config['db_password'] = ''; // Database password

$config['autoload'] = array(
  'plugins' => array(),
	'helpers' => array('session_helper', 'url_helper')
);

?>
