var fname = true;
var lname = true;
var emailcheck = true;
var phnocheck = true;
var passwordcheck = true;


// Validation for First Name
$(document).ready(function () {
    $("#validatefname").hide();
    $("#cl_name").blur(function () {
        validatefirstname();
    });
});
function validatefirstname() {
    var name = $("#cl_name").val();
    if (name == "") {
        $("#validatefname").show();
        $("#validatefname").html("This field can't be empty");
        fname = false;
        return false;
    }
    else {
        $("#validatefname").hide();
        fname = true;
        return true;
    }
}

// Validate For last Name
$(document).ready(function () {
    $("#validatelname").hide();
    $("#cl_lastname").blur(function () {
        validatelastname();
    });
});
function validatelastname() {
    var lastname = $("#cl_lastname").val();
    if (lastname == "") {
        $("#validatelname").show();
        $("#validatelname").html("This field can't be empty");
        lname = false;
        return false;
    }
    else {
        $("#validatelname").hide();
        lname = true;
        return true;
    }
}


// Validate for Email
$(document).ready(function () {
    $("#validateemail").hide();
    $("#cl_email").blur(function () {
        validateemial();
    });
});
function validateemial() {
    var email = $("#cl_email").val();
    var checkmailformat = /^([a-z\d\.\-]+)@([a-z\d\.\-]+)\.([a-z]{2,8})$/;
    if (email == "") {
        $("#validateemail").show();
        $("#validateemail").html("You can't Put this field empty");
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






// Validate for Phone Number
$(document).ready(function () {
    $("#validatephno").hide();
    $("#cl_phone").blur(function () {
        validatephno();
    });
});
function validatephno() {
    var phno = $("#cl_phone").val();
    var filter = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
    charpattern = /([A-Z][a-z])/;
    if (phno == "") {
        $("#validatephno").show();
        $("#validatephno").html("You can't put Phone Number Empty");
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


// Validate for Password
$(document).ready(function () {
    $("#validatepassword").hide();
    $("#cl_password").blur(function () {
        validatepassword();
    });
});
function validatepassword() {
    var password = $("#cl_password").val();
    if (password == "") {
        $("#validatepassword").show();
        passwordcheck = false;
        return false;
    }
    else {
        $("#validatepassword").hide();
        passwordcheck = true;
        return true;
    }
}