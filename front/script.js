console.log('Get Ready')


$(document).ready(()=>{
    buscar_empresa()
    console.log('Jquery is also ready')

    $(document).on('click', '.empresa-item', function () {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('empresaID');
        console.log(element, id)
        $.post('../back/editar-empresas.php', {id}, function (response){
            const empresa = JSON.parse(response)
            $('#cc').val(empresa.cc);
            $('#nombre_input').val(empresa.nombre);
            $('#telefono_input ').val(empresa.telefono);
            $('#correo_input').val(empresa.correo);
            $('#direccion_input').val(empresa.ireccion);
            $('#empresa-input').val(empresa.id);
            buscar_empresa()
            edit = true;
            
        })
    })
    
    $(".empresa_form").submit((e)=>{

        const data = {
            'CC_NIT': $(".cc").val(),
            'nombre': $(".nombre_input").val(),
            'direccion':$(".direccion_input").val(),
            'telefono': $(".telefono_input").val(),
            'correo': $(".correo_input").val(),
        }
        url = '/intec/back/agregar.php'
        console.log(data)
        $.post(url, data,(response)=>{
            console.log(response)
            buscar_empresa()
        })
    

        // console.log($(".cc").val())
        // console.log($(".nombre_input").val())
        // console.log($(".direccion_input").val())
        // console.log($(".telefono_input").val())
        // console.log($(".correo_input").val())
        // console.log('Formulario enviado');
        
    })
    function buscar_empresa(){}
        $('.td-hide').hide();
        $.ajax({
            type: "GET",
            url: "../back/colsu-empresa.php",
            success: function (response) {
                let empresas = JSON.parse(response)
                let fila = "";
                empresas.forEach(empresas =>{
                    fila = `
                    <tr empresaID="${empresas.ID}"
                        <td class="td-hide d-none">${empresas.ID}</td>
                        <td>
                            <a href="#" class="empresa-item">
                            ${empresas.CC_NIT}
                            </a>
                        </td>
                        <td>${empresas.nombre}</td>
                        <td>${empresas.direccion}</td>
                        <td>${empresas.telefono}</td>
                        <td>${empresas.correo}</td>
                    </tr>
                    `
                    var btn = document.createElement("TR");
                    btn.innerHTML=fila;
                    document.getElementById("empresas").appendChild(btn);	
                })
                
                $('#paginacion').html(html);
            }
        });
    })
    // $()




