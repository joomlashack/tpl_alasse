<?php
/**
 * @package     Alasse
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

JLoader::import('joomla.environment.browser');

$wrightBodyClass .= ($this->countModules('sidebar2')) ? ' sb2' : '';
$wrightBodyClass .= ($this->countModules('floating')) ? ' floating-exists' : '';
$wrightBodyClass .= ' ' . $wrightContainerClass . '-mode';

// Toolbar is Displayed
$alasseToolbarDisplayed = ($this->params->get('alasse_toolbar_displayed','1') == '1' ? true : false);
