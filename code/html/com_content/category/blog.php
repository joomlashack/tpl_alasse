<?php
/**
 * @package     Alasse
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$template = $app->getTemplate(true);
$input = $app->input;

// Template's gridMode
$this->wrightNonContentRowMode = 'row-fluid';
$this->wrightImagesRow = true;

// Check if there's a sidebar at all
$sidebarExists = (JModuleHelper::getModules('sidebar1') || JModuleHelper::getModules('sidebar2'));
// Use full width only if it's a blog or featured articles view
$paramOption = $input->getVar('option', '');
$paramView = $input->getVar('view', '');
$paramLayout = $input->getVar('layout', 'default');
$paramItemid = $input->getVar('Itemid', '');
$paramId = $input->getVar('id', '');

if (!$sidebarExists)
{
	$this->wrightNonContentContainer = ($template->params->get('bs_rowmode', 'row') == 'row' ? 'container' : 'container-fluid');
	$this->wrightContentExtraContainer = ($template->params->get('bs_rowmode', 'row') == 'row' ? 'container' : 'container-fluid');
}
else
{
	$this->wrightNonContentContainer = 'no-padding';
    $this->wrightContentExtraContainer = 'container-fluid no-padding';
}

$this->wrightLeadingItemElementsStructure = Array(
	'div.fullwidthimage',
		'image',
	'/div',
	'div.' . $this->wrightNonContentContainer,
		'div.row-fluid',
			'div.span12',
				'title',
				'article-info',
				'icons',
				'legendtop',
				'content',
				'legendbottom',
				'article-info-below',
				'article-info-split',
			'/div',
		'/div',
	'/div'
);

$this->wrightIntroItemElementsStructure = Array(
	'image',
	'title',
	'article-info',
	'icons',
    'legendtop',
	'content',
    'legendbottom',
    'article-info-below',
    'article-info-split'
);

require_once JPATH_THEMES . '/' . $app->getTemplate() . '/wright/html/overrider.php';

include Overrider::getOverride('com_content.category', 'blog');
