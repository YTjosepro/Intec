console.log('Get Ready')


$(document).ready(()=>{
    $.extend(true, $.fn.dataTable.defaults, {
        searching: false,
    });
    buscar_empresa()
    console.log('Jquery is also ready')
    
    $(".empresa_form").submit((e)=>{

        e.preventDefault()
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
    function buscar_empresa(pagina){
        var resultados_por_pagina = 10;
        var offset = (pagina - 1) * resultados_por_pagina;
        $('.td-hide').hide();
        $.ajax({
            type: "GET",
            url: "../back/colsu-empresa.php",
            data: {
                resultados_por_pagina: resultados_por_pagina,
                offset: offset
            },
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
                        <td>
                        ${empresas.nombre}
                        </td>
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
    }


})

