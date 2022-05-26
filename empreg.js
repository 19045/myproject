$(document).ready(function () {

    $("#proceed").click(function (e) {
        var name = $("#fname").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var password = $("#pass").val();
        var cpassword = $("#pass2").val();
        if ((name == '') || (email == '') || (password == '') || (phone == '') || (cpassword == '')) {
            document.getElementById("alert1").innerHTML = "Fill this field";
            document.getElementById("alert2").innerHTML = "Fill this field";
            document.getElementById("alert3").innerHTML = "Fill this field";
            document.getElementById("alert4").innerHTML = "Fill this field";
            document.getElementById("alert5").innerHTML = "Fill this field";
            e.preventDefault();
        }
        else if ((password.length) < 8) {
            document.getElementById("alert3").innerHTML = "Password should atleast 8 character in length...!!!!!!";
            e.preventDefault();
        }
        else if (!(password).match(cpass)) {
            document.getElementById("alert4").innerHTML = "Your passwords don't match. Try again?";
            e.preventDefault();
        } else {
        }
    });

    $("#lbtn").click(function () {
        var email = $("#lemail").val();
        var password = $("#lpass").val();
        if ((email == '') || (password == '')) {
            document.getElementById("alert1").innerHTML = "Fill this field";
            document.getElementById("alert2").innerHTML = "Fill this field";
            $.post("login.php", { email: email, pass: password },
                function (data) {
                    $('#results').html(data);
                    $('#myform')[0].reset();
                });
        }
    });

    
});