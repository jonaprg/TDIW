$(document).ready(function(){
    $(".add-item-cart").click(function(){
        let id_product = $(this).attr('id')
        let quantity = $('#quantity').val()
        if (quantity > 0) {
            $.ajax(
                {
                    type: 'GET',
                    url: 'index.php?action=addToCart',
                    data: 'id-product=' + id_product + '&quantity=' + quantity,
                    success: function (data) {
                        document.getElementById("correctAdd").innerHTML = data;
                        $('#cart').load('index.php?action=summaryCart');
                    }
                }
            )
        }
    });
});

