/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
$(".top-right").click(function(){
 $("#menu-bar").animate({width:'toggle'},350);
}); 

$(window).scroll(function()
            {
                if ($(this).scrollTop() > 20){
					 $('#menu-bar').addClass("fixed");
                                         $('#menu-bar').css({ position: 'fixed', top:0});
                                }
                else {
					$('#menu').removeClass("fixed");					 

				}
            });

});



