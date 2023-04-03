jQuery(document).ready(function () {
  //======= REGISTERATION PAGE===========//

  //====to LOGIN Page Button====//

  jQuery("#to_login").click(function (e) {
    e.preventDefault();
    jQuery("#to_login_loader").addClass("spinner-grow");

    setTimeout(function () {
      //   var formdata = new FormData(this);
      //   alert("bse");
      //   jQuery.ajax({
      //     url: "../../app/db_insertion.php",
      //     type: "POST",
      //     data: formdata,
      //     processData: false,
      //     contentType: false,
      //     cache: false,
      //     success: function (data) {
      //       alert(data);
      //     },
      //   });

      $(location).attr(
        "href",
        "http://localhost/MM-Projects/MAR'23/18Mar_-_User_profille_project/app/Webpages/login.php"
      );
    }, 2000);
  });

  //==== Register Button====//

  jQuery("#reg_form").submit(function (e) {
    e.preventDefault();

    jQuery(".reg_btn_text").css("opacity", "0");
    jQuery(".loader_reg").css("opacity", "100");

    var formData = new FormData($(this)[0]);

    // var i = 13;
    // for (const [key, value] of formData) {
    //   if (value == "") {
    //     alert(key + " is empty. Please fill it");
    //     jQuery(".reg_btn_text").css("opacity", "100");
    //     jQuery(".loader_reg").css("opacity", "00");
    //     i--;
    //     break;

    //     // } else {
    //   }
    // }
    // if (i == 13) {
      // alert(i);
      setTimeout(function () {
        jQuery.ajax({
          url: "app/Functions/db_insertion.php",
          type: "POST",
          data: formData,
          async: false,
          cache: false,
          contentType: false,
          enctype: "multipart/form-data",
          processData: false,
          success: function (data) {
            alert(data);
          },
        });
        $(location).attr("href", "app/Webpages/login.php");
      }, 500);
      // } else {
      //   break;
    // }
    // alert("4");

    // setTimeout(function () {
    //   jQuery.ajax({
    //     url: "app/Functions/db_insertion.php",
    //     type: "POST",
    //     data: formData,
    //     async: false,
    //     cache: false,
    //     contentType: false,
    //     enctype: "multipart/form-data",
    //     processData: false,
    //     success: function (data) {
    //       alert(data);
    //     },
    //   });
    //   // $(location).attr("href", "app/Webpages/login.php");
    // }, 500);
    // return false;
  });

  //==============LOGIN PAGE===============//

  //====to Registration form Button====//

  jQuery("#to_reg").click(function (e) {
    e.preventDefault();

    jQuery("#to_reg_page_btn_text").css("opacity", "0");
    jQuery(".loader_to_reg").css("opacity", "100");

    setTimeout(function () {
      //   var formdata = new FormData(this);
      //   alert("bse");
      //   jQuery.ajax({
      //     url: "../../app/db_insertion.php",
      //     type: "POST",
      //     data: formdata,
      //     processData: false,
      //     contentType: false,
      //     cache: false,
      //     success: function (data) {
      //       alert(data);
      //     },
      //   });

      $(location).attr("href", "../../index.php");
    }, 2500);
  });

  //====LOGIN Button====//

  jQuery("#login_form").submit(function (e) {
    e.preventDefault();
    jQuery(".login_btn_text").css("opacity", "0");
    jQuery(".loader_login").css("opacity", "100");

    setTimeout(function () {
      jQuery.ajax({
        url: "../../app/Verification/authentication.php",
        type: "POST",
        data: $("#login_form").serialize(),
        success: function (data) {
          alert(data);
          $(location).attr(
            "href",
            "http://localhost/MM-Projects/MAR'23/18Mar_-_User_profille_project/app/Webpages/profile_page.php"
          );
        },
      });
    }, 6000);
  });
});
