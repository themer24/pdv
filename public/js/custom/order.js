$(document).ready(function(){
   $('.add-product-btn').on('click', function(e){
    e.preventDefault();
    var name=$(this).data('name');
    alert(name)

});


});
