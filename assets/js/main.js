// ========================================================================================================================
// my set Up
//Safari Back Reload
window.onpageshow = function (event) {
  if (event.persisted) {
    // window.location.reload();
    $('body').addClass('ready');
  }
};

//Detect Responsive
function smartDevice() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function isIos() {
  return /iPhone|iPad|iPod/i.test(navigator.userAgent);
}

function ie() {
  if (document.documentMode || /Edge/.test(navigator.userAgent)) {
    return true;
  } else {
    return false;
  }
}

function minXS() {
  return Modernizr.mq('(min-width: 0px)');
}

function minSM() {
  return Modernizr.mq('(min-width: 321px)');
}

function minMD() {
  // return Modernizr.mq('(min-width: 426px)');
  return Modernizr.mq('(min-width: 641px)');
}

function minMDLG() {
  return Modernizr.mq('(min-width: 835px)');
}

function minLG() {
  return Modernizr.mq('(min-width: 1281px)');
}

function minXL() {
  return Modernizr.mq('(min-width: 1441px)');
}

function minXXL() {
  return Modernizr.mq('(min-width: 1601px)');
}

function maxXS() {
  return Modernizr.mq('(max-width: 320px)');
}

function maxSM() {
  // return Modernizr.mq('(max-width: 425px)');
  return Modernizr.mq('(max-width: 640px)');
}

function maxMD() {
  return Modernizr.mq('(max-width: 834px)');
}

function maxMDLG() {
  return Modernizr.mq('(max-width: 1280px)');
}

function maxLG() {
  return Modernizr.mq('(max-width: 1440px)');
}

CustomEase.create("cubic_bezier", "0.4, 0, 0.2, 1");

// end my Set Up
// ========================================================================================================================

// LAZY LOADING
function lazyload() {
  var lazyImages = [].slice.call(document.querySelectorAll("img[data-hiResImg]"));
  var lazyVideos = [].slice.call(document.querySelectorAll("video[data-lazyVideo]"));

  if ("IntersectionObserver" in window) {
    // Lazy images
    var lazyImageObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {

          var lazyImage = entry.target;
          var dataImgHiRes = new Image;
          var hiResImgPath = $(lazyImage).attr('data-hiResImg');
          dataImgHiRes.src = hiResImgPath;

          $(dataImgHiRes).imagesLoaded().progress(function (instance, image) {
            var result = image.isLoaded ? 'loaded' : 'broken';
            if (result == "loaded") {
              lazyImageObserver.unobserve(lazyImage);
              lazyImage.src = hiResImgPath;
              $(lazyImage).addClass('loaded');

              setTimeout(function () {
                $(lazyImage).removeAttr('data-hiResImg');
              }, 3000);



            } else {
              lazyImageObserver.unobserve(lazyImage);
              $(lazyImage).addClass("imgBroken");
            }
          });
        }
      });
    });

    lazyImages.forEach(function (lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });

    // Lazy videos
    var lazyVideoObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.load();
          entry.target.addEventListener('loadeddata', function (event) {
            lazyVideoObserver.unobserve(entry.target);

            vid = $(entry.target)[0];
            vid.muted = true;
            vid.currentTime = 0;
            vid.pause();

            $(entry.target).addClass('loaded');

            setTimeout(function () {
              $(entry.target).removeAttr('data-lazyVideo');
            }, 3000);

            // add scroll trigger to stop play when outside view
            ScrollTrigger.create({
              trigger: $(entry.target),
              start: "top 100%",
              end: "bottom 0%",
              invalidateOnRefresh: true,
              onEnter: function (self) {
                vid = $(self.trigger)[0];
                var playPromise = vid.play(); if (playPromise !== undefined) { playPromise.then(_ => { }).catch(error => { }); };
              },
              onEnterBack: function (self) {
                vid = $(self.trigger)[0];
                var playPromise = vid.play(); if (playPromise !== undefined) { playPromise.then(_ => { }).catch(error => { }); };
              },
              onLeave: function (self) {
                vid = $(self.trigger)[0];
                vid.pause();
              },
              onLeaveBack: function (self) {
                vid = $(self.trigger)[0];
                vid.pause();
              }
            });
          });
        }
      });
    });

    lazyVideos.forEach(function (lazyVideo) {
      lazyVideoObserver.observe(lazyVideo);
    });
  }
}

