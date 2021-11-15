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
  $('#atax').hide(); 
  $('#aimt').hide(); 
  $('#catcc').hide(); 
  fetch_acc_hist();
       
      // $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });


   
 function fetch_acc_hist(){
 	// alert(uri);
 $.ajax({
    url:uri + '/account/history/',
       success:function(data)
      {  
  $('#example2 tbody').html(data);
   $('#example2').DataTable({
      "paging": true,
      "pageLength": 5,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
           
   }
    }); 
   
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
    if(result.isAuth == true) 
    {
			$("#message").removeClass('hide').addClass(' alert-success').html('<p>Logging in......</p>');
		Toast.fire({
        icon: 'success',
        title: result.msg
      });
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
$(_this).find(':input').attr('disabled',true);
$(_this).find(':button').attr('disabled',false);
$('.tbutton').html('Transaction in progress..');
var tax = $('#tax').val();
var imt = $('#imt').val();
var atcc = $('#atcc').val(); 
if(tax ===""){
		alert("Tax clearance not found on account, please visit the nearest bank around");
		$('#atax').show(); 
		$(_this).find(':input').attr('disabled',false);
		$(_this).find(':button').attr('disabled',false);
		$('.tbutton').html('<i class="icon-signin icon-large"></i>Transfer Me');
 } else if(imt ===""){
  		alert("International Money Transfer clearance not found on account, please visit the nearest bank around");
		$('#aimt').show(); 
		$(_this).find(':input').attr('disabled',false);
		$(_this).find(':button').attr('disabled',false);
		$('.tbutton').html('<i class="icon-signin icon-large"></i>Transfer');

 }  else if(atcc ===""){
		alert("Anti terrorism clearance not found on account, please visit the nearest bank around");
		$('#catcc').show(); 
		$(_this).find(':input').attr('disabled',false);
		$(_this).find(':button').attr('disabled',false);
		$('.tbutton').html('<i class="icon-signin icon-large"></i>Transfer');
 } 
 else {

 	  $.ajax({
	url:uri + 'account/confirmTransfer/',
	type: 'POST',
  	data: formdata, 
	success: function( result ){  
    if(result.status == 200) 
    {
			Toast.fire({
        icon: 'success',
        title: result.msg
      });
	 		location.href=uri + 'account/transfer/';
			 
		 }
       else if(result.status == 400)
        {
			Toast.fire({
	        icon: 'error',
	        title: result.msg
	      });
          $(_this).find(':input').attr('disabled',false);
          $(_this).find(':button').attr('disabled',false);
          $('.tbutton').html('<i class="icon-signin icon-large"></i>Transfer');
	 
		 }
     else
     {
			Toast.fire({
	        icon: 'error',
	        title: result.msg
	      });
			$(_this).find(':input').attr('disabled',false);
			$(_this).find(':button').attr('disabled',false);
			$('.tbutton').html('<i class="icon-signin icon-large"></i>Transfer');
		}
	}
});
 }

 
return this;
} 
      
       
 function sendFund(data) {

 } 
$(document).on('click', '#tcb', function() { 
	 var tax = $('#tc').val();
	 if(tax === ""){
	  alert("Tax clearance field can not be empty");
	  $('#tc').focus();
	 }
	 else { 
		 $.ajax({
			url:uri + 'account/saveTax/',
			type: 'POST',
			data: {tax:tax},
			success: function( result ){
		  	if(result.status === 200) {
		  		$('#tax').val(tax);
		  		$("#atax").hide();
		  		Toast.fire({
			        icon: 'success',
			        title: result.msg
      			});
		  	} else {
		  		alert(result.msg);
		  	} 
		 } 
		 });
	 } 
});



$(document).on('click', '#imtb', function() { 
	 var imtc = $('#timtc').val();
	 if(imtc ===""){
	  alert("Intl Clearance field can not be empty");
	  $('#imtc').focus();
	 }
	 else { 
		 $.ajax({
			url:uri + 'account/saveImt/',
			type: 'POST',
			data: {imtc:imtc},
			success: function( result ){
		  	 
		  	if(result.status === 200) {
				$('#imt').val(imtc);
		  		$("#aimt").hide();
		  		Toast.fire({
			        icon: 'success',
			        title: result.msg
      			});
		  	} else {
		  		alert(result.msg);
		  	} 
		 } 
		 });
	 } 
});
  

$(document).on('click', '#atccb', function() { 
	 var atc = $('#atc').val();
	 if(atc === ""){
	  alert("Clearance field cannot be empty");
	  $('#atc').focus();
	 }
	 else { 
		 $.ajax({
			url:uri + 'account/saveAtcc/',
			type: 'POST',
			data: {atc:atc},
			success: function( result ){
		  	
		  	if(result.status === 200) {
		  		$('#atcc').val(atc);
		  		$("#catcc").hide();
		  		Toast.fire({
			        icon: 'success',
			        title: result.msg
      			});
		  	} else {
		  		alert(result.msg);
		  	} 
		 } 
		 });
	 } 
});
  
  //ends

 });