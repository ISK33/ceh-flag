document.addEventListener("DOMContentLoaded", function (event) {
  const linkColor = document.querySelectorAll(".nav_link");

  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId);

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener("click", () => {
        // show navbar
        nav.classList.toggle("show");
        // change icon
        toggle.classList.toggle("bx-x");
        // add padding to body
        bodypd.classList.toggle("body-pd");
        // add padding to header
        headerpd.classList.toggle("body-pd");
      });
    }
  };

  showNavbar("header-toggle", "nav-bar", "body-pd", "header");

  /*===== LINK ACTIVE =====*/
  //   const linkColor = document.querySelectorAll(".nav_link");
  function colorLink() {
    if (linkColor) {
      linkColor.forEach((l) => {
        l.classList.remove("active");
        $("#" + l.classList[1]).hide();
      });
      this.classList.add("active");
      $("#" + this.classList[1]).show();
    }
  }
  linkColor.forEach((l) => l.addEventListener("click", colorLink));

  // Your code to run since DOM is loaded and ready

  //
  // var add_to_cart =
  //   '<div class="btn btn-success d-block mt-2 mx-auto add_to_cart">Add to Cart</div>';
  // var cart_button =
  //   '<div class="btn mt-2 mx-auto">' +
  //   '<div class="input-group w-50 mx-auto">' +
  //   '<span class="input-group-prepend">' +
  //   '<button type="button" class="btn btn-outline-secondary btn-number minus" disabled="disabled" data-type="minus" data-field="quant[1]">' +
  //   '<span class="fa fa-minus"></span>' +
  //   "</button>" +
  //   "</span>" +
  //   '<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="0" max="40">' +
  //   '<span class="input-group-append">' +
  //   '<button type="button" class="btn btn-outline-secondary btn-number plus" data-type="plus" data-field="quant[1]">' +
  //   '<span class="fa fa-plus"></span>' +
  //   "</button>" +
  //   "</span>" +
  //   "</div>" +
  //   "</div>";
  // $(".add_to_cart").click(function (e) {
  //   store.dispatch(actions.product_added("tshirt", 1000));

  //   $(e.currentTarget).parent().append(cart_button);
  //   $(e.currentTarget).remove();
  //   $(".btn-number").on("click", function (e) {
  //     console.log("h");
  //     e.preventDefault();
  //     var fieldName = $(this).attr("data-field");
  //     var type = $(this).attr("data-type");
  //     var input = $("input[name='" + fieldName + "']");
  //     var currentVal = parseInt(input.val());
  //     if (!isNaN(currentVal)) {
  //       if (type == "minus") {
  //         if (currentVal >= input.attr("min")) {
  //           input.val(currentVal - 1).change();
  //           store.dispatch(actions.product_removed(1));
  //         }
  //         if (parseInt(input.val()) == input.attr("min")) {
  //           // console.log($(this).parents()[3]);
  //           // $($(this).parents()[3]).append(add_to_cart);

  //           $(this).attr("disabled", true);
  //         }
  //       } else if (type == "plus") {
  //         if (currentVal < input.attr("max")) {
  //           input.val(currentVal + 1).change();
  //           store.dispatch(actions.product_added("tshirt", 1000));
  //         }
  //         if (parseInt(input.val()) == input.attr("max")) {
  //           $(this).attr("disabled", true);
  //         }
  //       }
  //     } else {
  //       input.val(0);
  //     }
  //   });
  //   $(".input-number").focusin(function () {
  //     $(this).data("oldValue", $(this).val());
  //   });
  //   $(".input-number").change(function () {
  //     var minValue = parseInt($(this).attr("min"));
  //     var maxValue = parseInt($(this).attr("max"));
  //     var valueCurrent = parseInt($(this).val());

  //     var name = $(this).attr("name");
  //     if (valueCurrent >= minValue) {
  //       $(
  //         ".btn-number[data-type='minus'][data-field='" + name + "']"
  //       ).removeAttr("disabled");
  //     } else {
  //       alert("Sorry, the minimum value was reached");
  //       $(this).val($(this).data("oldValue"));
  //     }
  //     if (valueCurrent <= maxValue) {
  //       $(
  //         ".btn-number[data-type='plus'][data-field='" + name + "']"
  //       ).removeAttr("disabled");
  //     } else {
  //       alert("Sorry, the maximum value was reached");
  //       $(this).val($(this).data("oldValue"));
  //     }
  //   });

  //   $(".input-number").keydown(function (e) {
  //     // Allow: backspace, delete, tab, escape, enter and .
  //     if (
  //       $.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
  //       // Allow: Ctrl+A
  //       (e.keyCode == 65 && e.ctrlKey === true) ||
  //       // Allow: home, end, left, right
  //       (e.keyCode >= 35 && e.keyCode <= 39)
  //     ) {
  //       // let it happen, don't do anything
  //       return;
  //     }
  //     // Ensure that it is a number and stop the keypress
  //     if (
  //       (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&
  //       (e.keyCode < 96 || e.keyCode > 105)
  //     ) {
  //       e.preventDefault();
  //     }
  //   });
  // });
  // // ---------------------------------------------------

  // // ---------------------------------------------------

  // //

  // const render = () => {
  //   let aa = store.getState();
  //   //   let re = aa.map((e) => console.log(e));
  //   $(".items").html("");
  //   // aa.map((e) => {
  //   //   $(".items").append(`<div>
  //   //     name:${e.item}
  //   //     price:${e.price}
  //   // </div>`);
  //   // });
  //   //
  //   aa.map((e) => {
  //     console.log($(".cartItem"));
  //     $(".cartItem").append(
  //       '<div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">' +
  //         '<div class="mr-1">' +
  //         '<img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70" />' +
  //         "</div>" +
  //         '<div class="d-flex flex-column align-items-center product-details">' +
  //         '<span class="font-weight-bold">Basic T-shirt</span>' +
  //         '<div class="d-flex flex-row product-desc">' +
  //         '<div class="size mr-1">' +
  //         '<span class="text-grey">Size:</span>' +
  //         '<span class="font-weight-bold">&nbsp;M</span>' +
  //         "</div>" +
  //         '<div class="color">' +
  //         '<span class="text-grey">Color:</span>' +
  //         '<span class="font-weight-bold">&nbsp;Grey</span>' +
  //         "</div>" +
  //         "</div>" +
  //         "</div>" +
  //         '<div class="d-flex flex-row align-items-center qty">' +
  //         '<i class="fa fa-minus text-danger"></i>' +
  //         '<h5 class="text-grey mt-1 mr-1 ml-1">2</h5>' +
  //         '<i class="fa fa-plus text-success"></i>' +
  //         "</div>" +
  //         "<div>" +
  //         '<h5 class="text-grey">$20.00</h5>' +
  //         "</div>" +
  //         '<div class="d-flex align-items-center">' +
  //         '<i class="fa fa-trash mb-1 text-danger"></i>' +
  //         "</div>" +
  //         "</div>"
  //     );
  //   });

  //   //
  //   console.log(aa);
  // };
  // store.subscribe(render);
  // // $(".plus").click((e) => {
  // //   store.dispatch(actions.product_added("tshirt", 1000));
  // // });
  // // $(".minus").click((e) => {
  // //   store.dispatch(actions.product_removed(1));
  // // });

  // //
});
