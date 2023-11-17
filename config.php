<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_3139364bed';
$CFG->dbuser    = 'moodle_3139364bed';
$CFG->dbpass    = '3139364bed';
$CFG->prefix    = 'mdlhm_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);
$CFG->dboptions['dbcollation'] = 'utf8mb4_general_ci';

$CFG->wwwroot   = 'http://3.15.199.1';
$CFG->dataroot  = '/var/www/html/moodle/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
