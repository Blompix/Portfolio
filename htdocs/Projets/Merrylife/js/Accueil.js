// JavaScript pour les flocons de neige
let defaultParams = {
    count: "100",
    minRadius: "10",
    maxRadius: "30",
    minSpeed: "3",
    maxSpeed: "10",
    text: "❄",
    color: "#99ccff",
    zIndex: "1000"
};

let snowfall = new Snowfall();
let form = document.getElementById("form");
let defaultButton = document.getElementById("default");

form.addEventListener("submit", event => {
    event.preventDefault();
    let newParams = {};
    for (let input of form.elements) {
        if (input.name) {
            newParams[input.name] = input.value;
        }
    }
    snowfall.destroy();
    snowfall = new Snowfall(newParams);
});

defaultButton.addEventListener("click", () => {
    snowfall.destroy();
    snowfall = new Snowfall();
    for (let input of form.elements) {
        if (input.name) {
            input.value = defaultParams[input.name];
        }
    }
});
