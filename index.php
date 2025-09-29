<?php

/**
 * @file plugins/generic/doiBoardUpc/index.php
 *
 * Distributed under The MIT License. For full terms see the file LICENSE.
 * @author Fran Máñez - fran.upc@gmail.com
 *
 * @class DoiBoardUpcPlugin
 *
 * @brief Plugin This plugin adds a link to the article view in OJS. The link directs users to the DOIBoard application by UPC (doi.upc.edu).
 * The DOIBoard application allows users to retrieve information about a given DOI registered in Crossref, by querying Crossref’s public API.
 * In addition, the tool provides details about the DOI prefix, showing information about the institution registered in Crossref under that prefix.
 * In this way, the plugin gives users direct and enriched access to both the article’s metadata and the institutional data associated with its DOI.
 *
 */

require_once('DoiBoardUpcPlugin.php');
return new DoiBoardUpcPlugin();
?>