$(document).ready(function(){
    $(".card-category").click(function(){
        id_category = $(this).attr('id')
        $(".card-category").load("index.php?action=products&category_id="+ id_category, function () {
        });
    });
});