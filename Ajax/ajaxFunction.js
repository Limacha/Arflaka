function ajaxGet(element, url, argu) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        //verif page fini + reponse pret && statut ok
        if (this.readyState == 4 && this.status == 200) {
            element.innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", url + "?" + argu, true);
    xmlhttp.send();
}

function ajaxPost(element, url, argu) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        //verif page fini + reponse pret && statut ok
        if (this.readyState == 4 && this.status == 200) {
            element.innerHTML = this.responseText;
        }
    }
    xmlhttp.open("Post", url, true);
    //argu post
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(argu);
}