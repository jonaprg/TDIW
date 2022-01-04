$(document).ready(function(){
    $(".item-less").click(function(){
        id_product = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'index.php?action=restarProducto',
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
                error: function () {alert("No s'ha restat un producte")}
            }
        );
    });

    $(".item-more").click(function(){
        id_product = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'index.php?action=sumarProducto',
                data:"id_producte=" + id_product,
                dataType: 'json',
                success: function(data){
                    $('#qty-'+id_product).html(data.qty);
                    $('#priceTotal-'+id_product).html(data.totalPriceProduct + " €");
                    $('#cart').load('index.php?action=summaryCart');
                },
                error: function () {alert("No s'ha afegit un producte més")}
            }
        );
    });

    $(".item-trash").click(function(){
        id_product = $(this).attr('id');
        $.ajax(
            {
                type:'GET',
                url:'index.php?action=eliminarProducto',
                data:"id_producte=" + id_product,
                dataType: 'json',
                success: function(data){

                    $('#cart').load('index.php?action=summaryCart');
                    if(data.totalElements === 0 || data.qty === 0) {
                        $('.container-checkout').load('index.php?action=checkoutCart');
                    }
                },
                error: function () {alert("No s'ha eliminat el producte")}
            }
        );
    });
});

$(document).ready(() => {
    $('#cart-confirm').click(() => {
        $('.container').load("index.php?action=cartConfirm")
    })
})