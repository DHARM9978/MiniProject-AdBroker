$(document).ready(function () {
    //validation for username
    $("#smlaname").hide();
    $("#txtmail").blur(function () {
        validateunamefunction();
    });

    //validation for password
    $("#smlapassword").hide();
    $("#txtpassword").blur(function () {
        validatepassword();
    });
});

function validateunamefunction() {
    var emailvalue = $("#txtmail").val();
    if (emailvalue == "") {
        $("#smlaname").show();
        $("#smlaname").html("Username cannot be empty");
    }
    else {
        $("#smlaname").hide();
    }
}

function validatepassword() {
    var passwordvalue = $("#txtpassword").val();
    if (passwordvalue == "") {
        $("#smlapassword").show();
        $("#smlapassword").html("Password cannot be empty");
    }
    else {
        $("#smlapassword").hide();
    }
}

