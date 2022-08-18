
(function ($) {
    "use strict";

    // preloder js
    window.addEventListener('load',function(){
        document.querySelector('body').classList.add("loaded")
    });


    //Back to Top
    $(window).on('scroll',function () {
        if ($(this).scrollTop() > 100) {
        $('#top-bottom-scroll').fadeIn();
        } else {
        $('#top-bottom-scroll').fadeOut();
        }
    });
    $('#top-bottom-scroll').on('click',function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    // Newsletter Popup
    $("#nlmOverlay").delay(7800).fadeIn(400);
    $("#nlmPopup").delay(8000).fadeIn(400);
    $("#btnClose").on('click',function (e)
    {
        HideDialog();
        e.preventDefault();
    });
    function HideDialog()
    {
        $("#nlmOverlay").fadeOut(400);
        $("#nlmPopup").fadeOut(300);
    }

    // Sticky Menu
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
            $(".header-wrapper").addClass("sticky");
        } else {
            $(".header-wrapper").removeClass("sticky");
        }
    });


    // main slider
    $('.top-banner-slider').owlCarousel({
        items: 1,
        loop: true,
        margin:0,
        smartSpeed: 1500,
        autoplay: false,
        dots: true,
        nav: true,
        dotsData: true,
        mouseDrag: false,
        pagination : true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navText : ["<i class='bx bx-left-arrow-alt' ></i>","<i class='bx bx-right-arrow-alt'></i>"],
        responsive:{
            0:{
                items:1,
                nav:false,
                dots: true,
            },
            600:{
                items:1,
                nav:false,
                dots: true,
            },
            1000:{
                items:1,
                nav:true,
                loop:true,
                dots: true
            }
        }
    });


    // review slider
    $('.review-slider').owlCarousel({
        items: 1,
        loop: true,
        margin:15,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText : ["<i class='bx bxs-chevron-left' ></i>","<i class='bx bxs-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                nav:false,
                dots : false
            },
            600:{
                items:1,
                nav:false,
                dots : false
            },
            1000:{
                items:1,
                nav:true,
                loop:true
            }
        }
    });


    // product slider
    $('.product-slider').owlCarousel({
        items: 1,
        loop: true,
        margin:15,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText : ["<i class='bx bxs-chevron-left' ></i>","<i class='bx bxs-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                nav:false,
                dots : false
            },
            600:{
                items:2,
                nav:false,
                dost : false
            },
            1000:{
                items:4,
                nav:false,
                loop:false
            },
            1200:{
                items:4,
                nav:true,
                loop:true
            }
        }
    });


    // populer product slider
    $('.populer-product-slider').owlCarousel({
        items: 1,
        loop: true,
        margin:15,
        smartSpeed: 1500,
        autoplay: false,
        dots: true,
        nav: false,
        navText : ["<i class='bx bxs-chevron-left'></i>","<i class='bx bxs-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                nav:false,
                dots : false
            },
            600:{
                items:1,
                nav:false,
                dots : false
            },
            1000:{
                items:1,
                nav:false,
                loop:true,
                dots : true
            }
        }
    });

    // product details slider
    $('.product-switcher').owlCarousel({
        items: 1,
        loop: true,
        margin:15,
        smartSpeed: 1500,
        autoplay: false,
        dots: true,
        nav: false,
        mouseDrag: true,
        singleItem: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',

        navText : ["<i class='bx bxs-chevron-left'></i>","<i class='bx bxs-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                nav:false,
                dots : false
            },
            600:{
                items:1,
                nav:false,
                dots : false
            },
            1000:{
                items:1,
                nav: false,
                loop:true,
                dots : true
            }
        }
    });


    // navbar js

    var openBtn = document.querySelector('.menu-btn-sm');
    var closeBtn = document.querySelector('.menu-close-icon')
    var overlay = document.querySelector('.mobile-menu');
    var smallNav = document.querySelector('.mobile-menu-area')

    openBtn.addEventListener('click', ()=>{
      overlay.classList.add('mobil-menu-expand')
      smallNav.classList.add('mobile-menu-area-expand')
    })

    closeBtn.addEventListener('click', ()=>{
      overlay.classList.remove('mobil-menu-expand')
      smallNav.classList.remove('mobile-menu-area-expand')
    })




    var acc = document.querySelectorAll(".mobile-menu-items .menu-item-has-children i.bx.bx-chevron-down");
    var createToolbarButtonHandler = function(acc) {

        return function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        };
    };
    for(var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", createToolbarButtonHandler(acc[i]));
    }


    // imgae-select
    const activeImage = document.querySelector(".product-image .active");
    const productImages = document.querySelectorAll(".product-thumb img");
    function changeImage(e) {
        activeImage.src = e.target.src;
    }
    productImages.forEach((image) =>
        image.addEventListener("click", changeImage)
    );

    // Product Image Popup
    $('.product-image').magnificPopup({
        delegate: 'img',
        type: 'image',
        gallery: {
            enabled: true
        },
        callbacks: {
            elementParse: function(qw) {
                qw.src = qw.el.attr('src');
            }
        }
    });


    // sideber cart js
    var openCart = document.querySelector('.header-cart-btn');
    var closeCart = document.querySelector('.cart-close');
    var cartSidebar =document.querySelector('.cart-sidebar');

    openCart.addEventListener('click', (e)=>{
        cartSidebar.classList.add('open-sidebar')
    });
    closeCart.addEventListener('click', (e)=>{
        cartSidebar.classList.remove('open-sidebar')
    });



  // product quantity jquery
    // Quantity Value change
    $('.quantity').on('click', '.plus', function(e) {
        let $input = $(this).prev('input.qty');
        let val = Number($input.val());
        $input.val( val+1 ).change();
    });

    $('.quantity').on('click', '.minus', function(e) {
        let $input = $(this).next('input.qty');
        var val = Number($input.val());
        if (val > 0) {
            $input.val( val-1 ).change();
        }
    });

}(jQuery));