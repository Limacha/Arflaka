// console.log("admUserInfo.js");

/* #region function */
function selectChange() {
    var selectRole = document.getElementById("selectRole");
    if (role == selectRole.value) {
        selectRole.style.color = "red";
    } else {
        selectRole.style.color = "black";
    }
}

function edit(id) {
    var editBtn = document.getElementById(id);
    var saveBtn = document.getElementById("save" + id.substring(4));

    saveBtn.value = document.getElementById("text" + id.substring(7)).textContent;
    if (id.substring(7) == "Role") {
        document.getElementById("textRole").style.display = "none";
        document.getElementById("selectRole").style.display = "block";

        // definir l'objet selectioner
        var selectRole = document.getElementById("selectRole");
        for (var i = 0; i < selectRole.options.length; i++) {
            if (selectRole.options[i].text == role) {
                selectRole.options[i].selected = true;
            }
        }
        selectRole.style.color = "red";

    } else if (id.substring(7) == "Fla") {
        document.getElementById("textFla").style.display = "none";
        document.getElementById("flaEdit").style.display = "block";
    } else if (id.substring(7) == "Arka") {
        document.getElementById("textArka").style.display = "none";
        document.getElementById("arkaEdit").style.display = "block";
    }
    editBtn.style.display = "none";
    saveBtn.style.display = "flex";
}

function save(id) {
    var saveBtn = document.getElementById(id);
    var editBtn = document.getElementById("edit" + id.substring(4));

    console.log(saveBtn.value);
    if (id.substring(7) == "Role") {
        document.getElementById("textRole").style.display = "block";
        document.getElementById("selectRole").style.display = "none";
    } else if (id.substring(7) == "Fla") {
        document.getElementById("textFla").style.display = "block";
        document.getElementById("flaEdit").style.display = "none";
    } else if (id.substring(7) == "Arka") {
        document.getElementById("textArka").style.display = "block";
        document.getElementById("arkaEdit").style.display = "none";
    }
    saveBtn.style.display = "none";
    editBtn.style.display = "flex";
}

/* #endregion */

//Get select object
var selectRole = document.getElementById("selectRole");
for (var i = 0; i < selectRole.options.length; i++) {
    if (selectRole.options[i].selected) {
        var role = selectRole.options[i].text;
    }
}
selectChange();