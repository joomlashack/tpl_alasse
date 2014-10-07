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

$wrightTemplate = WrightTemplate::getInstance();
$app = JFactory::getApplication();
$input = $app->input;

// Check if there's a sidebar at all
$sidebarExists = (JModuleHelper::getModules('sidebar1') || JModuleHelper::getModules('sidebar2'));

$wrightBodyClass .= ($this->countModules('sidebar1')) ? ' sb1' : '';
$wrightBodyClass .= ($this->countModules('sidebar2')) ? ' sb2' : '';
$wrightBodyClass .= ($this->countModules('floating')) ? ' floating-exists' : '';
$wrightBodyClass .= ' ' . $wrightContainerClass . '-mode';

// Toolbar is Displayed
$alasseToolbarDisplayed = ($this->params->get('alasse_toolbar_displayed','1') == '1' ? true : false);

// Use full width only if it's a blog or featured articles view
$paramOption = $input->getVar('option', '');
$paramView = $input->getVar('view', '');
$paramLayout = $input->getVar('layout', 'default');
$paramItemid = $input->getVar('Itemid', '');
$paramId = $input->getVar('id', '');

// Checks the right layout of the category, depending if it's set on the menu item or if it has to look for the category layout or default com_content layout for blogs
if ($paramOption == 'com_content' && $paramView == 'category')
{
	$menu = $app->getMenu();
	$defaultCategoryLayout = true;

	$menuItem = $menu->getActive();
	if ($menuItem)
	{
		if ($paramId == $menuItem->query['id'])
		{
			$defaultCategoryLayout = false;
		}
	}

	if ($defaultCategoryLayout && $paramId != '')
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select($db->qn('params'))
			->from($db->qn('#__categories'))
			->where($db->qn('id') . ' = ' . (int) $paramId);
		$db->setQuery($query);
		if ($rawparams = $db->loadResult())
		{
			$params = new JRegistry();
			if (version_compare(JVERSION, '3.0', 'ge'))
			{
				$params->loadString($rawparams, 'JSON');
			}
			else
			{
				$params->loadJSON($rawparams);
			}
			$paramLayout = $params->get('category_layout', '');

			if ($paramLayout == '')
			{
				$query->clear()
					->select($db->qn('params'))
					->from($db->qn('#__extensions'))
					->where($db->qn('name') . ' = ' . $db->q('com_content'));
				$db->setQuery($query);
				if ($rawparams = $db->loadResult())
				{
					$params = new JRegistry();
					if (version_compare(JVERSION, '3.0', 'ge'))
					{
						$params->loadString($rawparams, 'JSON');
					}
					else
					{
						$params->loadJSON($rawparams);
					}
					$paramLayout = $params->get('category_layout', '');
					if ($paramLayout == '_:blog')
					{
						$paramLayout = 'blog';
					}
				}
			}
		}
	}
}

$alasseFullWidthBg = ($paramOption == 'com_content' && ($paramView == 'category' && $paramLayout == 'blog') || ($paramView == 'featured'));

$mainContainer = $wrightContainerClass;
$mainGridMode = 'row-fluid';
$mainSpan = 'span12';

$mainComplementContainer = '';
$mainComplementGridMode = '';
$mainComplementSpan = '';

if ($alasseFullWidthBg && !$sidebarExists)
{
    $mainContainer = '';
    $mainGridMode = '';
    $mainSpan = '';
    $wrightTemplate->useMainSpans = false;
    $mainComplementContainer = $wrightContainerClass;
    $mainComplementGridMode = 'row-fluid';
    $mainComplementSpan = 'span12';
}
