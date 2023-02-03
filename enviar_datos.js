// document.getElementById('enviar').addEventListener('click', function(e){
// e.preventDefault()
// console.log('Enviar')
// let form= document.getElementById('Formulario');
// let data = new FormData(form)

// let url ='./recibir_datos.php';

// fetch(url,{
//     method:'POST',
//     body: data
// }).then(datos => datos.json())
// .then(datosForm =>{
//      console.log(datosForm);
// })

// });

var Formulario =document.getElementById('Formulario');
var respuesta = document.getElementById('Respuesta');
Formulario.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('Enviar')
    var data= new FormData(Formulario);

    let url ='./recibir_datos.php';

fetch(url,{
    method:'POST',
    body: data
}).then(datos => datos.json())
.then(datosForm =>{
     console.log(datosForm);
    if (datosForm === 'error') {
        respuesta.innerHTML= `
        <div class="error">llena todos los campos</div>
        `;
    }else{
      setTimeout(function(){
        respuesta.innerHTML= `
        <div class="correcto">${datosForm}</div>
        `;
        location.href='login.php'
      },1000);
    }


})  
});



