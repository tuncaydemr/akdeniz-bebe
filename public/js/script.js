$(() => {
    const $navDropdowns = $('.nav-dropdown');
    const $navDropdownMenus = $('.nav-dropdown-menu');

    $navDropdownMenus.hide();

    $navDropdowns.on('mouseenter', '.menu-link', function() {
        let index = $(this).index('.nav-dropdown .menu-link');
        console.log(index);
        $navDropdownMenus.hide();
        $navDropdownMenus.eq(index).fadeToggle('fast');
    });

    $navDropdowns.on('mouseleave', '.nav-dropdown-menu', function() {
        $navDropdownMenus.hide();
    })

    const $sepetModal = $(".sepet-modal");
    const $sepetModalController = $("#sepet");
    const $sepetModalClose = $(".sepet-modal-close");

    $sepetModal.hide();
    $sepetModalController.on("click", function () {
        $sepetModal.fadeToggle("fast");
    });

    $sepetModalClose.on("click", function () {
        $sepetModal.fadeToggle("fast");
    });


    let adet = parseInt($('#adet').val());

    if(adet === 1) {
        $('#minus').prop('disabled', true);
        $('#minus').css({
            'opacity': 0.5
        });
    } else {
        $("#minus").prop("disabled", false);
        $("#minus").css({
            opacity: 1,
        });
    }

    $('#plus').click(function () {
        adet++;
        
        $("#adet").val(adet);

        if (adet === 1) {
            $("#minus").prop("disabled", true);
            $("#minus").css({
                opacity: 0.5,
            });
        } else {
            $("#minus").prop("disabled", false);
            $("#minus").css({
                opacity: 1,
            });
        }
    });

    $("#minus").click(function () {
        if (adet > 1) {
            adet--;
            $("#adet").val(adet);
        }

        if (adet === 1) {
            $("#minus").prop("disabled", true);
            $("#minus").css({
                opacity: 0.5,
            });
        } else {
            $("#minus").prop("disabled", false);
            $("#minus").css({
                opacity: 1,
            });
        }
    });
});

var owlHeroSlider = $('.owl-hero-slider');
owlHeroSlider.owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
})


var owlCategorySlider = $('.owl-category-slider');
owlCategorySlider.owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 4
        },
        1000: {
            items: 6
        },
        1400: {
            items: 7,
        }
    }
})

var owlProductSlider = $('.owl-category-products-slider');
owlProductSlider.owlCarousel({
    margin: 5,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    dots: true,
    nav: true,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        },
        1400: {
            items: 4,
        }
    }
})

var singleProductSlider = $('.single-product-slider');
singleProductSlider.owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
})

