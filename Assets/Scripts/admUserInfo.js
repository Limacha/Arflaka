// console.log("admUserInfo.js");

function selectChange() {
    var selectRole = document.getElementById("selectRole");

    //changer la couleur du select si s'est l'element de base
    if (textRole.innerHTML == selectRole.value) {
        selectRole.style.color = "red";
    } else {
        selectRole.style.color = "black";
    }
}

function edit(id) {
    var editBtn = document.getElementById(id);
    var saveBtn = document.getElementById("save" + id.substring(4));

    // save la valeur de basse
    saveBtn.value = document.getElementById("text" + id.substring(7)).textContent;

    if (id.substring(7) == "Role") {
        var textRole = document.getElementById("textRole");
        var selectRole = document.getElementById("selectRole");

        // changer d'element afficher
        textRole.style.display = "none";
        selectRole.style.display = "block";

        // definir l'option selectioner + couler des options
        for (var i = 0; i < selectRole.options.length; i++) {
            if (selectRole.options[i].text == saveBtn.value) {
                selectRole.options[i].selected = true;
                selectRole.options[i].style.color = "red";
            } else {
                selectRole.options[i].style.color = "black";
            }
        }

        // definir la couleur du select
        selectRole.style.color = "red";

    } else if (id.substring(7) == "Fla") {
        var textFla = document.getElementById("textFla");
        var flaEdit = document.getElementById("flaEdit");

        // changer d'element afficher
        textFla.style.display = "none";
        flaEdit.style.display = "block";

    } else if (id.substring(7) == "Arka") {
        var textArka = document.getElementById("textArka");
        var arkaEdit = document.getElementById("arkaEdit");

        // changer d'element afficher
        textArka.style.display = "none";
        arkaEdit.style.display = "block";
    }

    //changer le btn
    editBtn.style.display = "none";
    saveBtn.style.display = "flex";
}

function save(id) {
    var saveBtn = document.getElementById(id);
    var editBtn = document.getElementById("edit" + id.substring(4));

    if (id.substring(7) == "Role") {
        var textRole = document.getElementById("textRole")
        var selectRole = document.getElementById("selectRole")

        // changement de l'element afficher
        textRole.style.display = "block";
        selectRole.style.display = "none";


        if (selectRole.value != textRole.innerHTML) {
            var alt = document.getElementById('avatar').alt;
            // changer la valeur dans la bdd
            ajaxPost(textRole, "/Ajax/ajaxAdmUserInfo.php", "userRole=" + selectRole.value + "&&id=" + alt);
        }


    } else if (id.substring(7) == "Fla") {
        var textFla = document.getElementById("textFla");
        var flaEdit = document.getElementById("flaEdit");

        // changement de l'element afficher
        textFla.style.display = "block";
        flaEdit.style.display = "none";
    } else if (id.substring(7) == "Arka") {
        var textArka = document.getElementById("textArka");
        var arkaEdit = document.getElementById("arkaEdit");

        // changement de l'element afficher
        textArka.style.display = "block";
        arkaEdit.style.display = "none";
    }
    saveBtn.style.display = "none";
    editBtn.style.display = "flex";
}