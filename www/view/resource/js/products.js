$(document).ready(function(){
    $(".card-product").click(function(){
        id_product = $(this).attr('id')
        $(".container-products").load("index.php?action=productDetail&id_producte="+ id_product, () => {
        });
    });
});