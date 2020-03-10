$(document).ready(function() {
  $("#login-form").on("submit", function(e) {
    e.preventDefault();


    console.log(e.target);

    $.ajax({
      url: "Controllers/Login/Login.inc.php",
      method: "POST",
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function(data) {
        if (data === "success") {
          $("#login-user-name").val("");
          $("#login-password").val("");

          window.location.href = "Views/Pages/MainPage.php";
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
            console.log(data);
          if (data === "success") {
            $("#login-user-name").val("");
            $("#login-password").val("");
  
            // window.location.href = "Views/Pages/MainPage.php";
          }
        }
      });
  });
});
