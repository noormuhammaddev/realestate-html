$(document).ready(() => {
  $('.custom-dropdown ul li').on('click', () => {
    const selectedItem = $(this).text();
    console.log('clicked ', selectedItem);
  })
})