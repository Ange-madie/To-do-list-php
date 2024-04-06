var add_tache = document.getElementsByClassName("add_categorie");

function create_node(tag, attributes) {
  var node = document.createElement(tag);

  for (var attr in attributes) {
    if (attributes.hasOwnProperty(attr)) {
      node.setAttribute(attr, attributes[attr]);
    }
  }

  return node;
}

add_tache[0].addEventListener("click", function(event) {
    contenue = document.getElementById("content");
    form_tache = create_node("form", {
       "method": "post",
       "action": "add_tache.php",
       "class": "add_tache"
    });
    labelNom = create_node("label", {
        "for": "name"
    });
    labelNom.innerHTML = "Nom: ";
    inputNom = create_node("input", {
        "type": "text",
        "name": "name"
    });
    labelCategorie = create_node("label",{
        "for": "categorie"
    });
    labelCategorie.innerHTML = "Catégorie: ";
    inputCategorie = create_node("input",{
        "type": "text",
        "name": "categorie"
    });
    labelDate = create_node("label", {
        "for": "date"
    });
    labelDate.innerHTML = "A faire le: ";
    inputDate = create_node("input", {
        "type": "text",
        "name": "date"
    });
    labelBut = create_node("label", {
        "for": "but"
    });
    labelBut.innerHTML = "Cette tâche consiste à: ";
    textareaBut = create_node("textarea", {
        "name": "but"
    });
    buttonReset = create_node("input", {
        "type": "reset",
        "value": "Reset",
        "title": "Les champs seront vidés."
    });
    buttonSubmit = create_node("input", {
        "type": "submit",
        "value": "Enregistrer"
    });
    divCommand = create_node("div", {
        "class": "buttons"
    });
    buttonDeleteForm = create_node("button", {
        "class": "Delete"
    });
    buttonDeleteForm.innerHTML = "Delete Form";
    form_tache.appendChild(labelNom);
    form_tache.appendChild(inputNom);
    form_tache.appendChild(labelCategorie);
    form_tache.appendChild(inputCategorie);
    form_tache.appendChild(labelDate);
    form_tache.appendChild(inputDate);
    form_tache.appendChild(labelBut);
    form_tache.appendChild(textareaBut);
    divCommand.appendChild(buttonReset);
    divCommand.appendChild(buttonSubmit);
    divCommand.appendChild(buttonDeleteForm);
    form_tache.appendChild(divCommand);
    contenue.appendChild(form_tache);
    buttonDeleteForm.addEventListener("click", function(event){
        contenue.removeChild(form_tache);
    });
});
