/**
 * Created by Lampyon-1 on 2017. 07. 17..
 */
$(document).ready(function(){
   console.log('JS Loaded');
});

jQuery(document).ready(function(){
    jQuery('.parallax[data-type="background"]').each(function(){
        var bgobj = jQuery(this);

        jQuery(window).scroll(function(){
            var yPos = -(jQuery(window).scrollTop() / bgobj.data('speed'));

            var coords = '50% ' + yPos + 'px';

            bgobj.css('background-position', coords);
        });
    });

    jQuery('.parallax[data-type="text"]').each(function(){
        var textobj = jQuery(this);
        var originalTop = textobj.position().top;

        jQuery(window).scroll(function(){
            var topPos = -((jQuery(window).scrollTop()) / textobj.data('speed'));

            var coords = topPos + originalTop + 'px';

            textobj.css('top', coords);
        });
    });

    /* Smooth scrolling when clicking on an anchor */
    jQuery('.smooth a').on('click', function(event){
        //event.preventDefault();
        jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top - 100},500);
    });

    // Disable right click
    jQuery(document).bind('contextmenu', function(e) {
        return false;
    });

    //Disable print screen
    function copyToClipboard() {
        var aux = document.createElement("input");
        aux.setAttribute("value", "A print screen nem engedélyezett!");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        alert("A print screen nem engedélyezett!");
    }

    jQuery(window).keyup(function(e){
        if(e.keyCode == 44){
            copyToClipboard();
        }
    });
});
