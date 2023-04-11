console.log('Get Ready')


$(document).ready(()=>{
    buscar_empresas()
    console.log('Jquery is also ready')

    $(document).on('click', '.empresas-item', function () {
        let element = $(this)[0].parentElement.parentElement;
        let idempresas = $(element).attr('empresasidempresas');
        console.log(element, idempresas)
        $.post('../back/editar-empresass.php', {idempresas}, function (response){
            const empresas = JSON.parse(response)
            $('#cc').val(empresas.cc);
            $('#nombre_input').val(empresas.nombre);
            $('#telefono_input ').val(empresas.telefono);
            $('#correo_input').val(empresas.correo);
            $('#empresas-input').val(empresas.idempresas);
            buscar_empresas()
            edit = true;
            
        })
    })
    
    $(".empresas_form").submit((e)=>{
        console.log("enviado")
        const data = {
            'CC_NIT': $(".cc").val(),
            'nombre': $(".nombre_input").val(),
            'telefono': $(".telefono_input").val(),
            'correo': $(".correo_input").val(),
        }
        url = '/aires/back/agregar.php'
        console.log(data)
        $.post(url, data,(response)=>{
            console.log(response)
            buscar_empresas()
        })
    

        // console.log($(".cc").val())
        // console.log($(".nombre_input").val())
        // console.log($(".telefono_input").val())
        // console.log($(".correo_input").val())
        // console.log('Formulario enviado');
        
    })
    function buscar_empresas(){}
        $('.td-hidempresase').hidempresase();
        $.ajax({
            type: "GET",
            url: "../back/colsu-empresas.php",
            success: function (response) {
                let empresas = JSON.parse(response)
                let fila = "";
                empresas.forEach(empresas =>{
                    fila = `
                    <tr empresasidempresas="${empresas.idempresas}"
                        <td>${empresas.idempresas}</td>
                        <td>${empresas.CC_NIT}</td>
                        <td>${empresas.nombre}</td>
                        <td>${empresas.telefono}</td>
                        <td>${empresas.correo}</td>
                        <td><a href='../back/editarproceso.php?idempresas=${empresas.idempresas}'>EDITAR<a></td>
                        <td><a href='../back/eliminaremp.php?idempresas=${empresas.idempresas}'>ELIMINAR<a></td>
                    </tr>
                    `
                    var btn = document.createElement("TR");
                    btn.innerHTML=fila;
                    document.getElementByid("empresass").appendChild(btn);	
                })
                
            }
        });
    })
    // $()



// incio ventana modal en empresas

var modal = document.getElementById("myModal");
var btn = document.getElementById("mybtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// fin ventana modal en empresas