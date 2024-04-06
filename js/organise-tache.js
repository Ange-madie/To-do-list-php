categorie_tache = document.getElementsByTagName("span");
categories = categorie_tache[1];
categoried = [];
l = [];
for(i = 0;i<=categories.id.length;i++){
  if(categories.id[i] !== "-"){
    l.push(categories.id[i]);
  }
  else{
    categoried.push(l.join(""));
    console.log(l.join(""));
    l = [];
  }
}

for(i = 0; i<=categoried.length; i++){
  categorie = document.getElementsByClassName(categoried[i])[0];
  elements_categorie = document.getElementsByClassName(categoried[i]+"-tache");
  for(j = 0; j<=elements_categorie.length; j++){
      if(elements_categorie[j] !== undefined)
        categorie.appendChild(elements_categorie[j]);
  }
}
