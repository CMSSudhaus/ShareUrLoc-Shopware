<?php
/**
 * Created by PhpStorm.
 * User: Dirk.Persky
 * Date: 05.04.2017
 * Time: 14:17
 */
namespace ShopwarePlugins\ShareUrLoc\Subscriber;

use Enlight_Controller_EventArgs;

class Emotion {
    private $container;
    private $request;
    private $config;
    /**
     * Init Listing Class
     */
    public function __construct()
    {
        $this->container = Shopware()->Container();
        $this->request = new \Zend_Controller_Request_Http();
        $this->config = Shopware()->Plugins()->Frontend()->LaMerLanguage()->Config();
    }
    public function handle(Enlight_Controller_EventArgs $args, $path)
    {

    }
}