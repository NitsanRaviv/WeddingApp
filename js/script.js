// JavaScript Document

$(document).ready(function() {

	// button next screen

	$(".page-1").click(function(){
		$(".page").hide();
	});
	  
	$(".page-1").click(function(){
		$(".section-page").show();
	});

	$(".section").click(function(){
		$(".section-page").hide();
	});

	$(".section").click(function(){
		$(".tanks-page").show();
	});

	// button next screen end

	// OFI Browser
	objectFitImages();
});
