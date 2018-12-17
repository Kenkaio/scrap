$("html, body").animate({ scrollTop: 0 }, "slow");
$('.flower1').css({
    'position': 'absolute'
});

var positionMenuInPage = $('#menu').offset().top;
$(window).scroll(
    function () {
        if ($(window).scrollTop() > positionMenuInPage) {
            $('#menu').addClass("navbar-fixed-top");
        } else {
            $('#menu').removeClass("navbar-fixed-top");
        }
    }
);


var positionAchievementInPage = $("#achievements").offset().top;
$(window).scroll(function() {
    if ($(window).scrollTop() > (positionAchievementInPage-100)) {
        $(".imagesPosts").fadeIn(2500);
        $(".contentAllPost").fadeIn(2500);
    }
});



$(".down a").on("click", function(e) {
  e.preventDefault();
  var hash = this.hash;
  $("html, body").animate(
    {
      scrollTop: $(this.hash).offset().top
    },
    1000,
    function() {
      window.location.hash = hash;
    }
  );
});

$('li>a').on('click', function (e) {
    if (this.id == 'drapFr' || this.id == "drapEs" ) {

    }
    else{
        e.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000, function () {
            window.location.hash = hash;
        });
    }
});

window.onload = function(){

    anime
        .timeline()
        .add({
            targets: ".ml5 .line",
            opacity: [0.5, 1],
            scaleX: [0, 1],
            easing: "easeInOutExpo",
            duration: 700
        })
        .add({
            targets: ".ml5 .line",
            duration: 600,
            easing: "easeOutExpo",
            translateY: function(e, i, l) {
            var offset = -0.625 + 0.625 * 2 * i;
            return offset + "em";
            }
        })
        .add({
            targets: ".ml5 .letters-mid",
            opacity: [0, 1],
            scaleY: [0.5, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: "-=600"
        })
        .add({
            targets: ".ml5 .letters-left",
            opacity: [0, 1],
            translateX: ["0.5em", 0],
            easing: "easeOutExpo",
            duration: 600,
            offset: "-=300"
        })
        .add({
            targets: ".ml5 .letters-right",
            opacity: [0, 1],
            translateX: ["-0.5em", 0],
            easing: "easeOutExpo",
            duration: 600,
            offset: "-=600"
        });
    setTimeout(() => {
        $('.ml5').css({
            "color": 'white',
            "transition": "2s"
        });
        $('.line').css({
            "background-color": 'white',
            "transition": "2s"
        });
        $("#presentation").css({
            'background-color': 'rgb(59, 68, 84)',
            "transition": "2s"
        });
    }, 1500);
    setTimeout(() => {
        $(".bubble").css({
            "opacity": '1',
            "transition": "2s"
        });
    }, 3000);
    setTimeout(() => {
        $(".down").css({
            "opacity": '1',
            "transition": "1s"
        });
        $('body').css({
            'overflow-y': 'visible'
        });
    }, 3500);

}
