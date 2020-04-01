// JavaScript source code
var val1 = false, val2 = false, val3 = false;
$("#click1").click(function () {
    if (val1==false) {
        $("#game1demo").css("display", "block");
        $("#click1").html("COLLAPSE");
        val1 = true;
    }
    else {
        $("#game1demo").css("display", "none");
        $("#click1").html("CLICK HERE TO PLAY THIS GAME");
        val1 = false;
    }
});

$("#click2").click(function () {
    if (val2 == false) {
        $("#game2demo").css("display", "block");
        $("#click2").html("COLLAPSE");
        val2 = true;
    }
    else {
        $("#game2demo").css("display", "none");
        $("#click2").html("CLICK HERE TO PLAY THIS GAME");
        val2 = false;
    }
});
