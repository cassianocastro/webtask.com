const urlSearchParams = new URLSearchParams(window.location.search);
const params          = Object.fromEntries(urlSearchParams.entries());
var campos            = Object.keys(params);
var ret               = "";
campos.forEach((value, index, array) => {
    ret += value + " = " + params[value] + "<br>";
});
var e = document.getElementById("campos");
e.innerHTML = ret;
