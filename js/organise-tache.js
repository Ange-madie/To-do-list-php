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

