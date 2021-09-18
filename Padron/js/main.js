//peticion en javascript//

var formulario = document.getElementById('form')
var respuesta = document.getElementById('respuesta')

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('me diste un click');

    var datos = new FormData(formulario)
    console.log(datos)
    console.log(datos.get('DNI'))
    console.log(datos.get('sexo'))
    console.log(datos.get('provincia'))

    //sirve para mandar la peticion

    fetch('prog.php',{
        method: 'POST',
        body: datos,
    })
        .then(res => res.json())//respuesta con un alerten javascript
        .then(data => {
            console.log(data)
            if(data == 'error'){
                respuesta.innerHTML = 
                <div class="alert alert-danger" role="alert">
                    llena todos los campos
                </div>   
            }else{  //respuesta en el archivo html
                respuesta.innerHTML = 
                <div class="alert alert-danger" role="alert">
                    llena todos los campos
                </div>
            }
        })
})