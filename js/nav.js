$(function () {
    // nav link

    // fleche 

    if (window.matchMedia("(min-width: 572px)").matches) {
        $('nav ul li:first-of-type').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(2);
        });
        $('nav ul li:nth-of-type(3)').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(2);
        });
        $('nav ul li:last-of-type').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(5);
        });

        // content link
        $('.content ul li:first-of-type').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(2);
        });
        $('.content ul li:nth-of-type(2)').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(3);
        });
        $('.content ul li:nth-of-type(3)').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(4);
        });
        $('.content ul li:last-of-type').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(5);
        });

        // video link
        $('.video button').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(2);
        });

    } else {
        $('.content ul li:first-of-type').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(2);
        });
        $('.content ul li:nth-of-type(2)').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(4);
        });
        $('.content ul li:nth-of-type(3)').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(6);
        });
        $('.content ul li:last-of-type').click(function (e) {
            e.preventDefault();
            $(".main").moveTo(8);
        });
    }


});