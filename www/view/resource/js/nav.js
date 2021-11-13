$(function() {
    $(".toggle").on("click", function() {
        if ($(".nav-item").hasClass("active")) {
            $(".nav-item").removeClass("active");
        } else {
            $(".nav-item").addClass("active");
        }
    });
});

$(document).ready(function(){
    $(".categories").click(function(){
        id_category = $(this).attr('id')
        $(".categories-container").load("index.php?action=products&category_id="+ id_category, function () {
        });
    });
});