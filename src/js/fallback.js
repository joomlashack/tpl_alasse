jQuery(document).ready(function($) {

    function setBlogItems(){
        jQuery(".sb2 #main-content > *").equalHeights();
    }

    jQuery(window).load(function(){
            setBlogItems();
    });
    jQuery(window).resize(function(){
        if (jQuery(".is_internet.v9").length)
            setBlogItems();
    });

});