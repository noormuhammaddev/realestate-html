// functions
function tabsShowHide(el){
  const selectedTab = el.attr('id');
  const selectedTabParent = el.parent('ul');
  selectedTabParent.removeClass('tab-buy');
  selectedTabParent.removeClass('tab-rent');
  selectedTabParent.addClass(selectedTab);

  // show hide tabs
  const tabData = jQuery('.tabs-content .tab-data');
  tabData.addClass('d-none');
  jQuery('#' + selectedTab+'-data').removeClass('d-none');
}

// ready function
jQuery(document).ready(() => {
  jQuery('.custom-dropdown ul li').on('click', function() {
    const selectedItem = jQuery(this);
    selectedItem.parents('.custom-dropdown').find('.active-item').text(selectedItem.text());
  });

  jQuery('#tabs li').on('click', function(){
    tabsShowHide(jQuery(this));
  });

  // carousels 
  const hero_carousel = jQuery('#hero-carousel');
  if (hero_carousel.length){
    hero_carousel.owlCarousel({
      loop: true,
      nav: true,
      dots: true,
      responsive:{
        0:{
          items:1
        },
        1000:{
          items:1
        },
        
      }
    });
  }

  // popular properties
  const popular_property = jQuery('#popular-properties');
  if (popular_property.length){
    popular_property.owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      margin: 30,
      responsive:{
        0:{
          items:1
        },
        1000:{
          items:4
        },
        
      }
    });
  }
  
})