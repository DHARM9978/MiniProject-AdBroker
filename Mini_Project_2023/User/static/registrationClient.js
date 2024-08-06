$(document).ready(function () {
    $("#smlcname").hide();
    $("#txtname").blur(function () {
        validatename();
    });

    $("#smlcLname").hide();
    $("#txtLname").blur(function () {
        validateLname();
    });

    $("#smlcmail").hide();
    $("#txtmail").blur(function () {
        validateemail();
    });

    $("#smlcphno").hide();
    $("#txtphno").blur(function () {
        validatephno();
    });

    $("#smlcmpassword").hide();
    $("#txtpassword").blur(function () {
        validatepass();
    });


});

function validatename() {
    var fname = $("#txtname").val();
    if (fname == "") {
        $("#smlcname").show();
    }
    else {
        $("#smlcname").hide();
    }
}

function validateLname() {
    var fname = $("#txtLname").val();
    if (fname == "") {
        $("#smlcLname").show();
    }
    else {
        $("#smlcLname").hide();
    }
}


function validateemail() {
    var mail = $("#txtmail").val();
    var checkmailformat = /^([a-z\d\.\-]+)@([a-z\d\.\-]+)\.([a-z]{2,8})$/;
    if (mail == "") {
        $("#smlcmail").show();
        return false;
    }
    else if (checkmailformat.test(mail) == false) {

        $("#smlcmail").show();
        $("#smlcmail").html("Enter a Proper E-Mail Id Formate");

        return false;
    }
    else {
        $("#smlcmail").hide();
    }
}


function validatephno() {
    var phno = $("#txtphno").val();
    // alert(phno.length); 

    if (phno == "") {
        $("#smlcphno").show();
    }
    else if (phno.length <= 9) {
        $("#smlcphno").show();
        $("#smlcphno").html("phone number must containe 10 digits");
    }
    else {
        $("#smlcphno").hide();
    }
}

function validatepass() {
    var pass = $("#txtpassword").val();

    if (pass == "") {
        $("#smlcmpassword").show();
    }
    else if (pass.length < 8) {
        $("#smlcmpassword").show();
        $("#smlcmpassword").html("Password Must be greater than 8 characters");

    }
    else {
        $("#smlcmpassword").hide();
    }
}