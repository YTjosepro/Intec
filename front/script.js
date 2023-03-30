console.log('Get Ready')


$(document).ready(()=>{
    console.log('Jquery is also ready')
    function buscar_empresa(){
        $('#lista').DataTable();
        $('.td-hide').hide();
        $.ajax({
            type: "GET",
            url: "../back/empresas_list.php",
            data: "data",
            success: function (response) {
                console.log(response)
                let empresas = JSON.parse(response)
                let template = "";
                empresas.forEach(empresas =>{
                    template += `
                    <tr taskID="${empresas.id}"
                        <td class="td-hide d-none">${empresas.id}</td>
                        <td>
                            <a href="#" class="empresa-item">
                            ${empresas.nombre}
                            </a>
                        </td>
                        <td>${empresas.cc_nit}</td>
                        <td>${empresas.direccion}</td>
                        <td>${empresas.correo}</td>
                    `
                })
            }
        });
    }
    
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

})