$(function() {
    $("#userreg").validate({
        ignore: [], rules: {
          userrole: {
              required: true
          },
          email:{
              required: true
          },
          phone:{
              required: true
          },
          fname:{
              required: true
          },
          lname:{
              required: true
          },
          pwd:{
              required: true
          }
        }
        , messages: {
          userrole: {
              required: "Select User Role"
          },
          email:{
              required: "Enter Email"
          },
          phone:{
              required: "Enter Contact Number"
          },
          fname:{
              required: "Enter First Name"
          },
          lname:{
              required: "Enter Last Name"
          },
          pwd:{
              required: "Enter Password"
          }
        }
    }
    );
}

);
