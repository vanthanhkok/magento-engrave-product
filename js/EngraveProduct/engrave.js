/**
 * Created by vanth on 17/02/2017.
 */
jQuery(function() {
    jQuery('div#closeEngraveModal > i').click(function(){
        jQuery('#engravePopup').hide();
    });

    jQuery('div#closeSwitchModal > i').click(function(){
        jQuery('#switchPopup').hide();
    });
});

function openEngravePopup(){
    jQuery('#engravePopup').show();
}

function openSwitchPopup(){
    jQuery('#switchPopup').show();
}