var incrementPlus;
var incrementMinus;

var buttonPlus  = $(".cart-qty-plus");
var buttonMinus = $(".cart-qty-minus");

var incrementPlus = buttonPlus.click(function() {
    var $n = $(this)
        .parent(".inc-button-container")
        // .parent(".inc-container")
        .find(".qty");
    $n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
        var $n = $(this)
        .parent(".inc-button-container")
        // .parent(".container")
        .find(".qty");
    var amount = Number($n.val());
    if (amount > 0) {
        $n.val(amount-1);
    }
});
