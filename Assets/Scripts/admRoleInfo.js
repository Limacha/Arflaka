// console.log("admUserInfo.js");

function switchChange(id) {
    var switchChange = document.getElementById(id);
    var saveBtn = document.getElementById("saveBtn");

    var saveDiv = document.getElementById("saveDiv");
    var json = JSON.parse(saveBtn.value);

    // creation du json avec toute les valeurs modif
    if (switchChange.value != switchChange.checked) {
        json[id] = switchChange.checked;
    } else if (json.hasOwnProperty(id)) {
        delete json[id];
    }
    console.log(json);
    saveBtn.value = JSON.stringify(json);

    //affichage popup save
    if (Object.keys(json).length == 0) {
        saveDiv.style.display = 'none';
    } else {
        saveDiv.style.display = 'flex';
    }
}

function save(roleId) {
    var saveBtn = document.getElementById("saveBtn");
    var saveDiv = document.getElementById("saveDiv");
    var json = JSON.parse(saveBtn.value);
    var argu = "";
    console.log(json);

    Object.keys(json).forEach(prop => {
        if (json[prop]) {
            argu += prop + "=1 &&";
        } else {
            argu += prop + "=0 &&";
        }
    });
    // changer la valeur dans la bdd
    ajaxPost(document.getElementById("error"), "/Ajax/ajaxAdmRoleInfo.php", argu + "roleId=" + roleId);

    Object.keys(json).forEach(prop => {
        if (json[prop]) {
            document.getElementById(prop).value = "1";
        } else {
            document.getElementById(prop).value = "0";
        }
    });

    saveBtn.value = '{}';
    saveDiv.style.display = 'none';
    /*
    let obj = { check1: false, check2: true, otherProp: 123 };
    let checks = {};
    
    Object.keys(obj).forEach(prop => {
      if (prop.startsWith('check')) {
        checks[prop] = obj[prop];
      }
    });
    
    console.log(checks);
    // Output: { check1: false, check2: true }*/


    /*
    var saveBtn = document.getElementById(id);
    var editBtn = document.getElementById("edit" + id.substring(4));

    if (id.substring(7) == "Role") {
        var textRole = document.getElementById("textRole")
        var selectRole = document.getElementById("selectRole")

        if (selectRole.value != textRole.innerHTML) {
            var alt = document.getElementById('avatar').alt;
            // changer la valeur dans la bdd
            ajaxPost(textRole, "/Ajax/ajaxAdmUserInfo.php", "userRole=" + selectRole.value + "&&id=" + alt);
        }

        // changement de l'element afficher
        textRole.style.display = "block";
        selectRole.style.display = "none";

    } else if (id.substring(7) == "Fla") {
        var textFla = document.getElementById("textFla");
        var flaEdit = document.getElementById("flaEdit");

        if (flaEdit.value != textFla.innerHTML) {
            var alt = document.getElementById('avatar').alt;
            // changer la valeur dans la bdd
            ajaxPost(textFla, "/Ajax/ajaxAdmUserInfo.php", "userFla=" + flaEdit.value + "&&id=" + alt);
        }

        // changement de l'element afficher
        textFla.style.display = "block";
        flaEdit.style.display = "none";

    } else if (id.substring(7) == "Arka") {
        var textArka = document.getElementById("textArka");
        var arkaEdit = document.getElementById("arkaEdit");

        if (arkaEdit.value != textArka.innerHTML) {
            var alt = document.getElementById('avatar').alt;
            // changer la valeur dans la bdd
            ajaxPost(textArka, "/Ajax/ajaxAdmUserInfo.php", "userArka=" + arkaEdit.value + "&&id=" + alt);
        }

        // changement de l'element afficher
        textArka.style.display = "block";
        arkaEdit.style.display = "none";

    }
    saveBtn.style.display = "none";
    editBtn.style.display = "flex";*/
}

function reset() {

}