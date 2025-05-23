//codigo: 
// variable donde se va ir acumulando el texto del codigo de barra que se escanea.
//hora_de_salida:
// para controla el tiempo entre teclas. Ayuda a saber cuando termina el escaneo
let codigo = ""
let hora_de_salida = ""
    
document.addEventListener("keydown", function(e){
    //Evitar las teclas como SHIFT, CTRL, ETC.
    // si = 1 , no = 0
    if(e.key.length === 1){
        codigo += e.key;
    }
    console.log(codigo)

});