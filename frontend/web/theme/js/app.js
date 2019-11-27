
function validateFormLogin(){
  
  var fulName = $('input:text[name=txtFullName]').val();
  var cellPhone = $('input:text[name=txtCellPhone]').val();
  var address = $('input:text[name=txtAddress]').val();
  var check = fasle;
  var strRegex =  new RegExp("(09|01[2|6|8|9])+([0-9]{8})\b");
  var regexCellPhone = strRegex.test(cellPhone);
  console.log(fullName,cellPhone,address);
  return false;
  exit();
  // if(cellPhone ==''){
  //   $('#confirmCellPhone').show();
  //   check = false;
  // }else{
  //     $('#confirmCellPhone').hide();
  //     check = true;
  // }
  // if(fulName ==''){
  //     $('#confirmFullName').show();
  //     check = false;
  // }else{
  //     $('#confirmFullName').hide();
  //     check = true;
  // }
  // if(address =='' && regexCellPhone == false){
  //   $('#confirmAddress').show();
  //   check = false;
  // }else{
  //     $('#confirmAddress').hide();
  //     check = true;
  // }
  // if(check == true){
  //     $('#formLogin').submit();
  // }
}
var app = {
  // Application Constructor
  init: function() {

  },
  // Bind Event Listeners
  //
  // Bind any events that are required on startup. Common events are:
  // 'load', 'deviceready', 'offline', and 'online'.

  buildSliderProduct: function() {
    var owlNews = $(".slider_p");
    owlNews.owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      lazyLoad: true,
      nav: false,
      dots: false,
      responsive: {
        0: {
          items: 2,
          nav: true
        },
        600: {
          items: 3,
          nav: true
        },
        1000: {
          items: 4,
          nav: true
        },
        1600: {
          items: 5,
          nav: true,
          margin: 0
        }
      }
    });
    $(".nextBtnNews").click(function() {
      owlNews.trigger("next.owl.carousel");
    });
    $(".previousNews").click(function() {
      owlNews.trigger("prev.owl.carousel");
    });
  },
  buildSliderCustomer: function() {
    // check onrisize buld vinahome icon
    $(window).resize(function() {
      var cw = $(".vinahome").width();
      $(".vinahome").css({ height: cw + "px" });
    });

    //build slider customer
    $(".slider_customers").owlCarousel({
      items: 3,
      smartSpeed: 450,
      autoplayHoverPause: true,
      loop: true,
      margin: 35,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 4000,
      responsive: {
        0: {
          items: 1,
          nav: true,
          margin: 35,
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  },
  buildSliderNews: function() {
    $(".slide-select-services-now").owlCarousel({
      items: 1,
      // animateOut: 'fadeOut',
      loop: true,
      margin: 15,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 400000,
      autoplayHoverPause: true,
      smartSpeed: 250,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 3,
          nav: true
        },
        1600: {
          items: 5,
          nav: true
        }
      }
    });
  },
  buildSliderBanner: function() {
  
    var owlBanner = $(".slider_banner");
    owlBanner.owlCarousel({
      loop: true,
      items: 1,
      margin: 0,
      responsiveClass: true,
      lazyLoad: true,
      nav: false,
      dots: false,
    });
    $(".nextBtnNews").click(function() {
      owlBanner.trigger("next.owl.carousel");
    });
    $(".previousNews").click(function() {
      owlBanner.trigger("prev.owl.carousel");
    });


  }

};
