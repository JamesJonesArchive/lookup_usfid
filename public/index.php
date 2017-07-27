<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
// use USF\IdM\UsfARMapi;

error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '-1');
date_default_timezone_set('UTC');
try {
    // Initialize Composer autoloader
    if (!file_exists($autoload = __DIR__ . '/vendor/autoload.php')) {
        throw new \Exception('Composer dependencies not installed. Run `make install --directory app/api`');
    }
    require_once $autoload;
    
    // Initialize Slim Framework
    if (!class_exists('\\Slim\\Slim')) {
        throw new \Exception(
        'Missing Slim from Composer dependencies.'
        . ' Ensure slim/slim is in composer.json and run `make update --directory app/api`'
        );
    }
//    if (!class_exists('\\USF\\SAQ\\saqservices')) {
//        throw new \Exception(
//        'Missing saqservices from Composer dependencies.'
//        . ' Ensure usf/saq/saqservices is in composer.json and run `make update --directory app/api`'
//        );
//    }    
    
    
    $app = new \Slim\App;
    
    $app->post('/', function() use($app) {
        
    });
    $app->run();
//    $usfARMImportFileProcessor = new \USF\IdM\UsfARMImportFileProcessor();
//    if(in_array(strtolower(trim($argv[1])), ['roles','accounts','mapping'])) {
//        $usfARMImportFileProcessor->parseFileByType($argv[2], strtolower(trim($argv[1])));
//    } else {
//        exit("Invalid option for import type: {$argv[1]}");
//    }
} catch (Exception $ex) {

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
SOMETHING
