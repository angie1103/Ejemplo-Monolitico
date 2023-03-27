const form = document.querySelector("form");
archivoInput = document.querySelector(".archivo");

form.addEventListener("click", ()=> {
    archivoInput.click();
});
archivoInput.onchange=({target})=>{

    let archivo= target.files[0];
    if(archivo){
        let archivoNombre = archivo.name;
        if(archivoNombre=length>=12){
            let splitNombre = archivoNombre.split(".")
            archivoNombre=splitNombre[0].substring(0,13) + "... ." + splitNombre[i];
        }
        archivoSubir(archivoNombre);
    }
    
}

function archivoSubir(nombre){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "upload.php");
    let datos = new FormData(form);
    xhr.send(datos);
    document.getElementById("area-proceso").style.display="block";
}