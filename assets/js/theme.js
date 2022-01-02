
















/* Start Article 2 | Start Preloader */
	!function(a,b){"use strict";function c(a){a=a||{};for(var b=1;b<arguments.length;b++){var c=arguments[b];if(c)for(var d in c)c.hasOwnProperty(d)&&("object"==typeof c[d]?deepExtend(a[d],c[d]):a[d]=c[d])}return a}function d(d,g){function h(){if(y){r=b.createElement("canvas"),r.className="pg-canvas",r.style.display="block",d.insertBefore(r,d.firstChild),s=r.getContext("2d"),i();for(var c=Math.round(r.width*r.height/g.density),e=0;c>e;e++){var f=new n;f.setStackPos(e),z.push(f)}a.addEventListener("resize",function(){k()},!1),b.addEventListener("mousemove",function(a){A=a.pageX,B=a.pageY},!1),D&&!C&&a.addEventListener("deviceorientation",function(){F=Math.min(Math.max(-event.beta,-30),30),E=Math.min(Math.max(-event.gamma,-30),30)},!0),j(),q("onInit")}}function i(){r.width=d.offsetWidth,r.height=d.offsetHeight,s.fillStyle=g.dotColor,s.strokeStyle=g.lineColor,s.lineWidth=g.lineWidth}function j(){if(y){u=a.innerWidth,v=a.innerHeight,s.clearRect(0,0,r.width,r.height);for(var b=0;b<z.length;b++)z[b].updatePosition();for(var b=0;b<z.length;b++)z[b].draw();G||(t=requestAnimationFrame(j))}}function k(){i();for(var a=d.offsetWidth,b=d.offsetHeight,c=z.length-1;c>=0;c--)(z[c].position.x>a||z[c].position.y>b)&&z.splice(c,1);var e=Math.round(r.width*r.height/g.density);if(e>z.length)for(;e>z.length;){var f=new n;z.push(f)}else e<z.length&&z.splice(e);for(c=z.length-1;c>=0;c--)z[c].setStackPos(c)}function l(){G=!0}function m(){G=!1,j()}function n(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*r.width),y:Math.ceil(Math.random()*r.height)},this.speed={},g.directionX){case"left":this.speed.x=+(-g.maxSpeedX+Math.random()*g.maxSpeedX-g.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*g.maxSpeedX+g.minSpeedX).toFixed(2);break;default:this.speed.x=+(-g.maxSpeedX/2+Math.random()*g.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?g.minSpeedX:-g.minSpeedX}switch(g.directionY){case"up":this.speed.y=+(-g.maxSpeedY+Math.random()*g.maxSpeedY-g.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*g.maxSpeedY+g.minSpeedY).toFixed(2);break;default:this.speed.y=+(-g.maxSpeedY/2+Math.random()*g.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?g.minSpeedY:-g.minSpeedY}}function o(a,b){return b?void(g[a]=b):g[a]}function p(){console.log("destroy"),r.parentNode.removeChild(r),q("onDestroy"),f&&f(d).removeData("plugin_"+e)}function q(a){void 0!==g[a]&&g[a].call(d)}var r,s,t,u,v,w,x,y=!!b.createElement("canvas").getContext,z=[],A=0,B=0,C=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),D=!!a.DeviceOrientationEvent,E=0,F=0,G=!1;return g=c({},a[e].defaults,g),n.prototype.draw=function(){s.beginPath(),s.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,g.particleRadius/2,0,2*Math.PI,!0),s.closePath(),s.fill(),s.beginPath();for(var a=z.length-1;a>this.stackPos;a--){var b=z[a],c=this.position.x-b.position.x,d=this.position.y-b.position.y,e=Math.sqrt(c*c+d*d).toFixed(2);e<g.proximity&&(s.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),g.curvedLines?s.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):s.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}s.stroke(),s.closePath()},n.prototype.updatePosition=function(){if(g.parallax){if(D&&!C){var a=(u-0)/60;w=(E- -30)*a+0;var b=(v-0)/60;x=(F- -30)*b+0}else w=A,x=B;this.parallaxTargX=(w-u/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(x-v/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}var c=d.offsetWidth,e=d.offsetHeight;switch(g.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=c-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>c&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>c||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(g.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=e-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>e&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>e||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},n.prototype.setStackPos=function(a){this.stackPos=a},h(),{option:o,destroy:p,start:m,pause:l}}var e="particleground",f=a.jQuery;a[e]=function(a,b){return new d(a,b)},a[e].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}},f&&(f.fn[e]=function(a){if("string"==typeof arguments[0]){var b,c=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){f.data(this,"plugin_"+e)&&"function"==typeof f.data(this,"plugin_"+e)[c]&&(b=f.data(this,"plugin_"+e)[c].apply(this,g))}),void 0!==b?b:this}return"object"!=typeof a&&a?void 0:this.each(function(){f.data(this,"plugin_"+e)||f.data(this,"plugin_"+e,new d(this,a))})})}(window,document),
	
	function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();
	particleground(document.getElementById('particles-foreground'), {
	dotColor: 'rgba(255, 255, 255, 1)',
	lineColor: 'rgba(255, 255, 255, 0.05)',
	minSpeedX: 0.3,
	maxSpeedX: 0.6,
	minSpeedY: 0.3,
	maxSpeedY: 0.6,
	density: 50000, 
	curvedLines: false,
	proximity: 250, 
	parallaxMultiplier: 10, 
	particleRadius: 4 
	});
	particleground(document.getElementById('particles-background'), {
	dotColor: 'rgba(255, 255, 255, 0.5)',
	lineColor: 'rgba(255, 255, 255, 0.05)',
	minSpeedX: 0.075,
	maxSpeedX: 0.15,
	minSpeedY: 0.075,
	maxSpeedY: 0.15,
	density: 30000,  
	curvedLines: false,
	proximity: 20, 
	parallaxMultiplier: 20, 
	particleRadius: 2 
	});
	$(window).on("load", function(){
		$(".preloader").fadeOut();
	});
