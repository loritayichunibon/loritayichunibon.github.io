//There is no royal road to learning.//

$(document).ready(function() {
    // 回頁首設定 //
    $(".goTop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 500);
    });
    ////////////////////////////////////////////////////
    // 菜單按鈕設定 //
    $(function() {
        $('.menu-trigger').on('click', function() {
            $(this).toggleClass('active');
            return false;
        });
    });
    ////////////////////////////////////////////////////
    // 手機選單關閉按鈕設定 //
    $(function() {
        $('.mbCloseBtn').on('click', function() {
            var blc = $('.bmd-layout-container');
            if (blc.length > 0) {
                blc.removeClass('bmd-drawer-in');
            }
            var blb = $('.bmd-layout-backdrop');
            if (blb.length > 0) {
                blb.removeClass('in');
            }
            return false;
        });
    });
    ////////////////////////////////////////////////////
    // 手機選單選項設定 //
    var main_nav = $("#mainMenu").html();
    $('#leftMenu > ul').append(main_nav);
    $('#leftMenu > ul').prepend(mbSearch);
    ///////////////////////////////////////////////////
    // 手機選單開闔次選單設定 //
    var timer;
    var winWidth = $(window).width();
    var checkPonit = true;
    if (winWidth < 767) {
        $('#leftMenu li a').on('click', function addClick() {
            $(this).parent('li').find('.dropdownMenu').first().stop(true, true).slideToggle(300);
        });
        $('#leftMenu li a').on('click', function toggleClick() {
            $(this).parent('li').siblings('li').find('.dropdownMenu').slideUp(300);
        })
        checkPonit = false;
    }
    $(window).resize(function() {
        window.clearTimeout(timer);
        timer = window.setTimeout(function() {
            winWidth = $(window).width();
            if (winWidth > 767 && checkPonit === false) {
                $('#mainMenu li a').unbind();
                $('.dropdownMenu').css('display', 'block');
                checkPonit = true;

            } else if (winWidth < 768 && checkPonit === true) {
                $('.navbar-toggler').click(function() {
                    $('.dropdownMenu').css('display', 'none');
                });
                $('#leftMenu li a').on('click', function addClick() {
                    $(this).parent('li').find('.dropdownMenu').first().stop(true, true).slideToggle(300);
                });
                $('#leftMenu li a').on('click', function toggleClick() {
                    $(this).parent('li').siblings('li').find('.dropdownMenu').slideUp(300);
                })
                checkPonit = false;
            }
        }, 100);
        $(window).resize(function() {
            $('.bmd-layout-container').removeClass('bmd-drawer-in');
            $('.bmd-layout-backdrop').removeClass('in');
        });
        return false;
    });
    ///////////////////////////////////////////////////
    // 點擊外部遮罩關閉下選單設定 //
    $('.bmd-layout-backdrop').click(function() {
        $('#leftMenu li a').parent('li').find('.dropdownMenu').slideUp(300);
        return false;
    });

    $('.closeUpBtn').on('click', function() {
        $('.searchFluidContainer').slideUp(300);
    });
    ///////////////////////////////////////////////////
    // 關閉登入彈跳視窗設定 //
    $('#forgetPw').click(function() {
        $('#login').modal("hide");
    });
    ///////////////////////////////////////////////////
    // 產品簡述高度設定 //
    // $('.featureMore').bind('click', function() {
    //     $('.productDtInfoFeature').css('height', 'auto');
    //     $('.productFeature').css('height', 'auto');
    //     $('.productDtIntro').css('height', 'auto')
    //     $(this).css('display', 'none');
    // });
    // $('.appMore').bind('click', function() {
    //     $('.productDtInfoApplication').css('height', 'auto');
    //     $('.productApplication').css('height', 'auto');
    //     $('.productDtIntro').css('height', 'auto')
    //     $(this).css('display', 'none');
    // });
    ///////////////////////////////////////////////////
    // 頁尾選單設定 //
    // $('.companyInfoBlock .owl-carousel').owlCarousel({
    //     loop: false,
    //     margin: 10,
    //     nav: true,
    //     dots: false,
    //     autoplay: false,
    //     autoplayTimeout: 4000,
    //     navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
    //     responsive: {
    //         0: {
    //             items: 4
    //         },
    //         767: {
    //             item: 5
    //         },
    //         991: {
    //             items: 6
    //         }
    //     }
    // });
    //////////////////////////////////////////////////
    // 手機左側選單次選項 //
    $('.mbAsideSecondMenu .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4000,
        navText: ["<span class='material-icons'>keyboard_arrow_left</span>", "<span class='material-icons'>keyboard_arrow_right</span>"],
        responsive: {
            0: {
                items: 2
            },
            767: {
                item: 4
            },
            991: {
                items: 6
            }
        }
    });

});

