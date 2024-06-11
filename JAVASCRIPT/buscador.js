document.addEventListener("DOMContentLoaded", () => {
    document.addEventListener("keyup", e => {
        if (e.target.matches("#buscador")) {

            if (e.key === "Escape") e.target.value = "";

            console.log("Buscando:", e.target.value);

            var items = document.getElementsByClassName("item");

            Array.from(items).forEach(item => {
                var titulo = item.getElementsByClassName("titulo-item")[0];
                var text = titulo.innerText || titulo.textContent;

                if (text.toLowerCase().includes(e.target.value.toLowerCase())) {
                    item.classList.remove("filtro");
                    console.log("Mostrando:", text);
                } else {
                    item.classList.add("filtro");
                    console.log("Ocultando:", text);
                }
            });
        }
    });
});