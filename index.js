function login() {
    $.ajax({
        url: "login.php",
        data: {uName:$("#id1").val(), pW:$("#id2").val(),btn:$("#loginID").val()},
        method: "GET",
        success: function (result) {
            console.log(result);
        }
    });
}
function register() {
    
}