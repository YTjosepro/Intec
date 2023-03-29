$(document).ready(function() {
    $('.input-text')
});

$('#task-form').submit((e) =>{
    const postData = {
        id: $('#task-id').val(),
        name: $('#name').val(),
        description: $('#description').val(),
    };
    ajax(url="/conexion")
    let url = edit === false ? 'task-add.php':'task-edit.php';
    console.log(url)
    $.post(url, postData, (response) => {
        console.log(response)
       fetchTask()

       $('#task-form').trigger('reset')
    })
    e.preventDefault();

});