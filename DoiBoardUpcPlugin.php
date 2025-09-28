<?php

/**
 * @file plugins/generic/doiBoardUpc/DoiBoardUpcPlugin.php
 *
 * Distributed under The MIT License. For full terms see the file LICENSE.
 * @author Fran Máñez
 *
 * @class DoiBoardUpcPlugin
 *
 * @brief Plugin This plugin adds a link to the article view in OJS. The link directs users to the DOIBoard application by UPC (doi.upc.edu).
 * The DOIBoard application allows users to retrieve information about a given DOI registered in Crossref, by querying Crossref’s public API.
 * In addition, the tool provides details about the DOI prefix, showing information about the institution registered in Crossref under that prefix.
 * In this way, the plugin gives users direct and enriched access to both the article’s metadata and the institutional data associated with its DOI.
 *
 */

namespace APP\plugins\generic\doiBoardUpc;

use APP\core\Application;
use APP\template\TemplateManager;
use PKP\plugins\GenericPlugin;
use PKP\plugins\Hook;

class DoiBoardUpcPlugin extends GenericPlugin
{

    /**
     * @copydoc Plugin::getName()
     */
    public function getName()
    {
        return 'DoiBoardUpcPlugin';
    }

    /**
     * @copydoc Plugin::getDisplayName()
     */
    public function getDisplayName()
    {
        return __('plugins.generic.doiBoardUpc.displayName');
    }

    /**
     * @copydoc Plugin::getDescription()
     */
    public function getDescription()
    {
        return __('plugins.generic.doiBoardUpc.description');
    }


    public function register($category, $path, $mainContextId = null)
    {
        // Register the plugin even when it is not enabled
        $success = parent::register($category, $path);

        if ($success && $this->getEnabled()) {

            $request = Application::get()->getRequest();
            $url = $request->getBaseUrl() . '/' . $this->getPluginPath() . '/css/doiBoardUpcPluginStyle.css';
            $templateMgr = TemplateManager::getManager($request);
            $templateMgr->addStyleSheet('tutorialExampleStyles', $url, array('contexts' => 'frontend') );

            // Registrar hooks usando Hook::add
            //Hook::add('TemplateManager::display', array($this, 'callbackDisplayTemplate'));

            // Registrar directamente el hook donde quieres insertar el enlace
            Hook::add('Templates::Article::Main', array($this, 'callbackAddLinkDoiBoard'));
        }

        return $success;
    }


    public function callbackDisplayTemplate($hookName, $args) {
        $templateMgr = $args[0];
        $template = $args[1];

        // Detect page
        switch ($template) {
            case 'frontend/pages/indexJournal.tpl':
                // journal home page
                $templateMgr->assign('miEnlaceEspecial', 'https://mi-sitio.com');
                break;

            case 'frontend/pages/article.tpl':
                // article page
                $templateMgr->assign('enlaceArticulo', 'https://mi-sitio.com/articulos');
                break;
        }

        return false;
    }


    public function callbackAddLinkDoiBoard($hookName, $args) {
        $params = $args[0];
        $smarty = $args[1];
        $output =& $args[2];

        // Verificar que $smarty es un objeto Smarty
        if (!is_object($smarty) || !method_exists($smarty, 'fetch')) {
            error_log("Error: Smarty object not available");
            return false;
        }

        try {

            // get prefix and suffix DOI
            $doi = str_replace("https://doi.org/", "", $smarty->tpl_vars['doiUrl']);
            $doiPrefix = explode("/", $doi)[0];
            $doiSuffix = explode("/", $doi)[1];

            // Asignar variables al Smarty
            $smarty->assign('doiUrl', $doi);
            $smarty->assign('doiText', $doiSuffix);
            $smarty->assign('doiPrefix', $doiPrefix);

            // Renderizar el template usando el objeto Smarty
            $nuevoEnlace = $smarty->fetch($this->getTemplateResource('doiboard.tpl'));

            $output = $nuevoEnlace . $output;

        } catch (Exception $e) {
            error_log("Error loading template: " . $e->getMessage());
        }

        return false;
    }

}