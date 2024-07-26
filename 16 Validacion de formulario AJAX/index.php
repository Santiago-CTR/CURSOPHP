<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario Validacion AJAX</title>
</head>
<body>
    <h1>Validacion de formulario con AJAX</h1>
    <form class="form" id="form">
        <div class="control">
            <input type="text" name="name" placeholder="Nombre">
            <span data-key="name"></span>
        </div>
        <div class="control">
            <input type="text" name="datebirt" placeholder="Fecha de nacimiento">
            <span data-key="datebirt"></span>
        </div>
        <div class="control">
            <input type="text" name="email" placeholder="Email">
            <span data-key="email"></span>
        </div>
        <input type="submit">
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            let form = $('#form');
            form.submit(function(){
                $('span').text('');
                $.ajax({
                    url: 'procesar.php',
                    method: 'POST',
                    data: form.serialize(),
                    success: function(r){
                        if(!r.response){
                            for(let k in r.errors){
                                $("span[data-key="+ k + "]").text(r.errors[k]);
                            }
                        }else{
                            console.log("Success")
                        }
                    },
                    dataType: 'json',
                })
                return false;
            })
        })
    </script>
</body>
</html>