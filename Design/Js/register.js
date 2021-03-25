/*
function packchoosing() {
var duree = document.querySelector("#duree");
if (document.getElementById('programme').options[document.getElementById('programme').selectedIndex].value == "Regular Pack") {

    document.getElementById('capital').innerHTML += `
    <option value="1000">450.000 f cfa / 1000$</option>
    <option value="1000">450.000 f cfa / 1000$</option>
    <option value="1000">450.000 f cfa / 1000$</option>
    `

}
}

packchoosing();*/
    if (document.getElementById('programme').options[0].selectedIndex == "Regular Pack") {
alert('running');
    document.getElementById('capital').style.backgroundColor = 'black';
}

/*
* Remplace le contenu du select désigné par la liste présente dans data.
* @param idSelect identifiant du select à modifier
* @param data liste associative (clé/valeur) des values et texte des options à créer
* @param selectedKey la clé selectionnée
*/
/*
function updateComboBox (idSelect,data,selectedKey) {
	var monSelect = document.getElementById(idSelect);
	monSelect.options.length = 0;
	var selected;
	i=0;
	for (var key in data) {
		// permet de choisir le champs à definir par defaut
		if (selectedKey == key) {
			selected = i;
		}
		monSelect.options[monSelect.length] = new Option(data[key],key);
		i++;
	}
	//permet de positionner la combo au bon champs
	monSelect.selectedIndex = selected;
}*/