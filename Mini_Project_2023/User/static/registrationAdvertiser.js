
// This is For Advertiser Registration 

$(document).ready(function () {
    $("#smlaname").hide();
    $("#txtname").blur(function () {
        validatename();
    });

    $("#smlaEname").hide();
    $("#txtEname").blur(function () {
        validateEname();
    });


    $("#smlamail").hide();
    $("#txtmail").blur(function () {
        validateemail();
    });

    $("#smlaphno").hide();
    $("#txtphno").blur(function () {
        validatephno();
    });

    $("#smlapassword").hide();
    $("#txtpassword").blur(function () {
        validatepass();
    });


});

function validatename() {
    var fname = $("#txtname").val();
    if (fname == "") {
        $("#smlaname").show();
    }
    else {
        $("#smlaname").hide();
    }
}

function validateEname() {
    var fname = $("#txtEname").val();
    if (fname == "") {
        $("#smlaEname").show();
    }
    else {
        $("#smlaEname").hide();
    }
}


function validateemail() {
    var mail = $("#txtmail").val();
    var checkmailformat = /^([a-z\d\.\-]+)@([a-z\d\.\-]+)\.([a-z]{2,8})$/;
    if (mail == "") {
        $("#smlamail").show();
        return false;
    }
    else if (checkmailformat.test(mail) == false) {

        $("#smlamail").show();
        $("#smlamail").html("Enter a Proper E-Mail Id Formate");

        return false;
    }
    else {
        $("#smlamail").hide();
    }
}


function validatephno() {
    var phno = $("#txtphno").val();
    // alert(phno.length); 

    if (phno == "") {
        $("#smlaphno").show();
    }
    else if (phno.length <= 9) {
        $("#smlaphno").show();
        $("#smlaphno").html("phone number must containe 10 digits");
    }
    else {
        $("#smlaphno").hide();
    }
}

function validatepass() {
    var pass = $("#txtpassword").val();

    if (pass == "") {
        $("#smlapassword").show();
    }
    else if (pass.length < 8) {
        $("#smlapassword").show();
        $("#smlapassword").html("Password Must be greater than 8 characters");

    }
    else {
        $("#smlapassword").hide();
    }
}


