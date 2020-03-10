$(document).ready(function() {
  $("#login-form").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      url: "Controllers/Login/Login.inc.php",
      method: "POST",
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function(data) {
        if (data === "success") {
          Swal.fire({
            title: "Hello " + $("#login-user-name").val() + "!",
            confirmButtonText: "Continue"
          }).then(result => {
            $("#login-user-name").val("");
            $("#login-password").val("");

            window.location.href = "Views/Pages/MainPage.php";
          });
        }else if($("#login-user-name").val()==="" || $("#login-user-name").val()===""){
            Swal.fire({
                title: "Invalid inputs",
                text: "Please provide proper information",
                confirmButtonText: "OK"
              });
        } else {
          Swal.fire({
            title: "User not registered",
            text: "Log in or Sign up to Continue",
            confirmButtonText: "OK"
          });
        }
      }
    });
  });

  $("#sign-up").on("click", function(e) {
    $.ajax({
      url: "Controllers/Login/Signup.inc.php",
      method: "POST",
      data: new FormData(document.getElementById("login-form")),
      contentType: false,
      processData: false,
      success: function(data) {
        if (data === "success") {
          Swal.fire({
            title: "Hello " + $("#login-user-name").val() + "!",
            text: "You are now registered, Login to proceed",
            confirmButtonText: "Continue"
          }).then(result => {
            $("#login-user-name").val("");
            $("#login-password").val("");
          });
        }
      }
    });
  });
});
