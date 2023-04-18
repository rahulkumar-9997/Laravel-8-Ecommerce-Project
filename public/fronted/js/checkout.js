$(document).ready(function() {
    $('#billToDifferentBtn').click(function(){
        if($(this).is(':checked')){
            $('#bill_diffrent').removeClass('d-none');
        }else{
            $('#bill_diffrent').addClass('d-none');
        }
    }); 
    /* Checkout form submit */
    $('#reviewCheckoutBtn').click(function() {
        $('#checkout-form-submit').submit();
    });
});