$(document).ready(function(){

    $(".toggle").on("click", function() {
        if ($(".nav-item ").hasClass("active")) {
            $(".nav-item").removeClass("active");
        } else {
            $(".nav-item").addClass("active");
        }
    });

    $("#profile").click(function(){
        $('.nav-session').toggle();
    });

    $(".categories").click(function(){
        id_category = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'?action=products',
                data:"category_id=" + id_category,
                success: function(data){
                    $( ".container" ).html(data).show()
                }
            }
        );
    });

    $("#checkoutCart").click(function(){
        $( ".container" ).load("index.php?action=checkoutCart")
    });

});



