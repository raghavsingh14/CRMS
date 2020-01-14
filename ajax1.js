function showUser1(str1,str2) {
    if ((str1 == "") && (str2 == "")) {
        document.getElementById("result").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","search_click.php?q="+str1+"&p="+str2,true);
        xmlhttp.send();
    }
}
function showUser(str) {
    if (str == "") {
        document.getElementById("response").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("response_main").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","process_click.php?q="+str,true);
        xmlhttp.send();
    }
}