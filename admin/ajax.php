<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ajax / Jquery</title>
    <style>
        #mensaje{                   /*# es objeto o id, . es las clases*/
            width: 200px;
            height: 25px;
            background: #cccccc;
            border-radius: 5px;
            color: #F00;
            font-size: 16px;
            text-align: center;
            font-family: 'Arial';
            line-height: 25px;
            margin-top: 20px;       /*Margen para el elemento (top, bottom, left, right.)*/
            padding: 5px;           /*También funciona para top, bottom, left, right.*/
            display: none;          
        }
    </style>
    <script src="Jquery/jquery-3.3.1.min.js"></script>
    <script>
        function calificaAjax(){
            var calificacion = $('#calificacion').val();
            if (calificacion && calificacion > 0){
                //$('#mensaje').show();
                //$('#mensaje').html('Campos llenos :D');
                //setTimeout("$('#mensaje').hide(); $('#mensaje').html('');",5000);
                $.ajax({
                    url         :   'calificar.php',
                    type        :   'post',
                    dataType    :   'text',
                    data        :   'calificacion='+calificacion,
                    success     :   function(res){
                        console.log(res);
                        $('#mensaje').show();
                        if (res == 1){
                            $('#mensaje').html('Aprobaste :D');
                        }
                        else{
                            $('#mensaje').html('Reprobaste :c');
                        }
                        setTimeout("$('#mensaje').hide(); $('#mensaje').html('');",5000);
                    },error     :   function(){
                        alert('Error archivo no encontrado o inexistente...');
                    }
                });
            }
            else{
                $('#mensaje').show();
                $('#mensaje').html('No has registrado :C');
                setTimeout("$('#mensaje').hide(); $('#mensaje').html('');",5000);
            }
        }
    </script>
</head>
<body>
    <input type="text" name="calificacion" id="calificacion" /><br>
    <a href="javascript:void(0);" onclick="calificaAjax();">
        Calificar
    </a>
    <div id="mensaje"></div>
</body>
</html>