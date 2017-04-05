<?php
/**
 * Created by PhpStorm.
 * User: Dirk.Persky
 * Date: 05.04.2017
 * Time: 14:04
 */
use ShopwarePlugins\ShareUrLoc\Subscriber;


class Shopware_Plugins_Frontend_ShareUrLoc_Bootstrap extends Shopware_Components_Plugin_Bootstrap {
    private $jsonConfig;
    public function loadJsonConfig($proptery){
        if(empty($this->jsonConfig)){
            $this->jsonConfig = json_decode(file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'plugin.json'), true);
        }

        if(isset( $this->jsonConfig[$proptery] )) {
            return $this->jsonConfig[$proptery];
        }
    }
    public function getVersion() {
        if ($version = $this->jsonConfig('currentVersion')) {
            return $version;
        } else {
            throw new Exception('The plugin has an invalid version file.');
        }
    }
    public function getLabel()
    {
        if ($label = $this->jsonConfig('currentVersion')) {
            return $label;
        } else {
            throw new Exception('The plugin has an invalid version file.');
        }
    }
    public function getSolutionName()
    {
        if ($solution_name = $this->jsonConfig('solution_name')) {
            return $solution_name;
        } else {
            throw new Exception('The plugin has an invalid version file.');
        }
    }
    public function getInfo() {
        return array(
            'label' => $this->getLabel(),
            'author' => $this->jsonConfig('author'),
            'copyright' => $this->jsonConfig('copyright'),
            'link' => $this->jsonConfig('link'),
            'support' => $this->jsonConfig('support'),
            'version' => $this->getVersion(),
            'description' => file_get_contents(__DIR__.'/description.txt'),
            'solution_name' => $this->getSolutionName()
        );
    }
    public function uninstall() {
        return true;
    }
    public function install() {
        /**
         * Create the main component for the emotion element.
         */
        $emotionElement = $this->createEmotionComponent([
            'name' => 'ShareUrLoc',
            'xtype' => 'emotion-components-shareurloc',
            'template' => 'shareurloc',
            'cls' => 'emotion-shareurloc',
            'description' => ''
        ]);
        $emotionElement->createField([
            'name' => 'shareurloc_layout',
            'xtype' => 'emotion-components-fields-shareurloc_layout',
            'fieldLabel' => 'Layout',
            'allowBlank' => true
        ]);
        /**
         * Subscribe to the post dispatch event of the emotion backend module to extend the components.
         */
        $this->subscribeEvent(
            'Enlight_Controller_Action_PostDispatchSecure_Backend_Emotion',
            'onPostDispatchBackendEmotion'
        );
        /**
         * Subscribe to the post dispatch event of the emotion backend module to extend the components.
         */
        $this->subscribeEvent(
            'Shopware_Controllers_Widgets_Emotion_AddElement',
            'onEmotionAddElement'
        );

        return true;
    }
    /**
     * @return bool
     */
    public function enable() {
        return [
            'success' => true,
            'invalidateCache' => ['backend', 'frontend','theme']
        ];
    }
    /**
     * @return bool
     */
    public function disable() {
        return [
            'success' => true,
            'invalidateCache' => ['backend', 'frontend','theme']
        ];
    }
    /**
     * After init register the PluginNamespace
     */
    public function afterInit()
    {
        $this->registerPluginNamespaces();
    }
    /**
     * The startDispatch handler
     */
    public function onFrontStartDispatch()
    {
        $this->registerPluginNamespaces();
    }
    /**
     * Register the PluginNamespace
     */
    private function registerPluginNamespaces()
    {
        $this->get('loader')->registerNamespace(
            'ShopwarePlugins\ShareUrLoc',
            $this->Path()
        );
    }

    /**
     * Callback Events
     */
    public function onPostDispatchBackendEmotion(Enlight_Controller_ActionEventArgs $args)
    {
        /** @var \Shopware_Controllers_Backend_Emotion $controller */
        $controller = $args->getSubject();
        $view = $controller->View();
        $view->addTemplateDir($this->Path() . 'Views/');
        $view->extendsTemplate('backend/emotion/shareurloc/view/detail/elements/shareurloc.js');
    }
    public function onEmotionAddElement($args)
    {
        $subscriper = new Subscriber\Redirect();
        $subscriper->handle($args, $this->Path());
    }

}