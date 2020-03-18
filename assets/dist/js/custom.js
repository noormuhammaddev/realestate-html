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
})