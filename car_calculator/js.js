///https://www.carmax.com/car/16192290

function calculatePayments() {
  var vehiclePrice = $(".vehicle-price").html().replace(",", "");
  intrest = $(".intrest").html().replace(",", "");
  (loanTerm = $(".mdc-select__month li[aria-selected]").data("month")),
    (intRateUp = $(".mdc-select__credit li[aria-selected]").data("up")),
    (intRateDown = $(".mdc-select__credit li[aria-selected]").data("down")),
    (downPayment = $(".mdc-text-field__input").val().replace(",", "")),
    (tradeValue = 0),
    (intrest = parseInt(intrest)),
    (vehiclePrice = parseInt(vehiclePrice)),
    (amount = parseInt(vehiclePrice) + intrest),
    (months = parseInt(loanTerm)),
    (down = parseInt(downPayment)),
    (trade = parseInt(tradeValue)),
    (totalDown = down + trade),
    (annInterestUp = parseFloat(intRateUp)),
    (annInterestDown = parseFloat(intRateDown)),
    (monIntUp = annInterestUp / 1200),
    (monIntDown = annInterestDown / 1200);

  if (!amount) {
    alert("Please add a loan amount");
    return;
  }

  // if(!months){
  //   months = 60;
  //   loanTerm = document.getElementById('loanTerm').value = '60';
  // }

  // if(!downPayment){
  //   down = 0;
  //   downPayment = document.getElementById('downPayment').value = '0';
  // }

  // if(!trade){
  //   trade = 0;
  //   tradeValue = document.getElementById('tradeValue').value = '0';
  // }

  // if(!annInterest){
  //   annInterest = 3.25;
  //   intRate = document.getElementById('intRate').value = '3.25';
  // }

  var calc = (
    (monIntUp + monIntUp / (Math.pow(1 + monIntUp, months) - 1)) *
    (amount - (totalDown || 0))
  ).toFixed(2);
  var calc2 = (
    (monIntDown + monIntDown / (Math.pow(1 + monIntDown, months) - 1)) *
    (amount - (totalDown || 0))
  ).toFixed(2);

  // var paymentResults = document.getElementById('paymentResults');
  // paymentResults.style.display = 'block';
  // paymentResults.innerHTML = '';
  // var results = document.createElement('div');
  // results.innerHTML = '<h1 style="text-align:center">Estimated Monthly Payment is:<br/></h1>' + '<h3 style="text-align:center">$' + calc + '/Month</h3>';

  // Animate the element's value from 0% to 110%:
  // $('.finance').each(function () {
  //     $(this).prop('Counter',0).animate({
  //         Counter: $(this).html()
  //     }, {
  //         duration: 4000,
  //         easing: 'swing',
  //         step: function (now) {
  //             $(this).text(Math.ceil(vehiclePrice + intrest - down));
  //         }
  //     });
  // });
  $(".finance").each(function () {
    var $this = $(this),
      countTo = vehiclePrice + intrest - down;
    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo
      },
      {
        duration: 1000,
        easing: "linear",
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        }
      }
    );
  });
  $(".downamount").each(function () {
    var $this = $(this),
      countTo = Math.round(calc2);
    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo
      },
      {
        duration: 1000,
        easing: "linear",
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        }
      }
    );
  });
  $(".upamount").each(function () {
    var $this = $(this),
      countTo = Math.round(calc);
    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo
      },
      {
        duration: 1000,
        easing: "linear",
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        }
      }
    );
  });
  $(".percentup").each(function () {
    var $this = $(this),
      countTo = annInterestUp;
    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo
      },
      {
        duration: 1000,
        easing: "linear",
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        }
      }
    );
  });
  $(".percentdown").each(function () {
    var $this = $(this),
      countTo = annInterestDown;
    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo
      },
      {
        duration: 1000,
        easing: "linear",
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        }
      }
    );
  });
  // $('.finance').html(vehiclePrice + intrest - down);
  // $('.downamount').html(Math.round(calc2));
  // $('.upamount').html(Math.round(calc));
  // $('.percentup').html(annInterestUp);
  // $('.percentdown').html(annInterestDown);

  // paymentResults.append(results);
}

(function ($) {
  $(document).ready(function () {
    $(
      ".finance-inputs .mdc-select:not(.mdc-select--disabled) .mdc-select__surface"
    ).on("click", function () {
      $(this).next(".mdc-select__menu").toggle();
    });
    $(".mdc-text-field__input").on("keyup", function (e) {
      $(this).val(
        $(this)
          .val()
          .replace(/[^\d.]/g, "")
      );
      var getVal = $(this).val();
      // var $this = $(this);
      $(".discount").html(getVal);
      getVal = parseInt(getVal);
      var originalprice = $(".vehicle-price").html().replace(",", "");
      var intrest = $(".intrest").html().replace(",", "");
      if (parseInt(originalprice) + parseInt(intrest) < getVal) {
        $(".discount").html(parseInt(originalprice) + parseInt(intrest));
        $(".mdc-text-field__input").val(
          parseInt(originalprice) + parseInt(intrest)
        );
        // $(this).val($(this).val().replace(/[^\d.]/g, ''));
      }
      calculatePayments();
    });
    $(".mdc-select__credit li").on("click", function () {
      var getHTML = $(this).html();
      $(this).closest(".mdc-select__credit").hide();
      $(this)
        .attr("aria-selected", true)
        .siblings()
        .removeAttr("aria-selected");
      $(this)
        .closest(".finance-input-credit-score")
        .find(".mdc-select__selected-text")
        .html(getHTML);
      calculatePayments();
    });
    $(".mdc-select__month li").on("click", function () {
      var getHTML = $(this).html();
      $(this).closest(".mdc-select__month").hide();
      $(this)
        .attr("aria-selected", true)
        .siblings()
        .removeAttr("aria-selected");
      $(this)
        .closest(".finance-input-term")
        .find(".mdc-select__selected-text")
        .html(getHTML);
      calculatePayments();
    });
  });
})(jQuery);
