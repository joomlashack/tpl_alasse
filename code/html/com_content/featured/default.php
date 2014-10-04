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

// Template's gridMode
$this->wrightNonContentContainer = ($template->params->get('bs_rowmode', 'row') == 'row' ? 'container' : 'container-fluid');
$this->wrightNonContentRowMode = 'row-fluid';
$this->wrightContentExtraContainer = ($template->params->get('bs_rowmode', 'row') == 'row' ? 'container' : 'container-fluid');
$this->wrightImagesRow = true;

$this->wrightLeadingItemElementsStructure = Array(
	'div.fullwidthimage',
		'div.container-fluid',
			'div.row-fluid',
				'div.span12',
					'image',
				'/div',
			'/div',
		'/div',
	'/div',
	'div.' . $this->wrightNonContentContainer,
		'div.row-fluid',
			'div.span12',
				'title',
				'article-info',
				'icons',
				'content',
			'/div',
		'/div',
	'/div'
);

require_once JPATH_THEMES . '/' . $app->getTemplate() . '/wright/html/overrider.php';

include Overrider::getOverride('com_content.featured');
