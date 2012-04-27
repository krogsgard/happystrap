// set noConflict variable
var $j = jQuery.noConflict();


//smooth scrolling 
 $j(function() {
    $j('ul.nav a').bind('click',function(event){
        var $anchor = $j(this);
        
        $j('html, body').stop().animate({
            scrollTop: $j($anchor.attr('href')).offset().top
        }, 500,'easeInOutExpo');

        event.preventDefault();
    });
});

 $j(function() {
 
$j(".gform_button").addClass("btn btn-large");
$j("#submit").addClass("btn");
$j("#searchsubmit").addClass("btn");
$j('.nav-collapse').scrollspy()

});


