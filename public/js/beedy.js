jQuery(document).ready( function($){ 

  
 $("#login-form").submit( function(e) { loginProcess(e);  });
 $("#transfer-form").submit( function(e) { transferFund(e);  }); 
 $("#payNow").submit( function(e) { payNow(e);  }); 
 $("#edit").change( function(e) { getHallRecord(e);  });  
 $("#seatTable").change( function(e) { getseatTable(e);  HallList(e);  }); 
 //alert('hi'); alert('hi'); 
 
  /**
       *
       *@param {String} uniform resource identifier
       *@returns nothing
       *
       */ 
       var uri = $("#url").val(); 
       // alert(uri);
       //  swal(uri);
       
       
  // fetch_user_data(); 
	//  fetch_product_list();
  //  viewproduct();
	 /**
	  *@function destroyPopUp()
	  *@description destroys pop up content and closes it
	  *
	  */  
 
 function showMod(){
   $('.beedy-kaydee-popup').css('left', $(window).width() / 2 - ($('.beedy-kaydee-popup').width() / 2));
	 $('.beedy-kaydee-popup').show();
 
 }
	 function destroyPopUp(){
			$('.beedy-kaydee-popup-content').empty();  
				$('.beedy-kaydee-popup').hide();
	 }
	  
   
 
 
	 
  
	//cancelCartMeal
		   /**
	    *@function hide alert box
	    *@returns void
	    */
	   function hideAlertBox(id){
		  setInterval( function(){
       $("#"+id).html('');
       }, 7000);
       
	   }
    
 /**
       *@function isFieldEmp
       *@param {String} caller (id or class)
       *@description checks if a field is empty ? true : false
       */
       function isFieldEmp(caller) {
       if (caller.text() == '') {
       caller.css('border', '1px solid red');
       return false;
       } else
       caller.css('border', '');
       
       return true;
       }
       
    
	    
function loginProcess(evt){ 
var _this = $(evt.target);
evt.preventDefault();  
var formdata = $(_this).serialize();
$(_this).find(':input').attr('disabled',true);
$(_this).find(':button').attr('disabled',false);
$(_this).find(':button').html('Loading..');
  $.ajax({
	url:uri + 'login/authenticate/',
	type: 'POST',
  data: formdata,
  // dataType: JSON,
	success: function( result ){ 
    console.log(result.isAuth); 
    console.log(result.msg); 
    if(result.isAuth == true) 
    {
			$("#message").removeClass('hide').addClass(' alert-success').html('<p>Logging in......</p>');
	 location.href=uri + 'account/';
			 
		 }
       else if(result.isAuth == false)
        {
					$("#message").removeClass('hide').addClass(' alert-danger').html(result.msg);
          $(_this).find(':input').attr('disabled',false);
          $(_this).find(':button').attr('disabled',false);
          $(_this).find(':button').html('<i class="icon-signin icon-large"></i>Login');
	 
		 }
     else
     {
			$("#message").removeClass('hide').addClass(' alert-danger').html(result.msg);
			$(_this).find(':input').attr('disabled',false);
			$(_this).find(':button').attr('disabled',false);
			$(_this).find(':button').html('<i class="icon-signin icon-large"></i>Login');
		}
	}
});
 
return this;
} 
      
 	    
function transferFund(evt){ 
var _this = $(evt.target);
evt.preventDefault();  
var formdata = $(_this).serialize();
// $(_this).find(':input').attr('disabled',true);
// $(_this).find(':button').attr('disabled',false);
// $(_this).find(':button').html('Transaction in progress..');
var tax = $('#tax').val();
alert(tax);
//   $.ajax({
// 	url:uri + 'login/authenticate/',
// 	type: 'POST',
//   data: formdata,
//   // dataType: JSON,
// 	success: function( result ){ 
//     console.log(result.isAuth); 
//     console.log(result.msg); 
//     if(result.isAuth == true) 
//     {
// 			$("#message").removeClass('hide').addClass(' alert-success').html('<p>Logging in......</p>');
// 	 location.href=uri + 'account/';
			 
// 		 }
//        else if(result.isAuth == false)
//         {
// 					$("#message").removeClass('hide').addClass(' alert-danger').html(result.msg);
//           $(_this).find(':input').attr('disabled',false);
//           $(_this).find(':button').attr('disabled',false);
//           $(_this).find(':button').html('<i class="icon-signin icon-large"></i>Transfer');
	 
// 		 }
//      else
//      {
// 			$("#message").removeClass('hide').addClass(' alert-danger').html(result.msg);
// 			$(_this).find(':input').attr('disabled',false);
// 			$(_this).find(':button').attr('disabled',false);
// 			$(_this).find(':button').html('<i class="icon-signin icon-large"></i>Transfer');
// 		}
// 	}
// });
 
return this;
} 
      
       
 function sendFund(data) {

 }
$(document).on('submit', '#transfer-form', function(){
 
var tax = $('#tax').val();
 if(tax != " "){
  alert("product  can not be empty");
 }
 else{
  
 $.ajax({
	url:uri + 'report/fetchReport/',
	type: 'POST',
	data: {evt_id:evt_id},
	success: function( result ){
  $("#reportable tbody").html(result);
  
 }
 
 });
 }
	
	  
	
	});
	 
  
  
  //ends

 });
