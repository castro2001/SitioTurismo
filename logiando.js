
var Login = document.getElementById('Login');
var respuesta = document.getElementById('Respuesta_Login');

Login.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('Logeado')
     var form= new FormData(Login);

    let url ='./ingresando.php';

 fetch(url,{
    method:'POST',
     body: form
 })
 .then(datos => datos.json())
 .then(data=>{
    if(data === 'error'){
        respuesta.innerHTML=`<div class="error">Usuario o Contraseña Incorrecta</div>          `;
    }else{
    respuesta.innerHTML= `
        <div class="correcto">${datosForm}</div>
          `;    }
 })
// .then(datosLogin =>{
//     console.log(datosLogin);
//     if (datosLogin === 'error') {
//         respuesta.innerHTML= `
//         <div class="error">Usuario o Contraseña Incorrecta</div>
//          `;
//     }else{
//          respuesta.innerHTML= `
//         <div class="correcto">${datosForm}</div>
//          `;
    
//     }
    
//  })  
});
