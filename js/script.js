//const button = document.getElementById('enviar');
//const container = document.getElementById('respuesta');

eventListeners();
function eventListeners(){
document.querySelector('#formulario').addEventListener('submit', leerFormulario);
}

function leerFormulario(e){
    e.preventDefault();

    const nombre = document.querySelector('#nombre').value;
    const tipo = document.querySelector('#tipo').value;
    const cantidad = document.querySelector('#cantidad').value;
    const fecha = document.querySelector('#fecha').value;
     
    if(nombre === ""|| tipo===""||cantidad===""||fecha===""){
        alert("Rellene todos los campos");
    } else {
        console.log('Todo lleno');

        /*const infoForm = new FormData();
        infoForm.append('nombre', nombre);
        infoForm.append('tipo', tipo);
        infoForm.append('cantidad', cantidad);
        infoForm.append('fecha', fecha);*/
         

        axios({
            method:'post',
            url:'/php/donador.php',
            data: {
                nombre: nombre,
                tipo:tipo,
                cantidad:cantidad,
                fecha:fecha,
            },
            headers:{
                'Content-Type': 'text/plain;charset=utf-8',
            }
        }).then(function(res){
            console.log(res.data);
        })
        .catch(err=>{
            console.log(err)
        })
    }


}









/*button.addEventListener('click', () =>{
    axios({
        method:'POST',
        url:'http://localhost/axios/php/donador.php',
    }).then(res=>{
        container.innerHTML = (res.data);
        console.log(res.data);
        alert("Datos Enviados");
    }).catch(err=>
        console.log(err))
        alert("Datos no Enviados");
})*/