/* Start Article 2 | Start Preloader */
















/*  Start Article 5 || Start Navbar Menu */
	const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
	const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
	const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
	const header = document.querySelector('.header');
	hamburger.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
	document.addEventListener('scroll', () => {
		var scroll_position = window.scrollY;
		if (scroll_position > 30) {
			header.style.background = 'linear-gradient( to right bottom, rgba(0, 0, 0, 0.99), rgba(0, 0, 0, 0.95) )';
		} else {
			header.style.background = 'linear-gradient( to right bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) )';
		}
	});
	menu_item.forEach((item) => {
		item.addEventListener('click', () => {
			hamburger.classList.toggle('active');
			mobile_menu.classList.toggle('active');
		});
	});
/* Start article 5 | Start Navbar Menu => Sticky */
	window.onscroll = function() {myFunction()};
	var navbar = document.getElementById("article-5");
	var sticky = navbar.offsetTop;
	function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	};
/*   End article 5 | End Navbar Menu => Sticky */
/* Start Spy Scroll */
	var sectionArray = [1, 2, 3, 4, 5];
	$.each(sectionArray, function(index, value){
		$(document).scroll(function(){
			var offsetSection = $('#' + 'nav-spy-' + value).offset().top;
			var docScroll = $(document).scrollTop();
			var docScroll1 = docScroll + 1;
			if ( docScroll1 >= offsetSection ){
				$('li a').removeClass('active');
				$('li a:link').addClass('inactive');  
				$('li a').eq(index).addClass('active');
				$('li a:link').eq(index).removeClass('inactive');
			}
		});
		$('li a').eq(index).click(function(e){
			var offsetClick = $('#' + 'nav-spy-' + value).offset().top;
			e.preventDefault();
			$('html, body').animate({
				'scrollTop':offsetClick
			}, 300)
		});
	});
	$(document).ready(function(){
		$('li a:link').addClass('inactive');    
		$('li a').eq(0).addClass('active');
		$('li a:link').eq(0).removeClass('inactive');
	});
/*  End Spy Scroll */
/*  End Article 5 || End Navbar Menu */
















/*  Start article 9 | Start Service */
	  $(document).ready(function(){
		$('.owl-carousel-1').owlCarousel({
		slideSpeed: 800,
		paginationSpeed: 800,
		smartSpeed: 500,
		autoplay: true,
		singleItem: true,
		loop: true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:2,
					nav:true
				},
				1000:{
					items:3,
					nav:true,
					loop:true
				}
			}
		});
	});
/*  End article 9 | End Service */
















