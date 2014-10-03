jQuery(document).ready(function($) {

    function setBlogItems(){
        jQuery("#main-content > *").equalHeights();
    }

    jQuery(window).load(function(){
            setBlogItems();
    });

});