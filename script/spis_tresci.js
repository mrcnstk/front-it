$(document).ready(function () {


    //HTML
    $("#html_spis_tresci").load("/frontit/html/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (HTMLprogress - 1); i >= 0; i--) {
            $("#html_spis_tresci").find("li").eq(i).removeClass("hidden");
        }
    });
    $("#html_pytanie_spis_tresci").load("/frontit/html/spis_tresci/index.php div.course_to_question h2, div.course_to_question hr, div.course_to_question ul", function () {
        for (var i = (HTMLprogress - 1); i >= 0; i--) {
            $("#html_pytanie_spis_tresci").find("li").eq(i).removeClass("hidden");
        }
    });
    //HTML5

    $("#html5_spis_tresci").load("/frontit/html5/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (HTMLprogress - 1); i >= 15; i--) {
            $("#html5_spis_tresci").find("li").eq(i - 15).removeClass("hidden");
        }
    });
    $("#html5_pytanie_spis_tresci").load("/frontit/html5/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (HTMLprogress - 1); i >= 15; i--) {
            $("#html5_pytanie_spis_tresci").find("li").eq(i - 15).removeClass("hidden");
        }
    });
    //CSS

    $("#css_spis_tresci").load("/frontit/css/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (CSSprogress - 1); i >= 0; i--) {
            $("#css_spis_tresci").find("li").eq(i).removeClass("hidden");
        }
    });
    $("#css_pytanie_spis_tresci").load("/frontit/css/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (CSSprogress - 1); i >= 0; i--) {
            $("#css_pytanie_spis_tresci").find("li").eq(i).removeClass("hidden");
        }
    });
    //CSS3

    $("#css3_spis_tresci").load("/frontit/css3/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (CSSprogress - 1); i >= 10; i--) {
            $("#css3_spis_tresci").find("li").eq(i - 10).removeClass("hidden");
        }
    });
    $("#css3_pytanie_spis_tresci").load("/frontit/css3/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (CSSprogress - 1); i >= 10; i--) {
            $("#css3_pytanie_spis_tresci").find("li").eq(i - 10).removeClass("hidden");
        }
    });
    //JavaScript   

    $("#js_spis_tresci").load("/frontit/javaScript/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (JSprogress - 1); i >= 0; i--) {
            $("#js_spis_tresci").find("li").eq(i - 0).removeClass("hidden");
        }
    });

    $("#js_spis_tresci").load("/frontit/javaScript/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (JSprogress - 1); i >= 0; i--) {
            $("#js_spis_tresci").find("li").eq(i).removeClass("hidden");
        }
    });
    $("#js_pytanie_spis_tresci").load("/frontit/javaScript/spis_tresci/index.php div.course h2, div.course hr, div.course ul", function () {
        for (var i = (JSprogress - 1); i >= 0; i--) {
            $("#js_pytanie_spis_tresci").find("li").eq(i).removeClass("hidden");
        }
    });
});



