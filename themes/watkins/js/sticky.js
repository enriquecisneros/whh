  jQuery(window).scroll(function() {
  if (jQuery(document).scrollTop() > 50) {
  jQuery('#sticktacular').addClass('shrink')
    jQuery('#sticktacular').addClass('navbar-fixed-top');
  } else {
    jQuery('#sticktacular').removeClass('shrink')
    jQuery('#sticktacular').removeClass('navbar-fixed-top');
  }
}); 