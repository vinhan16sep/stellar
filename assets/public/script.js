$(function(){
	"use strict";
	
	
	$('#send').click(function(){
		$('#register-from').submit();
	});
	
	$('#map_bg').hide();
	$('#map').click(function(){
		$('#map_bg').fadeIn();
	});
	$('#map_bg .close').click(function(){
		$('#map_bg').fadeOut();
	});
	
	$('.resident .slide').hide();
	$('.resident #room_a').click(function(){
		$('#re_a').fadeIn();
		$('.resident .room').hide();
		$('.resident #re_b, .resident #re_c, .resident #re_d').hide();
	});
	$('.resident #room_b').click(function(){
		$('#re_b').fadeIn();
		$('.resident .room').hide();
		$('.resident #re_a, .resident #re_c, .resident #re_d').hide();
	});
	$('.resident #room_c').click(function(){
		$('#re_c').fadeIn();
		$('.resident .room').hide();
		$('.resident #re_a, .resident #re_b, .resident #re_d').hide();
	});
	$('.resident #room_d').click(function(){
		$('#re_d').fadeIn();
		$('.resident .room').hide();
		$('.resident #re_a, .resident #re_b, .resident #re_c').hide();
	});
	$('.slide .close').click(function(){
		$('.resident .slide').fadeOut();
		$('.resident .room').fadeIn();
	});
	
	
	$('#re_a, #re_b, #re_c, #re_d').carousel({
  		interval: 3000
	});
	
	$('#stellar_vid').hide();
	$('#play_vid').click(function(){
		$('#stellar_vid').fadeIn();
	});
	$('#play_slide').click(function(){
		$('#stellar_vid').fadeOut();
	});
	
	$(".room:first").addClass('room_hover');
	$('.room').mouseenter(function() {
		$(".room:first").removeClass('room_hover');
		$(this).toggleClass('room_hover');
	});
	$('.room').mouseleave(function() {
		$(".room:first").addClass('room_hover');
		$(this).removeClass('room_hover');
	}); 
	$('.room:first').mouseleave(function() {
		$(".room:first").addClass('room_hover');
	}); 
});


$(document).ready(function(){
	"use strict";
		$('.fadeinUp').hide(0).delay(500).fadeIn(500).animate({"marginTop" : "0px"},500);
		
});