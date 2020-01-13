$("#userreg").on('submit',function(e){
  e.preventDefault();
  var returnVal = $("#userreg").valid();
    if (returnVal) {
  $.ajax({
    url: '../src/registration.php',
        type: 'POST',
        data:new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
    success:function(response){
      console.log(response);
      // var response=JSON.parse(data);
      if(response.Responsecode===200)
      {
        $("#userreg").trigger('reset'); // reset all Data
          // window.location.reload();
          window.location.href = 'login.php';
      }
      else
      {
          alert("something went wrong");
      }

    }
  });
}
});

// function checkEmailAvailability(param) {
//   $.ajax({
//     url: "../src/check_email_availablity.php",
//     data: { email: param },
//     type: "POST",
//     dataType:'json',
//     success: function (response) {
//       if (response.msg == 1) {
//         $("#email").val('');
//         $("#email-availability").html('<font color="red">Email Id Already Exists</font>');
//           $("#email").focus();
//       }
//       else{
//         $("#email-availability").html(' ');
//       }
//     },
//     error: function () { }
//   });
// }