// $('.indexCategoryContent .owl-carousel').owlCarousel({
//     loop: false,
//     margin: 16,
//     nav: true,
//     dots: false,
//     navText: ["<span class='material-icons'>keyboard_arrow_left</span>", "<span class='material-icons'>keyboard_arrow_right</span>"],
//     responsive: {
//         0: {
//             items: 1
//         },
//         568: {
//             items: 2
//         },
//         767: {
//             items: 3
//         },
//         991: {
//             items: 4
//         }
//     }
// });

// $('.bannerContent .owl-carousel').owlCarousel({
//     loop: false,
//     margin: 0,
//     nav: true,
//     dots: true,
//     mouseDrag: false,
//     navText: ["<span class='material-icons'>keyboard_arrow_left</span>", "<span class='material-icons'>keyboard_arrow_right</span>"],
//     responsive: {
//         0: {
//             items: 1
//         },
//         568: {
//             items: 1
//         },
//         767: {
//             items: 1
//         },
//         991: {
//             items: 1
//         }
//     }
// });

AOS.init();

//側選單欄位開闔設定

// $(document).ready(function() {
//     $(".sideBtn").click(function() {
//         $(this).closest(".sideInner").children(".sideInnerMenu").slideToggle();
//     });
//     $(".sideBtn").click(function() {
//         $(this).closest(".sideActiveInner a").toggleClass('active');

//     });
// });


// // 產品照片輪播設定 //
// $(document).ready(function() {
//     $('.bigImage .owl-carousel').owlCarousel({
//         items: 1,
//         center: true,
//         margin: 0,
//         callbacks: true,
//         URLhashListener: true,
//         autoplayHoverPause: true,
//         smartSpeed: 150,
//         animateIn: 'fadeIn',
//         animateOut: 'fadeOut',
//         autoplay: false,
//         mouseDrag: false,
//         touchDrag: false,
//         nav: false,
//         navText: ["<span class='material-icons'>keyboard_arrow_left</span>", "<span class='material-icons'>keyboard_arrow_right</span>"],

//     });
// });
// $(document).ready(function() {
//     $('.imgControl .owl-carousel').owlCarousel({
//         loop: false,
//         margin: 8,
//         autoplay: false,
//         nav: false,
//         dots: false,
//         responsive: {
//             0: {
//                 items: 3
//             },
//             768: {
//                 items: 3
//             },
//             992: {
//                 items: 4
//             }
//         }
//     })
// });

// $(document).ready(function() {
//     $('.videoContent .owl-carousel').owlCarousel({
//         loop: false,
//         margin: 8,
//         autoplay: false,
//         nav: true,
//         dots: false,
//         navText: ["<span class='material-icons'>keyboard_arrow_left</span>", "<span class='material-icons'>keyboard_arrow_right</span>"],
//         responsive: {
//             0: {
//                 items: 1
//             },
//             768: {
//                 items: 1
//             },
//             992: {
//                 items: 4
//             }
//         }
//     })
// });

// $(window).scroll(function() {
//     var scroll = $(window).scrollTop();

//     if (scroll >= 100) {
//         $(".headerContent").addClass("topFixedHeader");
//     } else {
//         $(".headerContent").removeClass("topFixedHeader");
//     }
// });

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 180) {
        $(".floatMenuContainer").addClass("floatShow");
    } else {
        $(".floatMenuContainer").removeClass("floatShow");
    }
});