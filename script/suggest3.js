function showHint3(str) {
    if (str.length == 0) {
        document.getElementById("txtHint3").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint3").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "./getHint3.php?q=" + str, true);
        xmlhttp.send();
    }
}
