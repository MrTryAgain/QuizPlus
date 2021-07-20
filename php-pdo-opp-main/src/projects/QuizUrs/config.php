<?php
//start session and initialize achieved number of points
//session_start();
session_start();

//preset paths to statndart include folders (contact them with PATH_SEPERATOR
$incPaths = $_SERVER['DOCUMENT_ROOT'] . '/php'; 
//site root includes
$incPaths .= PATH_SEPARATOR;
$incPaths .= $_SERVER['DOCUMENT_ROOT'] . '/projects/QuizUrs';
set_include_path($incPaths);

// includes required for all page templates
include 'auth.php';
include 'database.php';

//tracing
define('TRACE_DB_ACCESS', false);


