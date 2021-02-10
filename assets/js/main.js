//firma logoları carousel
$('#owl-products').owlCarousel({
	loop: true,
	margin: 50,
	nav: false,
	autoplay:true,
	autoplayTimeout:2000,
	autoplayHoverPause:true,
	responsive: {
		0: {
			items: 2
		},
		600:{
			items:3
		},
		768:{
			items:4
		},
		1000: {
			items: 5
		}
	}
});



//kampanya slider
var $owl = $('.campaign-slider');

$owl.children().each( function( index ) {
  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
});

$owl.owlCarousel({
  center: true,
  loop: true,
  items: 3,
  nav:true,
  autoplay:true,
  margin: 20,
  responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});




//bilet plaza popüler şehir carousel
var $owl = $('.owl-carousel');

$owl.children().each( function( index ) {
  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
});

$owl.owlCarousel({
	center: true,
	loop: true,
	items: 3,
	nav:true,
	autoplay:true,
	responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});




$(document).on('click', '.owl-item>div', function() {
  // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
  var $speed = 300;  // in ms
  $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
});



//counter user
$(".counter-user").each(function() {
  var number = $(this).attr("data-to");
  $(this).countTo({
    from: 0,
    to: number,
    speed: 1000,
    refreshInterval: 1,
    formatter: function(number, options) {
      number = number.toFixed(options.decimals);
      number = number.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      return number;
    }
  });
});


//ticket select
$("#ticket-where").select2({
	placeholder: "Select a programming language",
	allowClear: true
});

//ticket select
$("#ticket-towhere").select2({
	placeholder: "Select a programming language",
	allowClear: true
});


//ticket calendar
$('#datepicker').datepicker({
    value: moment().format("DD-MM-YYYY"),
    format: 'dd mmmm yyyy'
});

$('#datepicker2').datepicker({
    value: moment().format("DD-MM-YYYY"),
    format: 'dd mmmm yyyy'
});


//counter select open
var $counterdropdown = $('body');

$counterdropdown.on('click', '[data-dropdown-toggle]', (event) => {
  event.preventDefault();
  var $button =  $(event.target),
      $data = $(event.target).data('dropdownToggle'),
      $dropdown = '#'+ $data;
  
  $('.dropdown-menu:not('+$dropdown+')').hide();
  $('button:not('+$data+')').removeClass('active');
  $($dropdown).toggle();
  $($button).toggleClass("active");
});



//ticket dropdown way
$(function() {
  var list = $('.js-dropdown-list');
  var link = $('.js-link');
  link.click(function(e) {
    e.preventDefault();
    list.slideToggle(200);
  });
  list.find('li').click(function() {
    var text = $(this).html();
    var icon = '';
    link.html(text+icon);
    list.slideToggle(200);
  });
});



// signup click
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container-signup');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



//mobile menu sticky
$(window).scroll(function() {
  if ($(window).scrollTop() > 110 ) {
    $('.sabitmenu').addClass("sticky");
  } else {
    $('.sabitmenu').removeClass( "sticky" );
  } 
});



//hakkımızda menu sticky
$(window).scroll(function() {
  if ($(window).scrollTop() > 80 ) {
    $('.aboutpage-header').addClass("sticky-about");
  } else {
    $('.aboutpage-header').removeClass( "sticky-about" );
  } 
});

//hakkımızda alanı sticky
$(window).scroll(function() {
  if ($(window).scrollTop() > 90 ) {
    $('#aboutus').addClass("sticky-about-text");
  } else {
    $('#aboutus').removeClass( "sticky-about-text" );
  } 
});



//sırala select
$('.sort-filter').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});



//search list tab
$(document).ready(function(){
  
  // Variables
  var clickedTab = $(".search-tabs > .search-tab-active");
  var tabWrapper = $(".tab-content");
  var activeTab = tabWrapper.find(".search-tab-active");
  var activeTabHeight = activeTab.outerHeight();
  
  // Show tab on page load
  activeTab.show();
  
  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);
  
  $(".search-tabs > li").on("click", function() {
    
    // Remove class from search-tab-active tab
    $(".search-tabs > li").removeClass("search-tab-active");
    
    // Add class search-tab-active to clicked tab
    $(this).addClass("search-tab-active");
    
    // Update clickedTab variable
    clickedTab = $(".search-tabs .search-tab-active");
    
    // fade out active tab
    activeTab.fadeOut(200, function() {
      
      // Remove active class all search-tabs
      $(".tab-content > li").removeClass("search-tab-active");
      
      // Get index of clicked tab
      var clickedTabIndex = clickedTab.index();

      // Add class search-tab-active to corresponding tab
      $(".tab-content > li").eq(clickedTabIndex).addClass("search-tab-active");
      
      // update new search-tab-active tab
      activeTab = $(".tab-content > .search-tab-active");
      
      // Update variable
      activeTabHeight = activeTab.outerHeight();
      
      // Animate height of wrapper to new tab height
      tabWrapper.stop().delay(10).animate({
        height: activeTabHeight
      }, 200, function() {
        
        // Fade in search-tab-active tab
        activeTab.delay(10).fadeIn(200);
        
      });
    });
  });
});




//scroll olduğunda oynat
$(window).on("scroll", function() {
   var scrollHeight = $(document).height();
   var scrollPosition = $(window).height() + $(window).scrollTop();
   if (scrollPosition>= 2800) 
   {
    $("#scrollphoneimg").addClass( "active");
   }
   else {
     $("#scrollphoneimg").removeClass( "active");
    }
});


$(window).on("scroll", function() {
   var scrollHeight = $(document).height();
   var scrollPosition = $(window).height() + $(window).scrollTop();
   if (scrollPosition>= 3000) 
   {
    $("#scrollebulteni").addClass( "active");
   }
   else {
     $("#scrollebulteni").removeClass( "active");
    }
});



//tüm filtreler dropdown içinde dropdown
jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".drop-filter-title").click(function () {
        var t = e(this);
        if(t.siblings(".filter-menu-info").hasClass('active')){
          t.siblings(".filter-menu-info").removeClass('active')
        }else{
          t.siblings(".filter-menu-info").addClass('active')
        }
    });
});



//accordion uçak içindeki tab
var tabsFn = (function() {
  
  function init() {
    setHeight();
  }
  
  function setHeight() {
    var $tabPane = $('.tab-fly-panel'),
        tabsHeight = $('.nav-tabs-fly').height();
    
    $tabPane.css({
      height: tabsHeight
    });
  }
    
  $(init);
})();


