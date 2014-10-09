
<?php
// Wright v.3 Override: Joomla 2.5.16 and 3.2
/**
 * @package     Alasse
 * @subpackage  mod_articles_news
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

    $wrightNewsEnableIcons = false;
    $wrightImageFirst = true;
    $wrightEnableIntroText = false;
    $wrightMaxColumns = 2;

    $wrightDivideRows = true;

include(Overrider::getOverride('mod_articles_news','horizontal'));
?>
