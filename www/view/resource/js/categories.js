$(document).ready(function(){
    $(".card-category").click(function(){
        id_category = $(this).attr('id')
        $.ajax(
            {
                type:'GET',
                url:'?action=products',
                data:"category_id=" + id_category,
                success: function(data){
                    $( ".container-categories" ).html(data).show()
                }
            }
        );
    });
});
