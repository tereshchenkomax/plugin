<?php

namespace includes;

class CorpAdminTemplates
{
    private static $instance = null;
    private function __construct() {

    }
    public static function getInstance() {

        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;

    }

    static public function activation()
    {
        // debug.log
        error_log('plugin '.CORPADMINAUTOLOAD_PlUGIN_NAME.' activation');
    }

    static public function deactivation()
    {
        // debug.log
        error_log('plugin '.CORPADMINAUTOLOAD_PlUGIN_NAME.' deactivation');
    }

}

CorpAdminTemplates::getInstance();


/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 01.02.2017
 * Time: 22:03
 */