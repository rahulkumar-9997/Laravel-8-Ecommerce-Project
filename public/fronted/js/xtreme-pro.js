/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $("input[name=product-enquiry-phone]").attr("maxlength", "10");
    $('.form-control-int-chk').keypress(function(e) {
	var arr = [];
	var kk = e.which;
	for (i = 48; i < 58; i++)
	    arr.push(i);
	if (!(arr.indexOf(kk)>=0))
	    e.preventDefault();
    });
    $(document).on('click', '.xtreme-pro-product-submit', function(e){
        var pro_enquiry_name = $.trim($("#pro-enquiry-name").val());
        var pro_enquiry_email = $.trim($("#pro-enquiry-email").val());
        var pro_enquiry_phone = $.trim($("#pro-enquiry-phone").val());
        var pro_enquiry_unit = $.trim($("#pro-enquiry-unit").val());
        var pro_enquiry_message = $.trim($("#pro-enquiry-message").val());
        var valid = true;
	if(pro_enquiry_name == '')
	{
	    valid = false;
	    $('#pro-enquiry-name').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#pro-enquiry-name').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#pro-enquiry-name').removeClass('xterem-pro-error');  
	} 
	if(pro_enquiry_unit == '' || pro_enquiry_unit == 0)
	{
	    valid = false;
	    $('#pro-enquiry-unit').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#pro-enquiry-unit').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#pro-enquiry-unit').removeClass('xterem-pro-error');  
	} 
	if(pro_enquiry_message == '')
	{
	    valid = false;
	    $('#pro-enquiry-message').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#pro-enquiry-message').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#pro-enquiry-message').removeClass('xterem-pro-error');  
	} 
	if(is_mobile_valid(pro_enquiry_phone) ==false)
	{
	    valid = false;
	    $('#pro-enquiry-phone').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#pro-enquiry-phone').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#pro-enquiry-phone').removeClass('xterem-pro-error');  
	} 
	
	if(IsEmail(pro_enquiry_email)==false)
	{
	    valid = false;
	    $('#pro-enquiry-email').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#pro-enquiry-email').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#pro-enquiry-email').removeClass('xterem-pro-error'); 
	} 
	
	return valid;
    });
    /*XTREME ENDURANCE FORM VALIDATION*/
    $(document).on('click', '.xtreme-endurance-product-submit', function(e){
        var endurance_enquiry_name = $.trim($("#endurance-enquiry-name").val());
        var endurance_enquiry_email = $.trim($("#endurance-enquiry-email").val());
        var endurance_enquiry_phone = $.trim($("#endurance-enquiry-phone").val());
        var endurance_enquiry_unit = $.trim($("#endurance-enquiry-unit").val());
        var endurance_enquiry_message = $.trim($("#endurance-enquiry-message").val());
        var valid = true;
	if(endurance_enquiry_name == '')
	{
	    valid = false;
	    $('#endurance-enquiry-name').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#endurance-enquiry-name').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#endurance-enquiry-name').removeClass('xterem-pro-error');  
	} 
	if(endurance_enquiry_unit == '' || endurance_enquiry_unit == 0)
	{
	    valid = false;
	    $('#endurance-enquiry-unit').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#endurance-enquiry-unit').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#endurance-enquiry-unit').removeClass('xterem-pro-error');  
	} 
	if(endurance_enquiry_message == '')
	{
	    valid = false;
	    $('#endurance-enquiry-message').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#endurance-enquiry-message').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#endurance-enquiry-message').removeClass('xterem-pro-error');  
	} 
	if(is_mobile_valid(endurance_enquiry_phone) ==false)
	{
	    valid = false;
	    $('#endurance-enquiry-phone').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#endurance-enquiry-phone').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#endurance-enquiry-phone').removeClass('xterem-pro-error');  
	} 
	
	if(IsEmail(endurance_enquiry_email)==false)
	{
	    valid = false;
	    $('#endurance-enquiry-email').addClass('xterem-pro-error')
	    .on('focus', function(){
		$('#endurance-enquiry-email').removeClass('xterem-pro-error');
	    });
	}
	else
	{
	    $('#endurance-enquiry-email').removeClass('xterem-pro-error'); 
	} 
	
	return valid;
    });
    /*XTREME ENDURANCE FORM VALIDATION*/
    
    /*XTREME PRO PRODUCT NAME*/
    $('.xtreme-pro-product').click(function(){
	var product_name = $(this).data('pname');
	var redirect_page = $(this).data('redirect');
	$('#hidden_product_name').val(product_name);
	$('#redirect_page_name').val(redirect_page);
    });
    $('.xtreme-endurance-product').click(function(){
	var product_endurance_name = $(this).data('pname');
	var redirect_page = $(this).data('redirect');
	$('#redirect_page_name_2').val(redirect_page);
	$('#hidden_product_endurance_name').val(product_endurance_name);
    });
    /*XTREME PRO PRODUCT NAME*/
    
});
function IsEmail(email){
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email))
    {
       return false;
    }
    else
    {
       return true;
    }
}
function is_mobile_valid(string_or_number){
    var mobile=string_or_number;
    if(mobile.length!=10){
	return false;
    }
    intRegex = /[0-9 -()+]+$/;
    is_mobile=true;
    for ( var i=0; i < 10; i++) {
	if(intRegex.test(mobile[i]))
	{ 
	    continue;
	}
	else{
	   is_mobile=false;
	   break;
	}
    }
    return is_mobile;

}