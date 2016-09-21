/*
* Author: Shane Walsh
* Assignment: WE4.1 Web App Assignment Bootstrap, Digital Skills Academy
* Student ID: D15128603
* Date : 2016/07/23
* REF: https://paulund.co.uk/how-to-create-an-animated-scroll-to-top-with-jquery
*/


//#to-top button appears after scrolling
 $(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#to-top').fadeIn();
        } else {
            $('#to-top').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('#to-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});