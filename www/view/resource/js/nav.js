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
        id_category = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'?action=products',
                data:"category_id=" + id_category,
                success: function(data){
                    $(document).find( ".container-categories" ).html(data).show()
                }
            }
        );
    });
});

$(document).ready(function(){
    $("#profile").click(function(){
        $('.nav-session-start').toggle();
    });
});