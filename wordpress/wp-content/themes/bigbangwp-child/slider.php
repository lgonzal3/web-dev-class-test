<!--
Theme Name:     Big Bang WP Child
Theme URI:      http://milagrocleaning.com/
Description:    Child theme for the Big Bang WP
Author:         Luis Gonzalez
Author URI:     http://luisogonzalez.com
Template:       bigbangwp                            
Version:        0.1.0
-->


<!--	As soon as the document is ready, execute this function -->
jQuery(document).ready(function($){
<!--	Show the home page slider through the flexslider plugin -->
        $('#index-slider').flexslider({
<!--    The slider should have the following attributes - animation shoud fade -->
        animation: "fade",  
<!--    The images should slide on the x axis, not on the Y axis -->
        slideDirection: "horizontal",  
<!--    Does it have more than one photo? -->        
        slideshow: true,   
<!--    If true then show this photo for this many miliseconds -->           
        slideshowSpeed: 8500,      
<!--    When you fade only fade for this many miliseconds -->
        animationDuration: 500,
<!--    Include the ability for the user to rotate the photos -->     
        directionNav: true, 
    });
});