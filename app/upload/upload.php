<div id="form-insert">
    <form method="POST" 
        action="./public/app/pages/upload/uploadDAO.php"
        enctype="multipart/form-data">
        
        <div class="flex-column-start">
            <div class="arquivo-upload">
                <label>Arquivo</label>
                <input type="file" name="arquivo" id="arquivo" />
            </div>
        </div>  

        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
</div>

<div id="flex-container">
    <?php include './public/app/pages/upload/loadImages.php' ?>
</div>


<script>
    $(document).ready(function(){
        $('#enviar').click(function(){
            var image = $('#arquivo').val();
            if (image == '') {
                alert("Campo imagem obrigatório");
                return false;
            } else {
                var extension = $('#arquivo').val().split('.').pop().toLowerCase();

                var imageFormats = ['gif', 'jpeg', 'png', 'jpg'];

                //se não for um formato de imagem válido
                if (jQuery.inArray(extension, imageFormats) == -1) {
                    alert("Invalid Format");
                    $('#arquivo').val('');
                    return false;
                }
            }
        });
    });

</script>