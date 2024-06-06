<!-- <button>bibi</button>
<script>
    alert("cheee");
    var confirmation = confirm('Are you sure you want to delete this item?');
    if (confirmation) {
        var age = prompt('Please enter your age:');
        console.log(age);
    }
</script> -->
<button id="open">open</button>

<script>
    const dialog = document.getElementById("popup");
    const showButton = document.getElementById("open");
    var closeButton = document.getElementById("close");

    // Le bouton "Afficher la fenêtre" ouvre le dialogue
    showButton.addEventListener("click", () => {
        dialog.showModal();
        dialog.style.display = "flex";
        while (dialog.hasChildNodes()) {
            dialog.removeChild(dialog.firstChild);
        }
        var node = document.createElement("button");
        node.textContent = "close";
        node.id = "close";
        node.addEventListener("click", () => {
            dialog.close();
            dialog.style.display = "none";
        });;
        dialog.appendChild(node);
    });

    // Le bouton "Fermer" ferme le dialogue
    closeButton.addEventListener("click", () => {
        dialog.close();
        dialog.style.display = "none";
    });
</script>