/*  Start article 9.1 | Start Service */
	  $(document).ready(function(){
		$('.owl-carousel-9-1').owlCarousel({
		slideSpeed: 800,
		paginationSpeed: 800,
		smartSpeed: 500,
		autoplay: true,
		singleItem: true,
		loop: true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:1,
					nav:true
				},
				1000:{
					items:1,
					nav:true,
					loop:true
				}
			}
		});
	});
/*  End article 9.1 | End Service */
















/*  Start article 10 | Start Review */
	$(document).ready(function(){
		$('.owl-carousel-2').owlCarousel({
		slideSpeed: 800,
		paginationSpeed: 800,
		smartSpeed: 500,
		autoplay: true,
		singleItem: true,
		loop: true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:2,
					nav:true
				},
				1000:{
					items:3,
					nav:true,
					loop:true
				}
			}
		});
	});
/*  Start article 10 | Start Review */
















/* Start article 11 | Start Product Item */
	  $(document).ready(function(){
		  $('.owl-carousel-3').owlCarousel({
		  navigation: true,
		  pagination: true,
		  slideSpeed: 800,
		  paginationSpeed: 800,
		  smartSpeed: 500,
		  autoplay: true,
		  singleItem: true,
		  loop: true,
			  responsive:{
				  0:{
					  items:1,
					  nav:true
				  },
				  600:{
					  items:2,
					  nav:true
				  },
				  1000:{
					  items:3,
					  nav:true,
					  loop:true
				  }
			  }
		  });
	  });
/*   End article 11 | End Product Item */
















/* Start article 12 | Start My Team */
	  $(document).ready(function(){
		  $('.owl-carousel-4').owlCarousel({
		  navigation: true,
		  pagination: true,
		  dots: true,
		  slideSpeed: 800,
		  paginationSpeed: 800,
		  smartSpeed: 500,
		  autoplay: true,
		  singleItem: true,
		  loop: true,
			  responsive:{
				  0:{
					  items:1,
					  nav:true
				  },
				  600:{
					  items:1,
					  nav:true
				  },
				  1000:{
					  items:1,
					  nav:true
				  }
			  }
		  });
	  });
/*   End article 12 | End My Team */
































/* Start article 20 | Start Portfolio */
	  $('#inline-popups,#inline-popups-2,#inline-popups-3,#inline-popups-4,#inline-popups-5,#inline-popups-6').magnificPopup({
		  delegate: 'a',
		  removalDelay: 450,
		  callbacks: {
			  beforeOpen: function() {
				  this.st.mainClass = this.st.el.attr('data-effect');
			  }
		  },
		  midClick: true
	  });
/*  End article 20 | End Portfolio */
















/* Start article 21 | Start Gallery */
	  $(document).ready(function() {
		  $('.popup-item').magnificPopup({
			  type: 'image',
			  gallery: {
				  enabled: true
			  },
		  });
	  });
/*  End article 21 | End Gallery */
















