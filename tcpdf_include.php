<?php
// Ensure this script is not directly accessible
if (!defined('TCPDF_INCLUDE_DIR')) {
    define('TCPDF_INCLUDE_DIR', dirname(__FILE__).'/');
}

// Include the main TCPDF library
require_once(TCPDF_INCLUDE_DIR.'tcpdf.php');

// Include additional config files if needed (optional)
// require_once(TCPDF_INCLUDE_DIR.'config/tcpdf_config.php');

?>
