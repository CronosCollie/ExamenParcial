/* COMPLETE THIS WITH JS AND AJAX*/
function getISO (refran){
    //alert(refran);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("frase").value = this.responseText;
        }
    };
    xmlhttp.open("GET", "main.php?refran=" + refran, true);
    xmlhttp.send();
};