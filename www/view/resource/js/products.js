$(document).ready(function(){
    $(".card-product").click(function(){
        id_product = $(this).attr('id')
        $.ajax(
            {
                type:'GET',
                url:'?action=productDetail',
                data:"id_producte=" + id_product,
                success: function(data){
                    $( ".container" ).html(data).show()
                }
            }
        );
    });
});