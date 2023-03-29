console.log('Get Ready')
$(document).ready(()=>{
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
        url = '/intec/back/agregar_tarea.php'
        console.log(data)
        $.post(url, data,(response)=>{
            console.log(response)
        })
        // console.log($(".cc").val())
        // console.log($(".nombre_input").val())
        // console.log($(".direccion_input").val())
        // console.log($(".telefono_input").val())
        // console.log($(".correo_input").val())
        // console.log('Formulario enviado');
        
    })
})