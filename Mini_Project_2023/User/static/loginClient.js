$(document).ready(function () {
    //validation for username
    $("#smlcname").hide();
    $("#txtmail").blur(function () {
        validateunamefunction();
    });

    //validation for password
    $("#smlcpassword").hide();
    $("#txtpassword").blur(function () {
        validatepassword();
    });
});

function validateunamefunction() {
    var emailvalue = $("#txtmail").val();
    if (emailvalue == "") {
        $("#smlcname").show();
        $("#smlcname").html("Username cannot be empty");
    }
    else {
        $("#smlcname").hide();
    }
}

function validatepassword() {
    var passwordvalue = $("#txtpassword").val();
    if (passwordvalue == "") {
        $("#smlcpassword").show();
        $("#smlcpassword").html("Password cannot be empty");
    }
    else {
        $("#smlcpassword").hide();
    }
}

