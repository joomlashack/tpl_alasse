<?php
/**
 * @package     Elear
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row-fluid');
$containerClass = 'container';
if ($gridMode == 'row-fluid') {
    $containerClass = 'container-fluid';
}

$responsivePage = $this->params->get('responsive','1');
$responsive = ' responsive';
if ($responsivePage == 0) {
    $responsive = ' no-responsive';
}

// Sidebar2 Exist
$sidebar2_exist = ($this->countModules('sidebar2')) ? ' sb2' : '' ;

// Grid bottom full widht option
$gb2_full_width = $this->params->get('grid_bottom_full_width_mode','1');
$gb2_container_class = ($gb2_full_width) ? 'container-fluid' : $containerClass;
$gb2_row_class = ($gb2_full_width) ? 'row-fluid' : $gridMode;
