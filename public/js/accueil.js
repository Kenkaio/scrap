
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
            'background-color': 'rgb(39, 48, 64)',
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
    }, 3500);

}
