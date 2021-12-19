$(document).ready(function(){
    $(".item-add").click(function(){
        id_product = $(this).attr('id')
        $.ajax(
            {
                type:'GET',
                url:'?action=add_to_cart',
                data:"id_producte=" + id_product,
                success: function(data){
                    $( "footer" ).html(data).show()
                }
            }
        );
    });
});