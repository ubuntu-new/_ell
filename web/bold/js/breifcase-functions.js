/*
 * Name: Briefcase Functions 
 * Version: 1.0
 * Developer: Themderbolt (support@themderbolt.com)
 * Website: www.themderbolt.com
 * Date : 23/08/2013
 * All code (c)2013 Themderbolt - all rights reserved
 */


// FUNCTION - NAVIGATION


$(document).ready(function() {
  	  $('body').addClass('js');
		  var $menu = $('#menu'),
		  	  $menulink = $('.menu-link'),
		  	  $menuTrigger = $('.has-subnav > a');
		
		$menulink.click(function(e) {
			e.preventDefault();
			$menulink.toggleClass('active');
			$menu.toggleClass('active');
		});
		
		$menuTrigger.click(function(e) {
			e.preventDefault();
			var $this = $(this);
			$this.toggleClass('active').next('ul').toggleClass('active');
		});
		
	});


// FUNCTION - FITTEXT TITLES

$(".page-title").fitText(0.8, { minFontSize: '30px', maxFontSize: '150px' });
$(".page-title-shadow").fitText(0.8, { minFontSize: '30px', maxFontSize: '150px' });



// MIXED UP


$(function(){
$('#og-grid').mixitup();
});