//added by Tein
//initialize google maps
function initMap() {
  if ($('#gMap').length) {
    var dataLat = $('#gMap').data('lat');
    var dataLong = $('#gMap').data('long');

    var options = {
      zoom: 17,
      center: { lat: dataLat, lng: dataLong },
      styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
    }
    var map = new google.maps.Map(document.getElementById('gMap'), options);

    var marker = new google.maps.Marker({
      position: { lat: dataLat, lng: dataLong },
      map: map
    });
  }
}

$(document).ready(function () {
  lazyload();

  window.almOnLoad = function(){
    lazyload();
  };  

  window.almComplete = function(){
    lazyload();
  };

  if ($('.module-fontVisualizer').length) {
    function fontvisualizer() {
      $('.module-fontVisualizer .rootPx').html(parseInt($('html').css('font-size').replace(/[^-\d\.]/g, '')));
      $('.module-fontVisualizer .viewportPx').html(document.documentElement.clientWidth);

      $('.calcFontSize').each(function (i, el) {
        var thisFontSizePx = parseInt($(el).css('font-size').replace(/[^-\d\.]/g, ''));
        var rootSizePx = parseInt($('html').css('font-size').replace(/[^-\d\.]/g, ''));
        var thisFontSizeRem = Math.round((thisFontSizePx / rootSizePx) * 10) / 10;

        $(el).parent().next().find('p').html(thisFontSizePx + 'px/<br>' + thisFontSizeRem + 'rem');
        // $(el).parent().next().next().find('p').html(thisFontSizeRem + 'rem');
      });
    }

    fontvisualizer();

    $(window).resize(function () {
      fontvisualizer();
    });
  }

  if ($('header').length) {
    ScrollTrigger.create({
      trigger: $('body'),
      start: "0%+=100px 0%",
      end: "0%+=100px 0%",
      invalidateOnRefresh: true,
      onUpdate: function (self) {
        if (self.direction == 1) {
          $('header').addClass('scrolled');
        } else {
          $('header').removeClass('scrolled');
        }
      }
    });

    var lastBodyScrollDirection = 1;
    ScrollTrigger.create({
      trigger: $('body'),
      invalidateOnRefresh: true,
      onUpdate: function (self) {
        if (lastBodyScrollDirection != self.direction) {
          if (self.direction == -1) {
            lastBodyScrollDirection = self.direction;
            $('header').addClass('scrolledUp');
          } else {
            lastBodyScrollDirection = self.direction;
            $('header').removeClass('scrolledUp');
          }
        }
      }
    });

    // disabled links with sub nav
    $('header .mainNavWrap a[href=""]').on('click', function (e) {
      e.preventDefault();
    });

    //Sub nav functions
    hoverReady = false;
    $('body').mousemove(function () {
      hoverReady = true;
    });

    function closeSubNav() {
      $('header .mainNavWrap .rightWrap .eachLink a').removeClass('atSubShow');
      $('header').removeClass('subNavShow');
    }

    $('header .mainNavWrap .rightWrap .eachLink a').on('mouseenter touchstart', function (e) {
      if (minMDLG()) {
        if (hoverReady) {
          id = $(this).attr('data-subNav');
          if (id) {
            $('header .mainNavWrap .rightWrap .eachLink a').removeClass('atSubShow');
            $(this).addClass('atSubShow');
            $('header').addClass('subNavShow');
            $('.subNavWrap .eachSubNav').removeClass('show');
            $('.subNavWrap .eachSubNav[data-subNavFor="' + id + '"]').addClass('show');
          } else {
            closeSubNav();
          }
          e.stopPropagation();
        }
      }
    });

    $('header .mainNavWrap .rightWrap .eachLink a').on('click', function (e) {
      if (minMDLG()) {
        if (hoverReady) {
          id = $(this).attr('data-subNav');
          if (id) {
            $('header .mainNavWrap .rightWrap .eachLink a').removeClass('atSubShow');
            $(this).addClass('atSubShow');
            $('header').addClass('subNavShow');
            $('.subNavWrap .eachSubNav').removeClass('show');
            $('.subNavWrap .eachSubNav[data-subNavFor="' + id + '"]').addClass('show');
          } else {
            closeSubNav();
          }
          e.stopPropagation();
        }
      }
    });

    $('header .subNavWrap .overflowWrap').on('mouseleave', function () {
      if (minMDLG()) {
        closeSubNav();
      }
    });

    // mob nav
    function closeMobNav() {
      $('header .mainNavWrap .leftWrap').removeClass('toggleMobSubNavBackBtn');
      $('.burgWrap .burgBtn').removeClass('active');
      $('header').removeClass('toggleMobNav');
    }

    function openMobNav() {
      // reset mob sub nav       
      $('header .mobNavWrap .mobMainNav, header .mobNavWrap .eachMobSubNav').removeClass('show');
      $('header .mobNavWrap .mobMainNav').addClass('show');
      $('header .mobNavWrap').scrollTop(0);

      // open mob nav
      $('.burgWrap .burgBtn').addClass('active');
      $('header').addClass('toggleMobNav');
    }

    $('.burgWrap .burgBtn').click(function () {
      if ($(this).hasClass('active')) {
        closeMobNav();
      } else {
        $('header').removeClass('startedScroll');
        openMobNav();
      }
    });

    // mob sub nav
    $('header .mobNavWrap .mobMainNav a').on('click', function (e) {
      id = $(this).attr('data-subNav');
      if (id) {
        // toggle logo to back button
        $('header .mainNavWrap .mobSubNavBackBtn').html(id);
        $('header .mainNavWrap .leftWrap').addClass('toggleMobSubNavBackBtn');

        // show selected sub nav
        var mobSubNavtransition = gsap.timeline({});
        mobSubNavtransition.to($('header .mobNavWrap .show'), 0.3, {
          x: "-25", opacity: 0, ease: "cubic_bezier",
          onComplete: function () {
            $(this.targets()[0]).removeClass('show');
            gsap.set($(this.targets()[0]), { clearProps: 'all' });
            $('header .mobNavWrap .eachMobSubNav[data-subNavFor="' + id + '"]').addClass('show');
          }
        })
        mobSubNavtransition.from($('header .mobNavWrap .eachMobSubNav[data-subNavFor="' + id + '"]'), 0.3, {
          x: "25%", opacity: 0, ease: "cubic_bezier",
          onComplete: function () {
            gsap.set($(this.targets()[0]), { clearProps: 'all' });
          }
        });
      }
      e.stopPropagation();
    });

    // mob sub nav back
    $('header .mainNavWrap .leftWrap .mobSubNavBackBtn').on('click', function (e) {
      // toggle logo to back button
      $('header .mainNavWrap .leftWrap').removeClass('toggleMobSubNavBackBtn');

      // show mob main nav
      var mobSubNavtransition = gsap.timeline({});
      mobSubNavtransition.to($('header .mobNavWrap .show'), 0.3, {
        x: "-25", opacity: 0, ease: "cubic_bezier",
        onComplete: function () {
          $(this.targets()[0]).removeClass('show');
          gsap.set($(this.targets()[0]), { clearProps: 'all' });
          $('header .mobNavWrap .mobMainNav').addClass('show');
        }
      })
      mobSubNavtransition.from($('header .mobNavWrap .mobMainNav'), 0.3, {
        x: "25%", opacity: 0, ease: "cubic_bezier",
        onComplete: function () {
          gsap.set($(this.targets()[0]), { clearProps: 'all' });
        }
      });
    });

    // resize reset all toggled nav
    $(window).resize(function () {
      closeSubNav();
      closeMobNav();
    });
  }

  // search slide toggle
  if ($('.module-topSearchBarWrap').length) {
    // search bar 
    $('.openSearchBarBtn').click(function () {
      $('.module-topSearchBarWrap').addClass('toggle');
      $('.searchNav')[0].reset();
    });

    $('.module-topSearchBarWrap .closeBtn').click(function () {
      $('.module-topSearchBarWrap').removeClass('toggle');
    });
  }

  // copy to clip board
  // if ($('.module-secondaryHeader').length) {
    function copyLink(url) {
      var dummy = document.createElement('input'),
        text = url;

      document.body.appendChild(dummy);
      dummy.value = text;
      dummy.select();
      document.execCommand('copy');
      document.body.removeChild(dummy);
    }

    $('.toClipboardBtn').click(function (e) {
      copyLink($(this).attr('data-copyThisUrl'));
    });
  // }

  // secondary header and progress bar
  if ($('.module-secondaryHeader').length) {
    // secondary header scroll trigger
    ScrollTrigger.create({
      trigger: $('body'),
      start: "0%+=100px 0%",
      end: "0%+=100px 0%",
      invalidateOnRefresh: true,
      onUpdate: function (self) {
        if (self.direction == 1) {
          $('.module-secondaryHeader').addClass('show');
        } else {
          $('.module-secondaryHeader').removeClass('show');
        }
      }
    });

    ScrollTrigger.create({
      trigger: $('footer'),
      start: "0% 100%",
      end: "0% 100%",
      invalidateOnRefresh: true,
      onUpdate: function (self) {
        if (self.direction == 1) {
          $('.module-secondaryHeader').removeClass('show');
        } else {
          $('.module-secondaryHeader').addClass('show');
        }
      }
    });

    function updateProgressBar() {
      var winheight = window.innerHeight;
      var docheight = document.body.clientHeight - $('footer').outerHeight();
      var scrollTop = $(document).scrollTop()
      var trackLength = docheight - winheight
      var pctScrolled = Math.floor(scrollTop / trackLength * 100) // gets percentage scrolled (ie: 80 NaN if tracklength == 0)
      gsap.to($('.progressBar .bar'), 0.1, {
        width: pctScrolled + '%',
        ease: Linear.easeNone
      });
    }
    $(window).on('scroll', function () {
      updateProgressBar();
    })
    updateProgressBar();

    var lastScrollTop = 0;
    document.addEventListener("scroll", function () {
      var st = window.pageYOffset || document.documentElement.scrollTop;
      if (st > lastScrollTop) {
        if ($('header, .module-secondaryHeader').hasClass('scrolledUp')) {
          $('header, .module-secondaryHeader').removeClass('scrolledUp');
        }
      } else {
        if (!$('header, .module-secondaryHeader').hasClass('scrolledUp')) {
          $('header, .module-secondaryHeader').addClass('scrolledUp');
        }
      }
      lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
    }, false);
  }

  // side anchor link and secondary header mob drop down
  if ($('.module-secondaryHeader .navWrapMob').length && $('[data-anchorId]').length) {
    var closeNavWrapMob;
    $('[data-anchorId]').each(function (i, el) {
      if ($(el).attr('data-anchorId') && $(el).attr('data-anchorTitle')) {
        var anchorTitle = $(el).attr('data-anchorTitle');


        var atNav = "";
        if (i == 0) {
          atNav = "atNav";
        }

        // append nav
        if ($(el).attr('data-anchorId') != '') {
          // mobile secondary
          $('.module-secondaryHeader .navWrapMob').append('<div class="eachNav ' + atNav + '" data-secnavid="' + $(el).attr('data-anchorId') + '"><div><small class="anchorLink">' + anchorTitle + '</small></div></div>');
          // side nav
          $('.module-singleArticleBodyWithSideNav .sideNavWrap').append('<p class="anchorLink" data-secNavId="' + $(el).attr('data-anchorId') + '"><a class="hoverEffect_dim">' + anchorTitle + '</a></p>');
        }

        // at nav 
        ScrollTrigger.create({
          trigger: el,
          start: "-1% 0%",
          end: "100% 0%",
          // invalidateOnRefresh: true,
          onEnter: function (self) {
            anchorid = $(self.trigger).attr('data-anchorid');
            $('.module-singleArticleBodyWithSideNav .sideNavWrap .anchorLink, .module-secondaryHeader .navWrapMob .eachNav').removeClass('atNav');
            $('.module-singleArticleBodyWithSideNav .sideNavWrap .anchorLink[data-secnavid="' + anchorid + '"], .module-secondaryHeader .navWrapMob .eachNav[data-secnavid="' + anchorid + '"]').addClass('atNav');
          },
          onLeaveBack: function (self) {
            anchorid = $(self.trigger).attr('data-anchorid');
            $('.module-singleArticleBodyWithSideNav .sideNavWrap .anchorLink').removeClass('atNav');
            $('.module-singleArticleBodyWithSideNav .sideNavWrap .anchorLink[data-secnavid="' + anchorid + '"]').prevAll('p:first').addClass('atNav');

            if ($('.module-secondaryHeader .navWrapMob .eachNav[data-secnavid="' + anchorid + '"]').prev().hasClass('eachNav')) {
              $('.module-secondaryHeader .navWrapMob .eachNav').removeClass('atNav');
              $('.module-secondaryHeader .navWrapMob .eachNav[data-secnavid="' + anchorid + '"]').prev().addClass('atNav');
            }
          },
        });
      }
    });

    // mobile secondary header anchor nav
    closeNavWrapMob = function () {
      if ($('.module-secondaryHeader .navWrapMob').hasClass('toggle')) {
        $('.navWrapMob').removeClass('active');
        $('.module-secondaryHeader .navWrapMob').removeClass('toggle');
        gsap.to($('.module-secondaryHeader .navWrapMob .eachNav:not(.atNav)'), 0.6, {
          height: 0,
          opacity: 0,
          ease: Power4.easeOut,
          onComplete: function () {
            gsap.set($('.module-secondaryHeader .navWrapMob .eachNav:not(.atNav)'), {
              clearProps: 'all'
            });
            $('.module-secondaryHeader .navWrapMob .eachNav').removeClass('toggled');
          }
        });
      }
    };

    $('.module-secondaryHeader .navWrapMob').click(function () {
      if (!$(this).hasClass('toggle')) {
        $(this).addClass('toggle');
        $('.navWrapMob').addClass('active');

        $el = $('.module-secondaryHeader .navWrapMob .eachNav');
        h = $el.children('div').outerHeight();
        gsap.to($el, 0.6, {
          height: h,
          opacity: 1,
          ease: Power4.easeOut,
          onComplete: function () {
            gsap.set($el, {
              clearProps: 'all'
            });
            $el.addClass('toggled');
          }
        });
      } else {
        closeNavWrapMob();
      }
    });

    $('.module-secondaryHeader .navWrapMob').on('click', '.anchorLink', function () {
      if ($('.module-secondaryHeader .navWrapMob').hasClass('active')) {
        id = $(this).parents('.eachNav').attr('data-secNavId');
        $('.module-secondaryHeader .navWrapMob .eachNav').removeClass('atNav');
        $('.module-secondaryHeader .navWrapMob .eachNav[data-secnavid="' + id + '"]').addClass('atNav');
        var offset = 0;
        $('html, body').animate({
          scrollTop: $('[data-anchorid="' + id + '"]').offset().top
        }, 700);
      }
    });

    $('.module-singleArticleBodyWithSideNav .sideNavWrap').on('click', '.anchorLink a', function () {
      id = $(this).parents('.anchorLink').attr('data-secNavId');
      $('.module-secondaryHeader .navWrapMob .eachNav').removeClass('atNav');
      $('.module-secondaryHeader .navWrapMob .eachNav[data-secnavid="' + id + '"]').addClass('atNav');
      var offset = 0;
      $('html, body').animate({
        scrollTop: $('[data-anchorid="' + id + '"]').offset().top
      }, 700);
    });

    $(document).mouseup(e => {
      if (!$('.module-secondaryHeader .navWrapMob').is(e.target) && $('.module-secondaryHeader .navWrapMob').has(e.target).length === 0) {
        closeNavWrapMob();
      }
    });

    // stick side nav
    ScrollTrigger.create({
      trigger: $('.module-singleArticleBodyWithSideNav .sticky'),
      pin: $('.module-singleArticleBodyWithSideNav .sticky .sideNavWrap'),
      anticipatePin: 1,
      pinSpacing: false,
      invalidateOnRefresh: true,
      start: "50% 50%",
      endTrigger: ".module-singleArticleBodyWithSideNav + .module-faq",
      // end: "bottom bottom",
      end: "top bottom",
    });
  }

  // owl top fold
  if ($('.module-2ColImgTextOwl').length) {
    $('.module-2ColImgTextOwl').each(function (i, thisModuleowl2ColImgTextOwl) {
      var owl2ColImgTextOwl = $(thisModuleowl2ColImgTextOwl).find('.owl2ColImgTextOwl');
      var $owlCustomTimedDots = $(thisModuleowl2ColImgTextOwl).find('.owlCustomTimedDots');
      var tlCounter;

      // populate dots
      $dotsWrap = $($owlCustomTimedDots).find('.dotsWrap');
      $(owl2ColImgTextOwl).children().each(function () {
        $($dotsWrap).append('<div class="dot"><span></span></div>');
      });
      var dotSize = $(thisModuleowl2ColImgTextOwl).find('.owlCustomTimedDots .dot:first-of-type').outerWidth();

      owl2ColImgTextOwl.owlCarousel({
        margin: 1,
        items: 1,
        loop: true,
        dots: true,
        mouseDrag: true,
        touchDrag: true,
        onInitialized: function () {
          startCountingAnim(1);
        },
        onChanged: function (e) {
          if (e.page.index >= 0) {
            var i = e.page.index + 1;
            tlCounter.kill();
            startCountingAnim(i);
          };
        },
        onTranslated: function (e) {
          lazyload();
        },
        onDrag: function (e) {
          tlCounter.kill();
        },
      });

      owl2ColImgTextOwl.on('touchstart mousedown', function (e) {
        tlCounter.pause();
      });

      owl2ColImgTextOwl.on('touchend mouseup', function (e) {
        tlCounter.play();
      });

      function startCountingAnim(i) {
        var dur = 7;

        gsap.set($($owlCustomTimedDots).find('.dot span'), { clearProps: "all" });
        tlCounter = gsap.timeline({
          onComplete: function () {
            owl2ColImgTextOwl.trigger('next.owl.carousel');
          }
        });
        tlCounter.to($($owlCustomTimedDots).find('.dot'), 0.3, { width: dotSize, ease: "cubic_bezier" }, 0);
        tlCounter.fromTo($($owlCustomTimedDots).find('.dot:nth-of-type(' + i + ') span'), { width: '0%' }, { width: '100%', duration: dur, ease: "linear" }, 0);

        $($owlCustomTimedDots).find('.dot').removeClass('active');
        $($owlCustomTimedDots).find('.dot:nth-of-type(' + i + ')').addClass('active');
      }

      $($owlCustomTimedDots).find('.dot').on('click', function () {
        if (!$(this).hasClass('active')) {
          owl2ColImgTextOwl.trigger('to.owl.carousel', $(this).index());
        }
      })
    });
  }

  // START - Tein added contact form functions 13Jan2023  
  // Textarea auto grow
  if ($('.wpcf7-form').length) {
    var cf7 = document.querySelector('.wpcf7-form');
    cf7.querySelectorAll('textarea').forEach(function (element) {
      element.style.boxSizing = 'border-box';
      var offset = element.offsetHeight - element.clientHeight;
      element.addEventListener('input', function (event) {
        event.target.style.height = 'auto';
        event.target.style.height = ((event.target.scrollHeight + offset) + 1) + 'px';
      });

      var resizeW_textarea = $(window).width();
      $(window).on('resize', function () {
        if ($(this).width() !== resizeW_textarea) {
          resizeW_textarea = $(this).width();
          clearTimeout(window.accordionResize);
          window.accordionResize = setTimeout(function () {
            element.style.height = 'auto';
            element.style.height = ((element.scrollHeight + offset) + 1) + 'px';
          }, 200);
        }
      });

    });

    //cf7 validation and submission  
    function checkStr(str) {
      return (!str || str.length === 0 || /^\s*$/.test(str))
    }

    function validateEmail(mail) {
      if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail)) {
        return (true)
      }
      return (false)
    }

    $('.wpcf7').each(function (i, el) {

      el.addEventListener('wpcf7mailsent', function (event) {

        var tl = new TimelineMax();
        tl.to(".enquiryForm", 1, { opacity: 0, display: "none" })
          .to(".successMsg", 1, { opacity: 1, display: "block" });
        console.log("email sent");
      });

    }, false);
  }
  // END Tein added 13Jan2023  

  // get in touch fixed button hover animation
  $('.fixedBtn__normal').on('click', function () {
    if ($('.fixedBtn__inner').hasClass('fixedBtn__inner--hidden')) {
      $('.fixedBtn__inner').removeClass('fixedBtn__inner--hidden');
      $('.fixedBtn__inner').addClass('fixedBtn__inner--open');
    } else {
      $('.fixedBtn__inner').removeClass('fixedBtn__inner--open');
      $('.fixedBtn__inner').addClass('fixedBtn__inner--hidden');
    }
  })

  // $('.fixedBtn__inner').on('mouseleave', function(){
  //   if( $(this).hasClass('fixedBtn__inner--open') ){
  //     $('.fixedBtn__inner').removeClass('fixedBtn__inner--open');
  //     $('.fixedBtn__inner').addClass('fixedBtn__inner--hidden');
  //   }
  // })

  // insights sticky
  if ($('#insights__card--sticky').length > 0) {
    let p = $('#insights__card--sticky').offset();

    $(window).on('resize', function () {
      p = $('#insights__card--sticky').offset();
    });

    const offsetX = 30;

    $(window).on('scroll', function () {
      if (window.innerWidth > 1280) {
        var w = $('#insights__card--sticky').parent().width();
        var h = $('#insights__card--sticky').height();
        var sh = $('#insights-section').height();
        var sp = $('#insights-section').offset()

        if ($(window).scrollTop() + offsetX > p.top) {
          if ($(window).scrollTop() + h > sh + sp.top) {
            $('#insights__card--sticky').css({
              "position": "absolute",
              "top": 'auto',
              "bottom": '0',
              "left": '15px',
              "width": w + 'px'
            });
          } else {
            $('#insights__card--sticky').css({
              "position": "fixed",
              "top": offsetX + 'px',
              "bottom": 'auto',
              "left": p.left + 'px',
              "width": w + 'px'
            });
          }
        } else {
          $('#insights__card--sticky').removeAttr('style');
        }
      }
    });
  }

  //logo list hover stop
  $('.logo-list__item a').on('mouseenter', function () {
    $('.logo-list__marquee').addClass('logo-list__marquee--pause');
  }).on('mouseleave', function () {
    $('.logo-list__marquee').removeClass('logo-list__marquee--pause');
  })

  //collapse
  $('.grid-list__tite h2').on('click', function () {
      let pElem = $(this).parent().parent();
      if ($(pElem).hasClass('grid-list__group--closed')) {
        $(pElem).removeClass('grid-list__group--closed');
        $('.grid-list__row', pElem).slideDown();
      } else {
        $(pElem).addClass('grid-list__group--closed')
        $('.grid-list__row', pElem).slideUp();
      }
  });

  // check default open at concerns.html && treatments.html
  $('div[data-subnavfor="Concerns"] h5 a, div[data-subnavfor="Treatments"] h5 a').on('click', function () {
    closeSubNav();
  });

  $('nav[data-subnavfor="Concerns"] h5 a, nav[data-subnavfor="Treatments"] h5 a').on('click', function () {
    closeMobNav();
  });

  // if( window.location.pathname === '/concerns.html' || window.location.pathname === '/treatments.html' ){
  if (window.location.pathname.includes('/concerns.html') || window.location.pathname.includes('/treatments.html')) {

    function gridOpen() {
      let defaultSection = window.location.hash.substr(1);
      if (defaultSection !== '') {
        jQuery('.grid-list__group').addClass('grid-list__group--closed');
        jQuery('.grid-list__group .grid-list__row').css({ 'display': 'none' });
        jQuery('.grid-list__group[data-grid-cat="' + defaultSection + '"]').removeClass('grid-list__group--closed');
        jQuery('.grid-list__group[data-grid-cat="' + defaultSection + '"] .grid-list__row').removeAttr('style');

        $('html, body').animate({
          scrollTop: $('#' + defaultSection).offset().top
        }, 500);
      } else {
        if (maxMD()) {
          jQuery('.grid-list__group').addClass('grid-list__group--closed');
          jQuery('.grid-list__group .grid-list__row').css({ 'display': 'none' });

          jQuery('.grid-list__group:first-child()').removeClass('grid-list__group--closed');
          jQuery('.grid-list__group:first-child() .grid-list__row').removeAttr('style');          
        }
      }
    }

    gridOpen();

    window.addEventListener('hashchange', function () {
      gridOpen();
    });
  }

  $('.faq-list__title').on('click', function () {
    if ($(this).hasClass('open')) {
      $('.faq-list__txt', $(this).parent()).slideUp();
      $(this).removeClass('open')
    } else {
      $(this).addClass('open')
      $('.faq-list__txt', $(this).parent()).slideDown();
    }
  })



  $('body').addClass('ready');
});