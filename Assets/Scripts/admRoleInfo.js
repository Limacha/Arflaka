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
}

function reset() {
    var saveBtn = document.getElementById("saveBtn");
    var json = JSON.parse(saveBtn.value);

    Object.keys(json).forEach(prop => {
        document.getElementById(prop).checked = !json[prop];
    });

    saveBtn = '{}';
    document.getElementById("saveDiv").style.display = 'none';
}