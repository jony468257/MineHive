(async function () {
    let svgPlus = `<i class="ni-plus"></i>`, svgMinus = `<i class="ni-minus"></i>`,
        arrowDown = `<i class="ni-keyboard-arrow-down"></i>`, status = sessionStorage.getItem('expend');

    let collapseMenuName = $('.collapse-item .collapse-head .menu-name');
    collapseMenuName.append('<span class="collapse-show-hide-icon"></span>')
    collapseMenuName.each(function (index, element) {
        if ($(element).parents('.collapse-head').siblings('.collapse-item').hasClass('active')) {
            $(element).children('.collapse-show-hide-icon').html(svgMinus).addClass('minus');
        } else {
            $(element).children('.collapse-show-hide-icon').html(svgPlus).removeClass('minus');
        }
    });

    $('.collapse-head').click(function (e) {
        e.preventDefault();
        collapseItemShow($(this), $(this).siblings('.collapse-item'))
    });

    $('.collapse-item .collapse-item, .left-side').mouseleave(function () {
        let targetElement = $('.collapse-item .collapse-item');
        if ($('.nav-collapse').hasClass('nav-collapse-expend')) {
            collapseItemShow($(targetElement), $(targetElement), 'mouseleave')
        }
    })

    function collapseItemShow(thisElement, target, mouseEvent = null) {
        let targetElement = $(target), elementPosition = $(thisElement).position().top,
            documentHeight = $(window).height(), elementHeight, position;
        if (mouseEvent === null) {
            if (targetElement.hasClass('active')) {
                collapseHide()
            } else {
                collapseShow()
            }
        } else {
            if (mouseEvent === 'mouseenter') {
                collapseShow()
            }
            if (mouseEvent === 'mouseleave') {
                collapseHide()
            }
        }

        function collapseHide() {
            elementHeight = targetElement.height()
            $(thisElement).children('a').children('.menu-name').children('.collapse-show-hide-icon').html(svgPlus).removeClass('minus');
            targetElement.removeClass('active').animate({
                height: 0
            }, 200)
        }

        function collapseShow() {
            $('.collapse-item .collapse-item').css({
                height: 0
            }).removeClass('active').hide();
            $('.collapse-show-hide-icon.minus').html(svgPlus)
            $(thisElement).children('a').children('.menu-name').children('.collapse-show-hide-icon').html(svgMinus).addClass('minus');
            targetElement.css({
                height: 'auto'
            }).addClass('active').show();
            elementHeight = targetElement.height()
            if ((documentHeight - elementPosition) > elementHeight) {
                position = elementPosition;
            } else {
                position = elementPosition - (elementHeight - (documentHeight - elementPosition) + 20);
            }
            targetElement.css({
                top: position + 'px'
            }).height(0).animate({
                height: elementHeight
            }, 200);
        }
    }

    $(window).resize(function () {
        responsiveCollapse()
    })

    $(document).ready(function () {
        responsiveCollapse(status);
    });

    // responsive collapse
    function responsiveCollapse(status = null) {
        let targetClass = $('.nav-collapse'), screen = $(window).width(),
            activeCollapseItem = $('.collapse-item .collapse-item.active'),
            collapseItem = $('.collapse-item .collapse-item'), collapseHeadMenu = $('.collapse-head .menu-name');
        if (screen < 1200 && 700 < screen) {
            collapseExpend();
        } else {
            if (status === 'true') {
                $('.left-side').animate({
                    width: '300px'
                }, 0)
                collapseExpend();
            } else {
                targetClass.removeClass('nav-collapse-expend');
                if ((screen - 100) < 1600 && 700 < screen) {
                    $('.left-side, .logo').css({
                        width: '20%'
                    })
                    $('.right-side, .header').css({
                        width: '80%'
                    })
                } else if (700 < screen) {
                    $('.left-side, .logo').css({
                        width: '16%'
                    })
                    $('.right-side, .header').css({
                        width: '84%'
                    })
                }

                $('.logo .nav-close-logo').hide()
                $('.logo .nav-open-logo').show()
                $('.menu-button-collapse-button').css({
                    WebkitTransform: 'rotate(360deg)'
                })
                $(collapseItem).removeClass('responsive-item');
                sessionStorage.setItem('expend', 'false');
            }
        }

        function collapseExpend() {
            targetClass.addClass('nav-collapse-expend')
            if (700 < screen) {
                $('.left-side, .logo').css({
                    width: '100px'
                })

                $('.right-side, .header').css({
                    width: screen - 100 + 'px',
                })

                $('.logo .nav-close-logo').show()
                $('.logo .nav-open-logo').hide()
                $('.menu-button-collapse-button').css({
                    WebkitTransform: 'rotate(180deg)',
                })

                collapseHeadMenu.each(function (index, element) {
                    let text = $(element).text().replace(/\s/g, "").split('//')[0];
                    $(element).parents('.collapse-head').siblings('.collapse-item').children('.collapse-item-head-title').remove()
                    $(element).parents('.collapse-head').siblings('.collapse-item').prepend('<h4 class="title-small text-700 collapse-item-head-title">' + text + '</h4>')
                })
                activeCollapseItem.removeClass('active');
                $(collapseItem).addClass('responsive-item');
                sessionStorage.setItem('expend', 'true');
            }
        }
    }

    $('.menu-button-collapse-button').click(function () {
        let targetClass = $('.nav-collapse'), screen = $(window).width() - 100,
            activeCollapseItem = $('.collapse-item .collapse-item.active'),
            collapseItem = $('.collapse-item .collapse-item'), collapseHeadMenu = $('.collapse-head .menu-name'),
            menuName = $('.menu-name');
        let targetElement = $(activeCollapseItem), documentHeight = $(window).height(), elementHeight, position,
            elementPosition;
        if (activeCollapseItem.length > 0) {
            elementPosition = $(activeCollapseItem).position().top;
        }
        $(menuName).css('white-space', 'nowrap');
        if (targetClass.hasClass('nav-collapse-expend')) {
            targetClass.removeClass('nav-collapse-expend')
            if (screen < 1600) {
                $('.left-side, .logo').css({
                    width: '20%'
                })
                $('.right-side, .header').css({
                    width: '80%'
                })
            } else {
                $('.left-side, .logo').css({
                    width: '16%'
                })
                $('.right-side, .header').css({
                    width: '84%'
                })
            }
            $('.logo .nav-close-logo').hide()
            $('.logo .nav-open-logo').show()
            $('.menu-button-collapse-button').css({
                WebkitTransform: 'rotate(360deg)',
            })
            $(collapseItem).removeClass('responsive-item');
            $(collapseItem).css({
                height: 0
            }).removeClass('active').hide();
            $('.collapse-show-hide-icon.minus').html(svgPlus)
            $(activeCollapseItem).children('a').children('.menu-name').children('.collapse-show-hide-icon').html(svgMinus).addClass('minus');
            targetElement.css({
                height: 'auto'
            }).addClass('active').show();
            elementHeight = targetElement.height()
            if ((documentHeight - elementPosition) > elementHeight) {
                position = elementPosition;
            } else {
                position = elementPosition - (elementHeight - (documentHeight - elementPosition) + 20);
            }
            targetElement.css({
                top: position + 'px'
            });
            sessionStorage.setItem('expend', 'false');
        } else {
            targetClass.addClass('nav-collapse-expend')
            $('.left-side, .logo').css({
                width: '100px'
            })
            $('.right-side, .header').css({
                width: screen + 'px',
            })
            $('.logo .nav-close-logo').show()
            $('.logo .nav-open-logo').hide()
            $('.menu-button-collapse-button').css({
                WebkitTransform: 'rotate(180deg)',
            })

            $(collapseItem).addClass('responsive-item');

            $(collapseItem).css({
                height: 0
            }).removeClass('active').hide();
            $('.collapse-show-hide-icon.minus').html(svgPlus)
            $(activeCollapseItem).children('a').children('.menu-name').children('.collapse-show-hide-icon').html(svgMinus).addClass('minus');
            targetElement.css({
                height: 'auto'
            }).addClass('active').show();
            elementHeight = targetElement.height()
            if ((documentHeight - elementPosition) > elementHeight) {
                position = elementPosition;
            } else {
                position = elementPosition - (elementHeight - (documentHeight - elementPosition) + 20);
            }
            targetElement.css({
                top: position + 'px'
            }).height(0).animate({
                height: elementHeight
            }, 200);

            collapseHeadMenu.each(function (index, element) {
                let text = $(element).text().replace(/\s/g, "").split('//')[0];
                $(element).parents('.collapse-head').siblings('.collapse-item').children('.collapse-item-head-title').remove()
                $(element).parents('.collapse-head').siblings('.collapse-item').prepend('<h4 class="title-small text-700 collapse-item-head-title">' + text + '</h4>')
            })
            sessionStorage.setItem('expend', 'true');
        }
        setTimeout(toggleWhiteSpace, 500);

        function toggleWhiteSpace() {
            $(menuName).css('white-space', 'normal')
        }
    });

    $(document).click(function (event) {
        let lss = $('.left-side');
        if (!$(event.target).closest(lss).length && $(lss).hasClass('mobile-menu-open') && !$(event.target).is('.collapse-show-hide-icon, .minus-ico, .plus-ico')) {
            $(lss).removeClass('mobile-menu-open');
        }
    });

    $('.mobile-menu-button, .mobile-menu-hide').click(function (event) {
        event.stopPropagation();
        let exist = $('.left-side').toggleClass('mobile-menu-open').hasClass('mobile-menu-open');
        if (exist) scrolling('.menu-scroller');
    })

    $('.dropdown-header').append(arrowDown).click(function () {
        let element = $('.dropdown .dropdown-menu');
        if (!element.hasClass('show')) {
            $('.dropdown-header i.arrow-down-ico').css({
                WebkitTransform: 'rotate(360deg)'
            })
        } else {
            element.css({
                height: 'auto'
            })
            let elementHeight = element.height() + 20;
            element.height(0).animate({
                height: elementHeight
            }, 200)
            $('.dropdown-header i.arrow-down-ico').css({
                transition: 'all 200ms', WebkitTransform: 'rotate(180deg)'
            })
        }
    })

    $(document).click(function (event) {
        let element = $('.dropdown .dropdown-menu');
        if (element.hasClass('show')) {
            if (!$(event.target).closest('.dropdown').length) {
                $('.dropdown-header i.arrow-down-ico').css({
                    WebkitTransform: 'rotate(360deg)'
                })
            }
        }
    })

    // scroll to active item
    if (status !== 'true') {
        scrolling()
    }

    function scrolling(ele = null) {
        let element = ele ? $(ele) : $('.left-side');
        let target = $('.collapse-item a.active, .collapse-item span.active'), windowHeight = $(window).height(),
            targetDistance = target.offset().top;
        if (targetDistance > (windowHeight - 200)) {
            element.animate({
                scrollTop: targetDistance - 100,
            }, 500);
        }
    }

})();
