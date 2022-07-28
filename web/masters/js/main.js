jQuery( document ).ready(function( $ ) {
"use strict"
/*-----------------------------------------------------------------------------------*/
/*		STICKY NAVIGATION
/*-----------------------------------------------------------------------------------*/
$(".sticky").sticky({topSpacing:0});
/*-----------------------------------------------------------------------------------*/
/* 	LOADER
/*-----------------------------------------------------------------------------------*/
$("#loader").delay(500).fadeOut("slow");
/*	ISOTOPE PORTFOLIO
/*-----------------------------------------------------------------------------------*/
var $container = $('.port-wrap .items');
    $container.imagesLoaded(function () {
    $container.isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'masonry'
});	
});
$('.portfolio-filter li a').on('click', function () {
    $('.portfolio-filter li a').removeClass('active');
    $(this).addClass('active');
    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector
    });
return false;
});
/*-----------------------------------------------------------------------------------*/
/* 	SINGLE SLIDE
/*-----------------------------------------------------------------------------------*/
$(".single-slides").owlCarousel({ 
    items : 1,
	autoplay:false,
	autoplayHoverPause:true,
	singleItem	: true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	lazyLoad:true,
	nav: true,
	loop: true,
	animateOut: 'fadeOut'	
});
});

/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM
/*-----------------------------------------------------------------------------------*/
function checkmail(input){
  var pattern1=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  	if(pattern1.test(input)){ return true; }else{ return false; }}     
    function proceed(){
    	var name = document.getElementById("name");
		var email = document.getElementById("email");
		var company = document.getElementById("company");
		var web = document.getElementById("website");
		var msg = document.getElementById("message");
		var errors = "";
		if(name.value == ""){ 
		name.className = 'error';
	  	  return false;}    
		  else if(email.value == ""){
		  email.className = 'error';
		  return false;}
		    else if(checkmail(email.value)==false){
		        alert('Please provide a valid email address.');
		        return false;}
		    else if(company.value == ""){
		        company.className = 'error';
		        return false;}
		   else if(web.value == ""){
		        web.className = 'error';
		        return false;}
		   else if(msg.value == ""){
		        msg.className = 'error';
		        return false;}
		   else 
		  {
	$.ajax({
		type: "POST",
		url: "php/submit.php",
		data: $("#contact_form").serialize(),
		success: function(msg){
		//alert(msg);
		if(msg){
			$('#contact_form').fadeOut(1000);
			$('#contact_message').fadeIn(1000);
				document.getElementById("contact_message");
			 return true;
		}}
	});
}};
/*-----------------------------------------------------------------------------------*/
/*  Sliders
/*-----------------------------------------------------------------------------------*/
var swiper = new Swiper(".slider-home", {
	 autoHeight: true,
	loop: true,
	autoplay: {
		delay: 4500,
		disableOnInteraction: false,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});



