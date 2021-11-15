$(document).ready(function(){
    $(".card-category").click(function(){
        id_category = $(this).attr('id')
        $(".container-categories").load("index.php?action=products&category_id="+ id_category, () => {
        });
    });
});