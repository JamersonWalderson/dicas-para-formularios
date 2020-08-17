<?php
include ("templates/header.php");
include ("templates/navbar.php");
?>
<head>

<!-- Script para o funcionamento da captchar -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<!-- formulario -->
<form method="post" class="" >
    <!-- form name-->
    <div class="form-group shadow">
        <div class="input-group-prepend">
            <div class="input-group-text">Nome</div>
            <input name="name" type="text" class="form-control" id="InputName" placeholder="Ex: Pedro Álvares Cabral">
        </div>                  
    </div>
    <!-- /form name-->

    <!-- form city-->
    <div class="form-group shadow">
        <div class="input-group-prepend">
            <div class="input-group-text">Cidade</div>
            <input name="city" type="text" class="form-control" id="inputCity" placeholder="Ex: Moro no Caribe Brasileiro">
        </div>                    
    </div>
    <!-- /form city-->

    <!-- form comment -->
    <div class="form-group shadow">
        <textarea name="comment" class="form-control" id="inputComment" rows="5" placeholder="Me envia uma mensagem falando um pouco de você não sei você, mas gosto de aventura."></textarea>
    </div>
    <!-- /form comment -->

    <!-- form captchar -->
    <div class="g-recaptcha" data-sitekey="6LctNMAZAAAAAJ-5RAcuuePyguYoon_QiRaF2DoL"></div>
    <!-- /form captchar -->

    <button type="submit" class="btn btn-primary shadow w-100">Enviar</button>
    </fieldset>
</form>
<!-- /formulario -->   
            

<?php include ("templates/footer.php"); ?>