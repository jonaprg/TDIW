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
        $(document).find(".container-categories").load("index.php?action=products&category_id="+ id_category, () => {
        });
    });
});