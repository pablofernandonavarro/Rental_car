
let returnPlace = document.getElementById('return_place');
let retreatPlace = document.getElementById('retreat_place');

function showProvinces(){
    fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
        .then(function (respuesta) {
            return respuesta.json();
        })
        .then(function (data) {
            let provinces = data.provincias;
            for (province of provinces) {
                let option = document.createElement('option');
                let nombre = document.createTextNode(province.nombre);
                option.appendChild(nombre);
                option.setAttribute('class', 'form-control');
                option.setAttribute('value', province.nombre)
                retreatPlace.appendChild(option);
            }
            for (province of provinces) {
                let option = document.createElement('option');
                let nombre = document.createTextNode(province.nombre);
                option.appendChild(nombre);
                option.setAttribute('class', 'form-control');
                option.setAttribute('value', province.nombre)
                returnPlace.appendChild(option);
            }
        });
}
showProvinces();