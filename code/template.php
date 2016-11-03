<?php
/**
 * @package     Alasse
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
    <head>
        <w:head />
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body class="<?php echo $wrightBodyClass ?>">
        <?php if ($this->countModules('toolbar')) : ?>
        <?php if (!$alasseToolbarDisplayed) : ?>
        <div class="<?php echo $wrightContainerClass ?> visible-desktop relative">
            <a class="alasse-toolbar-switch btn btn-navbar" >
                <span class="icon-angle-down icon-2x"></span>
            </a>
        </div>
        <?php endif; ?>
        <div class="wrappToolbar<?php echo ' border-toolbar-' . $wrightContainerClass . ($alasseToolbarDisplayed ? '' : ' collapsedToolbar'); ?>">
            <w:nav containerClass="<?php echo $wrightContainerClass ?> alasse-toolbar-container<?php echo ($alasseToolbarDisplayed ? '' : ' collapsedToolbarInner'); ?>" rowClass="<?php echo $wrightGridMode;?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
        </div>
        <?php endif; ?>

        <header id="header">
            <div class="<?php echo $wrightContainerClass; ?>">
                <div class="row-fluid">
                    <w:logo name="menu" />
                </div>
                <?php if ($this->countModules('top')) : ?>
                <div id="top">
                    <w:module type="none" name="top" chrome="xhtmlwright" />
                </div>
                <?php endif; ?>
            </div>

            <?php if ($this->countModules('floating')) : ?>
            <div id="floating">
                <w:module type="none" name="floating" chrome="xhtmlwright" />
            </div>
            <?php endif; ?>

            <?php if ($this->countModules('featured')) : ?>
            <div id="featured">
                <w:module type="none" name="featured" chrome="xhtmlwright" />
            </div>
            <?php endif; ?>

            <?php
                if ($wrightSingleArticleImage != '')
                    :
            ?>
            <div class="full-image">
                <img src="<?php echo $wrightSingleArticleImage ?>" alt="<?php echo $wrightSingleArticleAlt ?>" />
            </div>
            <?php
                endif;
            ?>
        </header>

        <?php if ($this->countModules('grid-top')) : ?>
        <div id="grid-top">
            <div class="<?php echo $gtContainerClass; ?> container-alasse">
                <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->countModules('grid-top2')) : ?>
        <div id="grid-top2">
            <div class="<?php echo $gt2ContainerClass; ?> container-alasse">
                <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-sidebar">
            <div class="bg-sidebar-inner"></div>
            <div class="<?php echo $mainContainer; ?> container-alasse">
                <div id="main-content" class="<?php echo $mainGridMode ?>">
                    <!-- sidebar1 -->
                    <aside id="sidebar1">
                        <w:module name="sidebar1" chrome="xhtmlwright" />
                    </aside>
                    <!-- main -->
                    <section id="main">

						<?php if ($mainComplementContainer == '') : ?>
							<div class="<?php echo $mainComplementContainer ?>">
								<div class="<?php echo $mainComplementGridMode ?>">
									<div class="<?php echo $mainComplementSpan ?>">
                        <?php endif; ?>
                        <?php if ($alasseFullWidthBg) : ?>
                        <div class="<?php echo $wrightContainerClass; ?>">
                        <?php endif; ?>
                        <?php if ($this->countModules('above-content')) : ?>
                        <div id="above-content">
                            <w:module type="none" name="above-content" chrome="xhtmlwright" />
                        </div>
                        <?php endif; ?>
                        <?php if ($this->countModules('breadcrumbs')) : ?>
                        <div id="breadcrumbs">
                                <w:module type="single" name="breadcrumbs" chrome="none" />
                        </div>
                        <?php endif; ?>
                        <?php if ($alasseFullWidthBg) : ?>
                        </div>
                        <?php endif; ?>

						<?php if ($mainComplementContainer == '') : ?>
									</div>
								</div>
							</div>
						<?php endif; ?>

                        <!-- component -->
                        <w:content />

						<?php if ($mainComplementContainer == '') : ?>
							<div class="<?php echo $mainComplementContainer ?>">
								<div class="<?php echo $mainComplementGridMode ?>">
									<div class="<?php echo $mainComplementSpan ?>">
						<?php endif; ?>
                        <?php if ($alasseFullWidthBg) : ?>
                        <div class="<?php echo $wrightContainerClass; ?>">
                        <?php endif; ?>
                        <?php if ($this->countModules('below-content')) : ?>
                        <div id="below-content">
                            <w:module type="none" name="below-content" chrome="xhtmlwright" />
                        </div>
                        <?php endif; ?>
                        <?php if ($alasseFullWidthBg) : ?>
                        </div>
                        <?php endif; ?>
						<?php if ($mainComplementContainer == '') : ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
                    </section>

                    <!-- sidebar2 -->
                    <aside id="sidebar2">
                        <w:module name="sidebar2" chrome="xhtmlwright" />
                    </aside>
                </div>
            </div>
        </div>

        <?php if ($this->countModules('grid-bottom')) : ?>
        <div id="grid-bottom">
            <div class="<?php echo $gbContainerClass; ?> container-alasse">
                <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->countModules('grid-bottom2')) : ?>
        <div id="grid-bottom2" class="<?php echo $gb2ContainerClass; ?> container-alasse">
            <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
        </div>
        <?php endif; ?>

        <div class="wrapper-footer">
    	    <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky"<?php endif;?>>
                <?php if ($this->countModules('bottom-menu')) : ?>
                <w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode;?>" name="bottom-menu" wrapClass="navbar-inverse navbar-transparent" />
                <?php endif; ?>

                <div class="<?php echo $wrightContainerClass ?> footer-content container-alasse">
                    <?php if ($this->countModules('footer')) : ?>
                    <w:module type="row-fluid" name="footer" chrome="wrightflexgrid" />
                    <?php endif; ?>
    				<w:footer />
    			</div>
    	    </footer>
        </div>
        <?php if(!$alasseToolbarDisplayed): ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_alasse/js/alasse.js'></script>
        <?php endif; ?>
        <?php
        $browser = JBrowser::getInstance();

        if ($browser->getBrowser() == 'msie')
        {
            $major = $browser->getMajor();

            if ((int)$major <= 9) {
                echo "<script type='text/javascript' src='" . JURI::root()
                .  "templates/" . $this->document->template
                . "/js/jquery.equalheights.js'></script>";
                echo "<script type='text/javascript' src='" . JURI::root()
                .  "templates/" . $this->document->template
                . "/js/fallback.js'></script>";
            }
        }
        ?>

        <script>
            jQuery(document).ready(function($) {
                function mobileMenu (string) {
                    if (jQuery(window).width() < 767) {
                        jQuery(string + ' li.parent').each(function () {
                            var classId = jQuery(this).attr("class");
                            var classContent = classId.split(" ");
                            jQuery(this).children('a').attr("data-toggle", "collapse");
                            jQuery(this).children('a').attr("href", "#");
                            jQuery(this).children("ul").addClass("collapse");
                            jQuery(this).children('ul').attr("id", classContent[0]);
                            jQuery(this).children('ul').css("display", "block");
                            jQuery(this).children('a').attr("data-target", "#" + classContent[0]);
                        });
                    }
                }

                mobileMenu("#toolbar");

                jQuery(window).resize(function () {
                    mobileMenu("#toolbar");
                });
            });
        </script>
    </body>
</html>
