// JavaScript Document
(function ($, window) {
	"use strict";
	
	var tap = {};

    tap.properties = {
        windowWidth : '',
        isMobile : false,
        isDesktop : false
    };

    tap.environment = {
        mobileCheck : function() {
            var check = false;
            (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        },

        isTouchDevice : function() {
            return (('ontouchstart' in window)
            || (navigator.MaxTouchPoints > 0)
            || (navigator.msMaxTouchPoints > 0));
        },

        resize : function(){
            tap.siteNavigation.reszie();
            tap.video.resize();
        },

        init: function(){
            var self = tap;

            // window size
            self.properties.windowWidth = $(window).width();

            // device type
            if(self.environment.mobileCheck()){
                self.environment.isMobile = true;
                $('html').addClass('mobile');
            } else {
                self.environment.isDesktop = true;
                $('html').addClass('desktop');
            }

            if(tap.environment.isTouchDevice()){

                $('body').on('click', function(){
                    tap.siteNavigation.closeDropdowns();
                });

                $(window).on('scroll', function(){
                    self.siteNavigation.closeDropdowns();
                });
            }

            // sets up back to top button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            // click event to scroll to top
            $('.back-to-top').click(function(evt){
                evt.preventDefault();
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });

            // submitting forms with buttons or links
            var $allForms = $('.form');
            $allForms.each(function(){
                var $thisForm = $(this);
                $('#submitButton', $thisForm).on('click', function(evt){
                    evt.preventDefault();
                    $thisForm.trigger('submit');
                });
            });
        }
    };

    tap.video = {
        $html: $('.video-frame'),
        frameRatio: 240/433,
        resize: function(){
            var self = this;
            if(tap.properties.windowWidth < 731){
                self.$html.height(self.$html.width() * self.frameRatio);
            } else {
                self.$html.removeAttr('style');
            }
        }
    };

    tap.siteNavigation = {
        $html: $('#site-navigation-list'),
        $htmlMobile: $('nav#mobileNav'),
        reszie: function(){
            var self = this;
            self.$htmlMobile.trigger("close.mm");
            self.closeDropdowns();
        },
        mobile: {
            init: function(){
                tap.siteNavigation.$htmlMobile.mmenu({
                    offCanvas: {
                        position: "right"
                    }
                });
            }
        },
        closeDropdowns: function(){
            var self = this;
            $('.sub-level', self.$html).removeAttr('style');
            $('.isOpen').removeClass('isOpen');
        },
        init: function(){
            var self = this;
            if(self.$html.length > 0){
                var $topLevel = $('> li', self.$html);

                if(tap.environment.isTouchDevice()){

                    // touch devices
                    $topLevel.each(function(){
                        $('> a', $(this)).on('click', function(evt){
                            evt.preventDefault();
                            evt.stopPropagation();

                            var $parentLi = $(this).parents('li'),
                                locationHref = $(this).attr('href');

                            if($('.sub-level', $parentLi).length > 0 ){

                                // has dropdowns
                                if($parentLi.hasClass('isOpen')){
                                    location.assign(locationHref);
                                } else {
                                    self.closeDropdowns();
                                    $('.sub-level', $parentLi).css('display','block');
                                    $parentLi.addClass('isOpen');
                                }

                            } else {

                                // has no dropdowns, so go to url
                                location.assign(locationHref);
                            }
                        });
                    });

                } else {

                    // non touch devices
                    $topLevel.each(function(){
                        $(this).on('mouseenter', function(){
                            $('.sub-level', $(this)).css('display','block');
                        });
                        $(this).on('mouseleave', function(){
                            $('.sub-level', $(this)).css('display','none');
                        });
                    });
                }

                // initiate mobile navigation
                self.mobile.init();
            }
        }
    };

    tap.homepage = {
        header: {
            carousel: {
                $html: $('#header-carousel'),
                $description: $('#carousel-description'),
                init: function(){
                    if(this.$html.length > 0){
                        this.$html.bxSlider({
                            mode: 'fade',
                            auto: true,
                            speed: 1000,
                            autoControls: false,
                            infiniteLoop: true,
                            randomStart: true,
                            controls: false,
                            autoHover: true
                        });
                    }
                }
            }
        },
		
		whatWeDo: {
			$html: $('.carousel-thumbs'),
			$carousel: $('.carousel-bit'),
			$video: $('.video-thumbs'),
			
			init: function(){
				var self = this;
				var $buttons = $('.switcher a', this.$carousel);
				$buttons.on('click', function(evt){
					evt.preventDefault();
					if(!$(this).hasClass('active')){
						var index = $buttons.index($(this));
						$buttons.removeAttr('class');
						$(this).addClass('active');
						self.$html.find('.explanation').removeClass('active');
						self.$html.find('.explanation').eq(index).addClass('active');
					}
				});
			}
		},
		
		bios: {
			$html: $('#bio-stage'),
			
			init: function(){
				var self = this;
				var $buttons = $('.switcher a', this.$html);
				$buttons.on('click', function(evt){
					evt.preventDefault();
					if(!$(this).hasClass('active')){
						var index = $buttons.index($(this));
						$buttons.removeAttr('class');
						$(this).addClass('active');
						self.$html.find('.bio').removeClass('active');
						self.$html.find('.bio').eq(index).addClass('active');
					}
				});
			}
		},

        body: {
            carousel: {
                $html: $('#body-carousel'),
                init: function(){
                    if(this.$html.length > 0){
                        this.$html.bxSlider({
                            auto: false,
                            randomStart: true,
                            autoControls: false,
                            infiniteLoop: true,
                            onSlideAfter: function(){
                                $('.bx-controls-direction a').removeClass('sliding');
                            },
                            onSlideBefore: function(){
                                $('.bx-controls-direction a').addClass('sliding');
                            }
                        });
                    }
                }
            }
        },

        init: function(){
            this.body.carousel.init();
            this.header.carousel.init();
            this.whatWeDo.init();
            this.bios.init();

            // fun stuff :)
            // ========================================================= //
            var addCommas = function(val){
                while (/(\d+)(\d{3})/.test(val.toString())){
                    val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
                }
                return val;
            };

            setInterval(function(){
                var $cups = $('.tea-cups-count');
                var figure = $('.figure', $cups).html(),
                    newFigure;

                figure = figure.replace(/,/g , "");
                newFigure = parseInt(figure)+1;
                newFigure = addCommas(newFigure);

                $('.figure', $cups).html(newFigure);
            }, 300);
            // ========================================================= //
        }

    };

	tap.init = function(){

        // all init
        tap.environment.init();
        tap.homepage.init();
        tap.siteNavigation.init();

        // resize triggers
		$(window).on('resize',function(){
			
			var newWidth = $(window).width(),
                oldWidth = tap.properties.windowWidth;

			if(oldWidth !== newWidth){
                tap.properties.windowWidth = newWidth;
				tap.resize();
			}
		});

        tap.resize();
        $(window).trigger('resize');
	};

    // main resize
    tap.resize = function(){
        tap.environment.resize();
    };

    // main init
	$(document).ready(function(){
		tap.init();
	});

    $(window).load(function(){
        // nowt for now
    });

}(jQuery, window));