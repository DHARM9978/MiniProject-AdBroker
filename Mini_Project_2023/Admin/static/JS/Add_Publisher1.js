var username = true;
var enamechek = true;
var emailcheck = true;
var phnocheck = true;
var passwordcheck = true;

// Name Validation 
$(document).ready(function () {
    $("#validatename").hide();
    $("#pub_name").blur(function () {
        namevalidation();
    });
});
function namevalidation() {
    var name = $("#pub_name").val();
    if (name == "") {
        $("#validatename").show();
        username = false;
        return false;
    }
    else {
        $("#validatename").hide();
        username = true;
        return true;
    }
}

// EnterPrise Name Validation
$(document).ready(function () {
    $("#validateename").hide();
    $("#enterprise_name").blur(function () {
        epricename();
    });
});
function epricename() {
    var ename = $("#enterprise_name").val();
    if (ename == "") {
        $("#validateename").show();
        enamechek = false;
        return false;
    }
    else {
        $("#validateename").hide();
        enamechek = true;
        return true;
    }
}

// Email Validation
$(document).ready(function () {
    $("#validateemail").hide();
    $("#pub_email").blur(function () {
        email();
    });
});
function email() {
    var email = $("#pub_email").val();
    var checkmailformat = /^([a-z\d\.\-]+)@([a-z\d\.\-]+)\.([a-z]{2,8})$/;
    if (email == "") {
        $("#validateemail").show();
        $("#validateemail").html("You can't put E-Mail Field Empty");
        emailcheck = false;
        return false;
    }
    else if (!checkmailformat.test(email)) {
        $("#validateemail").show();
        $("#validateemail").html("Please Enter E-Mail in proper Formate");
        emailcheck = false;
        return false;
    }
    else {
        $("#validateemail").hide();
        emailcheck = true;
        return true;
    }
}

// Phone Number Validation
$(document).ready(function () {

    $("#validatephno").hide();
    $("#pub_phone").blur(function () {
        phno();
    });
});
function phno() {
    var filter = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
    var charpattern = /([A-Z][a-z])/;
    var phno = $("#pub_phone").val();
    if (phno == "") {
        $("#validatephno").show();
        $("#validatephno").html("You can't Put Phone Number Empty");
        phnocheck = false;
        return false;
    }
    else if (charpattern.test(phno)) {
        $("#validatephno").show();
        $("#validatephno").html("Phone Number Can't containe Charaters");
        phnocheck = false;
        return false;
    }
    else if (!filter.test(phno)) {
        $("#validatephno").show();
        $("#validatephno").html("Phone Number containe Minimum 10 Digits");
        phnocheck = false;
        return false;
    }

    else {
        $("#validatephno").hide();
        phnocheck = true;
        return true;
    }
}

// Passwrod Validation
$(document).ready(function () {
    $("#validatepassword").hide();
    $("#pub_password").blur(function () {
        password();
    });
});
function password() {
    var password = $("#pub_password").val();
    if (password == "") {
        $("#validatepassword").show();
        passwordcheck = false;
        return false;
    }
    else {
        passwordcheck = true;
        return true;
    }
}

// Button Click Execution and Validation
$(document).ready(function () {
    $("#client_operation").click(function () {
        // validateall();
        namevalidation();
        epricename();
        email();
        phno();
        password();
    });
});

function validateall() {
    if (username == true && enamechek == true && emailcheck == true && phnocheck == true && passwordcheck == true) {
        return true;
    }
    else {
        return false;
        // alert("Please Fill the form properly");
    }
}