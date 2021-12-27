$(document).ready(function(){
    $(".item-less").click(function(){
        id_product = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'?action=restarProducto',
                data:"id_producte=" + id_product,
                dataType: 'json',
                success: function(data){
                    $('#qty-'+id_product).html(data.qty);
                    $('#priceTotal-'+id_product).html(data.totalPriceProduct + " €");
                    $('#cart').load('index.php?action=summaryCart');
                    if(data.totalElements === 0 || data.qty === 0) {
                        $('.container-checkout').load('index.php?action=checkoutCart');
                    }
                },
                error: function () {console.log("No funcionas LESS")}
            }
        );
    });

    $(".item-more").click(function(){
        id_product = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'?action=sumarProducto',
                data:"id_producte=" + id_product,
                dataType: 'json',
                success: function(data){
                    $('#qty-'+id_product).html(data.qty);
                    $('#priceTotal-'+id_product).html(data.totalPriceProduct + " €");
                    $('#cart').load('index.php?action=summaryCart');
                },
                error: function () {console.log("No funcionas MORE")}
            }
        );
    });

    $(".item-trash").click(function(){
        id_product = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'?action=eliminarProducto',
                data:"id_producte=" + id_product,
                dataType: 'json',
                success: function(data){

                    $('#cart').load('index.php?action=summaryCart');
                    if(data.totalElements === 0 || data.qty === 0) {
                        $('.container-checkout').load('index.php?action=checkoutCart');
                    }
                },
                error: function () {console.log("No funcionas ELIMINAR")}
            }
        );
    });
});