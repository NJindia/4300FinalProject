var $ = function(Id) {
    return document.getElementById(Id);
}

let processSubmit = function () {

}

window.onload = function() {
    $("submit").onclick = processSubmit;
}

