let json;
let ready = false;

fetch("https://ddragon.leagueoflegends.com/cdn/16.5.1/data/en_US/champion.json")
    .then(res => res.json())
    .then(data => {
        json = data;
        ready = true;
    });

window.addEventListener("DOMContentLoaded", () => {
    document
        .getElementById("button")
        .addEventListener("click", showChamp);
});

function showChamp() {
    let name = document.getElementById("input").value;

    let url =
        "https://ddragon.leagueoflegends.com/cdn/img/champion/loading/" +
        name +
        "_0.jpg";

    document.getElementById("image").src = url;

    stat_champion();
}

function stat_champion() {
    let name = document.getElementById("input").value;

    const champ = json.data[name];

    document.getElementById("name").textContent =
        champ.name;

    document.getElementById("health").textContent =
        champ.stats.hp + " HP";

    document.getElementById("armor").textContent =
        champ.stats.armor + " Armor";

    document.getElementById("damage").textContent =
        champ.stats.attackdamage + " Damage";
}