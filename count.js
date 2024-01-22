function loadNotification() {
    setInterval(function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("notification").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "notifications.php", true);
        xhttp.send();

    }, 1000)

}

loadNotification();

function loadDoc() {
    setInterval(function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("counting").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "counter.php", true);
        xhttp.send();

    }, 1000)

}

loadDoc();


//hide dropdown
function showDrop(){
    document.getElementById("dropdown").style.display="block";
}
function hideDrop(){
    document.getElementById("dropdown").style.display = 'none';
}