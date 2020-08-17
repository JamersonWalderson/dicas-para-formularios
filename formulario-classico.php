<?php
include ("templates/header.php");
include ("templates/navbar.php");
?>

    <div class="container  d-flex justify-content-center">
        <!-- formulario -->
        <div class="row">
            <div class="col" style='padding: 50px;'>
                <form class="" >
                    <div class="form-group shadow">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nome</div>
                            <input name="name" type="text" class="form-control" id="InputName" placeholder="Ex: Pedro Álvares Cabral">
                        </div>                  
                    </div>
                    <div class="form-group shadow">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Cidade</div>
                            <input name="city" type="text" class="form-control" id="inputCity" placeholder="Ex: Moro no Caribe Brasileiro">
                        </div>                    
                    </div>
                    <div class="form-group shadow">
                        <textarea name="comment" class="form-control" id="inputComment" rows="5" placeholder="Me envia uma mensagem falando um pouco de você não sei você, mas gosto de aventura."></textarea>
                    </div>
            
                    <button type="submit" class="btn btn-primary shadow w-100">Enviar</button>
                    </fieldset>
                </form>
            </div>
            <!-- /formulario -->      
        </div>    
    </div>

<?php include ("templates/footer.php"); ?>