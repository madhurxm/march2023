jQuery(document).ready(function () {
  //====== NAME =====//
  // jQuery("#name").focusout(function () {
  //   if (
  //     !(/^[A-Za-z]{3,30}$/).test(jQuery(this).val()) ^
  //     (jQuery(this).val() == "")
  //   ) {
  //     alert("Enter only Alphabets");
  //     // jQuery(".name_validation").css("opacity","100%");
  //     // jQuery(".name_validation").css("position","relative");
  //     jQuery(this).val("");
  //     jQuery(this).focus();
  //     return false;
  //   }
  // });

  //====== EMP ID =====//
  jQuery("#emp_id").focusout(function () {
    var x = jQuery(this).val();
    // if (
    //   !/[A-Z]{3}[0-9]{2}$/.test(jQuery(this).val()) ^
    //   (jQuery(this).val() == "")
    // ) {
    //   alert("Enter Employee ID in XXX00 format");
    //   jQuery(this).val("");
    //   jQuery(this).focus();
    //   return false;
    // }
    jQuery.ajax({
      url: "app/Verification/validation.php",
      type: "POST",
      data: { emp_id: x },
      success: function (data) {
        if ((data === "1")) {
          data="";
          return false;
        } else {
          alert(data);
        }
      },
    });
    return false;
  });

  //====== Mobile =====//
  jQuery("#mobile").focusout(function () {
    if (!/[0-9]$/.test(jQuery(this).val()) ^ (jQuery(this).val() == "")) {
      alert("Enter only Numbers");
      // jQuery(".name_validation").css("opacity","100%");
      // jQuery(".name_validation").css("position","relative");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
  });

  //====== REG USER NAME =====//
  jQuery("#reg_username").focusout(function () {
    var x = jQuery(this).val();
    // if (
    //   !/^[A-Z0-9a-z]{1,8}$/.test(jQuery(this).val()) ^
    //   (jQuery(this).val() == "")
    // ) {
    //   alert("Username can have eight alphabets and numbers only");
    //   jQuery(this).val("");
    //   jQuery(this).focus();
    //   return false;
    // }

    jQuery.ajax({
      url: "app/Verification/validation.php",
      type: "POST",
      data: { reg_username: x },
      success: function (data) {
        alert(data);
      },
    });

    return false;
  });

  //====== REG Password =====//
  jQuery("#reg_pass").focusout(function () {
    if (
      !/[0-9A-Za-z@%]{1,8}$/.test(jQuery(this).val()) ^
      (jQuery(this).val() == "")
    ) {
      alert("Only Alphabets, Numbers and % @ are allowed.");
      // jQuery(".name_validation").css("opacity","100%");
      // jQuery(".name_validation").css("position","relative");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
  });

  //====== LOGIN USER NAME =====//
  jQuery("#login_username").focusout(function () {
    // var x = jQuery(this).val();
    if (
      !/^[A-Z0-9a-z]{1,8}$/.test(jQuery(this).val()) ^
      (jQuery(this).val() == "")
    ) {
      alert("Please enter valid username");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
    // jQuery.ajax({
    //   url: "app/Verification/authentication.php",
    //   type: "POST",
    //   data: { login_username: "x" },
    //   success: function (data) {
    //     if (data != "") {
    //       alert(data);
    //     }
    //   },
    // });
  });

  //====== LOGIN Password =====//
  jQuery("#login_pass").focusout(function () {
    if (
      !/[0-9A-Za-z]{1,8}$/.test(jQuery(this).val()) ^
      (jQuery(this).val() == "")
    ) {
      alert("Please enter valid password");
      // jQuery(".name_validation").css("opacity","100%");
      // jQuery(".name_validation").css("position","relative");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
  });
});
