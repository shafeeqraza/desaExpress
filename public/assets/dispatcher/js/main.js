// wow
new WOW().init();

const _iOSDevice = !!navigator.platform.match(/iPhone|iPod|iPad/);
window.scroll(0, 0);
// smooth scroll
var Scrollbar = window.Scrollbar;
const options = {
    damping: 5,
    thumbMinSize: 20,
    renderByPixels: !("ontouchstart" in document),
    alwaysShowTracks: false,
    continuousScrolling: true,
};
if (
    screen.width >= 1024 &&
    !navigator.userAgent.includes("Firefox") &&
    !navigator.userAgent.includes("iPad")
) {
    $("body").css({
        height: "6000px",
    });
    Scrollbar.init(document.querySelector(".my-scrollbar"));
}
$(document).ready(() => {
    $("body").addClass("iosDevice");
    var scrollCount = 0;
    if (!navigator.userAgent.includes("Firefox")) {
        setTimeout(() => {
            document
                .getElementsByClassName("my-scrollbar")[0]
                .addEventListener("wheel", (e) => {
                    var isElementInView = Utils.isElementInView(
                        $(".copyright-p"),
                        false
                    );

                    if (scrollCount >= 0) {
                        if (e.deltaY < 100 && scrollCount != 0) {
                            scrollCount += e.deltaY;
                        } else if (e.deltaY === 100) {
                            if (isElementInView) {
                                scrollCount = scrollCount;
                            } else {
                                scrollCount += 100;
                            }
                        }
                        // else if(e.deltaY < 0){
                        //     scrollCount-=100;
                        // }
                    } else {
                        scrollCount = 0;
                    }
                    if (screen.width >= 1024 && !_iOSDevice) {
                        window.scroll(0, scrollCount);
                    }
                });

            if (
                window.innerWidth >= 1024 &&
                !navigator.userAgent.includes("iPad")
            ) {
                $(".my-scrollbar").css({
                    position: "fixed",
                    top: "0",
                    right: "0",
                    bottom: "0",
                    left: "0",
                });
            }
        });
    }
});

// owl
// $('.resumeCarousal').owlCarousel({
//     loop:true,
//     margin:30,
//     nav:false,
//     dots:false,
//     autoplay:true,
//     autoplayTimeout:3000,
//     autoplayHoverPause:false,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:2
//         },
//         1000:{
//             items:3
//         }
//     }
// })

// burger
$(document).ready(function () {
    $("#nav-icon1").click(function () {
        $(this).toggleClass("open");
        if (this.classList.contains("open")) {
            $(".sider").css("display", "block");
            setTimeout(() => {
                $(".sider").css("opacity", "1");
                $(".sideNave").css("left", "0");
            });
        } else {
            $(".sideNave").css("left", "-300px");
            setTimeout(() => {
                $(".sider").css("opacity", "0");
            }, 300);
            setTimeout(() => {
                $(".sider").css("display", "none");
            }, 600);
        }
    });
});

// chk element visible on
function Utils() {}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return pageTop < elementTop && pageBottom > elementBottom;
        } else {
            return elementTop <= pageBottom && elementBottom >= pageTop;
        }
    },
};

var Utils = new Utils();

$("#invoice-input").change((e) => {
    $(".invoiceName").text(e.target.files[0].name);
});
// table js
$(document).ready(function () {
    $(".myTable").DataTable();
});


