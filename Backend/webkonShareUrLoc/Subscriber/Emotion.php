<?php
/**
 * Created by PhpStorm.
 * User: Dirk.Persky
 * Date: 05.04.2017
 * Time: 14:17
 */
namespace ShopwarePlugins\ShareUrLoc\Subscriber;

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
        $this->config = Shopware()->Plugins()->Backend()->webkonShareUrLoc()->Config();
    }
    public function handle(\Enlight_Event_EventArgs $args, $path)
    {
        $element = $args->get('element');
        $data = $args->getReturn();
        if(
            isset($element['component']) &&
            isset($element['component']['cls']) &&
            $element['component']['cls'] == 'emotion-shareurloc'
        ) {

            if(empty($this->config['apiKey'])) {
                throw new \Exception('Plugin: ShareUrLoc no API-Key set in Config!!!!');
            }

            $data['apikey'] = (isset($this->config['apiKey'])? $this->config['apiKey'] : '');
        }
        return $data;
    }
}