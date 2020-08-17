<?php
include ("templates/header.php");
include ("templates/navbar.php");
?>

<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col">
        <!-- formulario -->
        <form method="post" action="action_page.php">
            <!-- form name -->
            <div class="form-group shadow">
                <div class="input-group-prepend">
                    <div class="input-group-text">Nome</div>
                    <input name="name" type="text" class="form-control" id="InputName" placeholder="Ex: Pedro Álvares Cabral">
                </div>                  
            </div>
            <!-- /form name -->

            <!-- form city -->
            <div class="form-group shadow">
                <div class="input-group-prepend">
                    <div class="input-group-text">Cidade</div>
                    <input name="city" type="text" class="form-control" id="inputCity" placeholder="Ex: Moro no Caribe Brasileiro">
                </div>                    
            </div>
            <!-- /form city -->

            <!-- form comment -->
            <div class="form-group shadow">
                <textarea name="comment" class="form-control" id="inputComment" rows="5" placeholder="Me envia uma mensagem falando um pouco de você não sei você, mas gosto de aventura."></textarea>
            </div>
            <!-- /form comment -->

            <!-- form button -->
            <button type="submit" class="btn btn-primary shadow w-100">Enviar</button>
            <!-- /form button -->
            </fieldset>
        </form>
        <!-- /formulario -->
        </div>
    </div>
</div>

<?php include ("templates/footer.php"); ?>