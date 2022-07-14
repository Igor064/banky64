$('.product-item__photo-sliderMin').each(function(){
    $(this).slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      verticalSwiping: true,
      vertical: true,
      prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
      nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
      lazyLoad: 'ondemand',
      asNavFor: $(this).parents('.product-item__photo').find('.product-item__photo-slider'),
      responsive: [
            {
              breakpoint: 900,
              settings: {
                verticalSwiping: false,
                vertical: false,
              }
            },
          ]
    });
  })

  $('.product-item__photo-slider').each(function(){
    $(this).slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      lazyLoad: 'ondemand',
      fade: true,
      asNavFor: $(this).parents('.product-item__photo').find('.product-item__photo-sliderMin')
    });
  })

  $('.header__burger').on('click', function(){
    $(this).toggleClass('active');
    $('.mobile-nav').slideToggle()
  })

  $('.gallery-load').on('submit', function(e){
    e.preventDefault();
    var form = new FormData(this);
    var url = $(this).attr('action');
    $('#pNum').val(Number($('#pNum').val()) + 1)
      $.ajax({
          url: url,
          data: form,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function (response) {
            $('.gallery__content').append(response)
          }
      });
  })

  $(window).on('mousemove',function(e){
    var width=$(window).width(),
      height=$(window).height(),
      offsetX=0.25-e.pageX/width,
      offsetY=0.25-e.pageY/height,
      $parallaxItem=$('.parallax');
    $parallaxItem.each(function(i,el){
      var offset=parseInt($(el).data('offset')),       
      translate="translate3d("+Math.round(offsetX*offset)+"px,"+Math.round(offsetY*offset)+"px,0px)";
      console.log(offset);
      $(el).css({
        '-webkit-transform':translate,
        'transform':translate,
        '-moz-transform':translate
      });
    });
  });

  $('button[data-subject]').on('click', function(){
    $('#form-p').fadeIn();
    $('#form-subject').val($(this).data('subject'));
  })

  $('.popup-wrap, .close').on('click', function(e){
    if (e.target == this){
      $(this).closest('.popup').fadeOut();
    }
  })

  $('a[href="#policy"]').on('click', function(e){
    e.preventDefault();
    $('#popup-policy').fadeIn();
  })