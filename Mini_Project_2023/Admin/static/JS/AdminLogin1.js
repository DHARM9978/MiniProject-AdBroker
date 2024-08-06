$(document).ready(function () {

    $("#validationname").hide();
    $("#adminName").blur(function () {
        validatename();
    });


    $("#validatepassword").hide();
    $("#adminPassword").blur(function () {
        validatepassword();
    });

});

function validatename() {
    var name = $("#adminName").val();
    if (name == "") {
        $("#validationname").show();
        $("#validationname").html("AdminName cannot be empty");
    }
    else {
        $("#validationname").hide();
    }

}

function validatepassword() {
    var password = $("#adminPassword").val();
    if (password == "") {
        $("#validatepassword").show();
        $("#validatepassword").html("AdminName cannot be empty");
    }
    else {
        $("#validatepassword").hide();
    }
}