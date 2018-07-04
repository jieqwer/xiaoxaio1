$(function () {
    $("#style1").click(function () {
        $(".toplei>ul:nth-of-type(1) li>a,.toplei>ul:nth-of-type(3) li a").hover(function () {
            $(this).css("color", "#3f95ea ");
            $(this).css("border-bottom",'1px solid #3f95ea')
        }, function () {
            $(".toplei>ul:nth-of-type(1) li>a,.toplei>ul:nth-of-type(3) li a").css("color", "#f2f2f2 ");
            $(".toplei>ul:nth-of-type(1) li>a,.toplei>ul:nth-of-type(3) li a").css("border-bottom", "#f2f2f2 ");
        });

        $(".top").css("background", "#52d3aa");

    } )
});




