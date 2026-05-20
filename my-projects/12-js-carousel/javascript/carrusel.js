let images = ["images/avion.webp", "images/bici.webp", "images/coche.webp", "images/tren.webp"];
let position = 0;

function forward() {
    position = position + 1;
    if (position > 3) {
        position = 0;
    }
    document.getElementById("image").src = images[position];
}

function backward() {
    position = position - 1;
    if (position < 0) {
        position = 3;
    }
    document.getElementById("image").src = images[position];
}

document.getElementById("image").src = images[0];