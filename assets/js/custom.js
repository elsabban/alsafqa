$(function() {
    $('.main-owl-slider').owlCarousel({
        margin: 40,
        loop: true,
        items: 1,

        responsive: {
            0: {
                stagePadding: 0,
                items: 1

            },
            400: {
                stagePadding: 20,
                items: 1,
                margin: 30,
                center: true

            },
            575: {
                stagePadding: 50,
                items: 1,
                margin: 30,
                center: true

            },

            650: {
                stagePadding: 80,
                items: 1,
                margin: 40,
                center: true

            },

            768: {
                stagePadding: 120,
                items: 1,
                margin: 40,


            },
            830: {
                stagePadding: 170,
                items: 1,
                margin: 40,


            },
            900: {
                stagePadding: 210,
                items: 1,
                margin: 40,


            },
            991: {
                stagePadding: 300,
                center: true,
            },
            1024: {
                stagePadding: 350,
                center: true,
            },

            1300: {
                stagePadding: 400,
                center: true,
            },
            1400: {
                // stagePadding: 50,
                center: true,
                items: 3
            }

        }
    });
});

$('.navbar-toggler').on('click', function() {
    $('.wrapper').toggleClass('pushWrapper')
    $('body ,html').toggleClass('body-flow')
})
$(document).ready(function() {
    $(document).click(function(event) {
        var clickover = $(event.target);
        var _opened = $(".collapse.mainmenu").hasClass("collapse show");
        console.log(clickover.hasClass("navbar"))
        if (_opened === true && !clickover.hasClass("navbar-toggler") && !clickover.hasClass("navbar-collapse") && !clickover.hasClass("searchBar")) {
            $("button.navbar-toggler").click();
        }
    });
});




// zoom
var sync1 = $(".slider");
var sync2 = $(".navigation-thumbs");

var thumbnailItemClass = '.owl-item';

var slides = sync1.owlCarousel({
    video: true,
    startPosition: 12,
    items: 1,
    loop: false,
    margin: 10,
    autoplay: false,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
    nav: false,
    dots: true
}).on('changed.owl.carousel', syncPosition);

function syncPosition(el) {
    $owl_slider = $(this).data('owl.carousel');
    var loop = $owl_slider.options.loop;

    if (loop) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
    } else {
        var current = el.item.index;
    }

    var owl_thumbnail = sync2.data('owl.carousel');
    var itemClass = "." + owl_thumbnail.options.itemClass;


    var thumbnailCurrentItem = sync2
        .find(itemClass)
        .removeClass("synced")
        .eq(current);

    thumbnailCurrentItem.addClass('synced');

    if (!thumbnailCurrentItem.hasClass('active')) {
        var duration = 300;
        sync2.trigger('to.owl.carousel', [current, duration, true]);
    }
}
var thumbs = sync2.owlCarousel({
        startPosition: 0,
        items: 4,
        loop: false,
        margin: 10,
        autoplay: false,
        nav: false,
        dots: false,
        onInitialized: function(e) {
            var thumbnailCurrentItem = $(e.target).find(thumbnailItemClass).eq(this._current);
            thumbnailCurrentItem.addClass('synced');
        },
    })
    .on('click', thumbnailItemClass, function(e) {
        e.preventDefault();
        var duration = 300;
        var itemIndex = $(e.target).parents(thumbnailItemClass).index();
        sync1.trigger('to.owl.carousel', [itemIndex, duration, true]);
    }).on("changed.owl.carousel", function(el) {
        var number = el.item.index;
        $owl_slider = sync1.data('owl.carousel');
        $owl_slider.to(number, 100, true);
    });


// zoom effect 
function zoom(e) {
    var zoomer = e.currentTarget;
    e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
    e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
    x = offsetX / zoomer.offsetWidth * 100
    y = offsetY / zoomer.offsetHeight * 100
    zoomer.style.backgroundPosition = x + '% ' + y + '%';
}

// ajax tabs

// $('#myTabs a').click(function(e) {
//     e.preventDefault();

//     var url = $(this).attr("data-url");
//     var href = this.hash;
//     var pane = $(this);

//     // ajax load from data-url
//     $(href).load(url, function(result) {
//         pane.tab('show');
//     });
// });

// // load first tab content
// $('#home').load($('.active a').attr("data-url"), function(result) {
//     $('.active a').tab('show');
// });


// sticky sidebar 
var stickyElements = document.getElementsByClassName('sticky');

for (var i = stickyElements.length - 1; i >= 0; i--) {
    Stickyfill.add(stickyElements[i]);
}