/*  Start Article 23 | Start Js For Circle Progress Bar  */
	$(function(){

		$('svg.radial-progress').each(function( index, value ) { 
			$(this).find($('circle.complete')).removeAttr( 'style' );
		});

		$(window).scroll(function(){
			$('svg.radial-progress').each(function( index, value ) { 
				if ( 
					$(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
					$(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
				) {
					percent = $(value).data('percentage');
					radius = $(this).find($('circle.complete')).attr('r');
					circumference = 2 * Math.PI * radius;
					strokeDashOffset = circumference - ((percent * circumference) / 100);
					$(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 2950);
				}
			});
		}).trigger('scroll');

	});
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();


/*   End Article 23 | End Js For Circle Progress Bar */
















/* Stert Article 24 | Start Animation Headline */
	jQuery(document).ready(function($){
		var animationDelay = 2500,
			barAnimationDelay = 3800,
			barWaiting = barAnimationDelay - 3000,
			lettersDelay = 50,
			typeLettersDelay = 150,
			selectionDuration = 500,
			typeAnimationDelay = selectionDuration + 800,
			revealDuration = 600,
			revealAnimationDelay = 1500;
		
		initHeadline();
		
	
		function initHeadline() {
			singleLetters($('.cd-headline.letters').find('b'));
			animateHeadline($('.cd-headline'));
		}
	
		function singleLetters($words) {
			$words.each(function(){
				var word = $(this),
					letters = word.text().split(''),
					selected = word.hasClass('is-visible');
				for (i in letters) {
					if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
					letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
				}
				var newLetters = letters.join('');
				word.html(newLetters).css('opacity', 1);
			});
		}
	
		function animateHeadline($headlines) {
			var duration = animationDelay;
			$headlines.each(function(){
				var headline = $(this);
				
				if(headline.hasClass('loading-bar')) {
					duration = barAnimationDelay;
					setTimeout(function(){ headline.find('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
				} else if (headline.hasClass('clip')){
					var spanWrapper = headline.find('.cd-words-wrapper'),
						newWidth = spanWrapper.width() + 10
					spanWrapper.css('width', newWidth);
				} else if (!headline.hasClass('type') ) {
					var words = headline.find('.cd-words-wrapper b'),
						width = 0;
					words.each(function(){
						var wordWidth = $(this).width();
						if (wordWidth > width) width = wordWidth;
					});
					headline.find('.cd-words-wrapper').css('width', width);
				};
				setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
			});
		}
	
		function hideWord($word) {
			var nextWord = takeNext($word);
			
			if($word.parents('.cd-headline').hasClass('type')) {
				var parentSpan = $word.parent('.cd-words-wrapper');
				parentSpan.addClass('selected').removeClass('waiting');	
				setTimeout(function(){ 
					parentSpan.removeClass('selected'); 
					$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
				}, selectionDuration);
				setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
			
			} else if($word.parents('.cd-headline').hasClass('letters')) {
				var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
				hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
				showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);
	
			}  else if($word.parents('.cd-headline').hasClass('clip')) {
				$word.parents('.cd-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
					switchWord($word, nextWord);
					showWord(nextWord);
				});
	
			} else if ($word.parents('.cd-headline').hasClass('loading-bar')){
				$word.parents('.cd-words-wrapper').removeClass('is-loading');
				switchWord($word, nextWord);
				setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
				setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
	
			} else {
				switchWord($word, nextWord);
				setTimeout(function(){ hideWord(nextWord) }, animationDelay);
			}
		}
	
		function showWord($word, $duration) {
			if($word.parents('.cd-headline').hasClass('type')) {
				showLetter($word.find('i').eq(0), $word, false, $duration);
				$word.addClass('is-visible').removeClass('is-hidden');
	
			}  else if($word.parents('.cd-headline').hasClass('clip')) {
				$word.parents('.cd-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
					setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
				});
			}
		}
	
		function hideLetter($letter, $word, $bool, $duration) {
			$letter.removeClass('in').addClass('out');
			
			if(!$letter.is(':last-child')) {
				 setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);  
			} else if($bool) { 
				 setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
			}
	
			if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
				var nextWord = takeNext($word);
				switchWord($word, nextWord);
			} 
		}
	
		function showLetter($letter, $word, $bool, $duration) {
			$letter.addClass('in').removeClass('out');
			
			if(!$letter.is(':last-child')) { 
				setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration); 
			} else { 
				if($word.parents('.cd-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('waiting'); }, 200);}
				if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
			}
		}
	
		function takeNext($word) {
			return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
		}
	
		function takePrev($word) {
			return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
		}
	
		function switchWord($oldWord, $newWord) {
			$oldWord.removeClass('is-visible').addClass('is-hidden');
			$newWord.removeClass('is-hidden').addClass('is-visible');
		}
	});
/* End Article 24 | End Animation Headline */
















/*  Start article 28 | Start Logo */
	  $(document).ready(function(){
		$('.owl-carousel-28').owlCarousel({
		slideSpeed: 800,
		paginationSpeed: 800,
		smartSpeed: 500,
		autoplay: true,
		singleItem: true,
		loop: true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				375:{
					items:2,
					nav:true
				},
				768:{
					items:3,
					nav:true,
					loop:true
				},
				1024:{
					items:4,
					nav:true,
					loop:true
				},
				1440:{
					items:5,
					nav:true,
					loop:true
				}
			}
		});
	});
/*  End article 28 | End Logo */










/*	Start Root */
AOS.init({
	easing: 'ease-out-back',
	duration: 1700
});
jQuery(document).ready(function( $ ) {
	$('.counter').counterUp({
		delay: 10,
		time: 500
	});
});
/*	End Root  */