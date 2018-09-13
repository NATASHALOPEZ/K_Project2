 $(function(){
     $('.error').hide();
       $('#button').click(function() {
        var vat = $("#vat").val();
       // alert(vat);
        $('#loader1').show();
         $('.error').hide();
      var vat= $("input#vat").val();
        if (vat == "") {
        $("label#vat_error").show();
        $("input#vat").focus();
        return false;
      }
    else{
        $.ajaxSetup({
          headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
         });
       
        var dataString = 'vat='+ vat; 
        //alert (dataString);
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1:8000/en/vat',
        data: dataString,
         beforeSend: function (request) {
        return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        
    },

  complete: function(){
     $('#loader1').hide();
  },
        success: function(response){ // What to do if we succeed
          if(response!="false"){
            var string = response;
            res = string.replace(/\\n/g,", ");
             obj = JSON.parse(res);
              error = "";
            document.getElementById("errorid").innerHTML = error; 
         $('#name').val(obj.name);  
         $('#address').val(obj.address);
        $code = obj.countryCode;
          } else{
             error = "Vat ID is Invalid.";
            document.getElementById("errorid").innerHTML = error; 
             $('#name').val('');  
            $('#address').val('');
            // $('#country').val(''); 
          } 
       
}
    }); 
           return false;
    }

     });
    });