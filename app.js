
document.getElementById("formLugar").addEventListener("submit", function(e){
    e.preventDefault();

    let datos = new FormData(this);

    fetch("agregar_lugar.php", {
        method: "POST",
        body: datos
    })
    .then(res => res.text())
    .then(data => {

        if (data.trim() === "OK") {
            document.getElementById("mensaje").innerText = "Recomendación agregada ✔";
            this.reset();
            cargarLugares();   
        } else {
            document.getElementById("mensaje").innerText = "Error: " + data;
        }
    });
});

function cargarLugares(){
    fetch("obtener_lugares.php")
    .then(res => res.json())
    .then(data => {

        let html = "";
        data.forEach(lugar => {
            html += `
                <div class="card">
                    <h3>${lugar.nombre}</h3>
                    <span class="categoria">${lugar.categoria}</span>
                    <p>${lugar.descripcion}</p>
                    <small>${lugar.fecha}</small>
                </div>
            `;
        });

        document.getElementById("listaLugares").innerHTML = html;
    })
    .catch(err => {
        console.error("Error cargando lugares:", err);
    });
}

cargarLugares();
