$(function () {
    var num1 = $("#a").html();
    if (num1.length > 25) {
        $("#a").html(num1.substr(0, 25) + "......");
    }
    var num2 = $("#b").html();
    if (num2.length > 25) {
        $("#b").html(num2.substr(0, 25) + "......");
    }
    var num3 = $("#c").html();
    if (num3.length > 25) {
        $("#c").html(num3.substr(0, 25) + "......");
    }
    var num4 = $("#d").html();
    if (num4.length > 25) {
        $("#d").html(num4.substr(0, 25) + "......");
    }
});