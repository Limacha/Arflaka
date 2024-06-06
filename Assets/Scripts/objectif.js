function deleteObj(id) {
    ajaxPost(document.getElementById("globalError"), "/Ajax/ajaxArflaka.php", "objId=" + id);
    location.reload();
}