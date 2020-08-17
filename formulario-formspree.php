<?php 
    include ("templates/header.php");
    include ("templates/navbar.php");
?>

    <!-- container -->
    <div class="container d-flex justify-content-center"  style='padding-top: 5%;'>

        <!-- formulario -->
        <div class="row">
            <div class="col">
                <form action="https://formspree.io/meqrdbod" method="POST">
                    <div class="form-group shadow">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                            <input name="name" type="email" class="form-control" id="InputName" placeholder="Ex: jamersonwalderson@gmail.com">
                        </div>                  
                    </div>
                    <div class="form-group shadow">
                        <label for="inputComment">Me envia uma mensagem falando um pouco de você</label>
                        <textarea name="comment" class="form-control" id="inputComment" rows="5" placeholder="Não sei você, mas gosto de aventura."></textarea>
                    </div>

                    <!-- your other form fields go here -->

                    <button type="submit" class="btn btn-primary shadow w-100">Enviar</button>
                    </form>
            </div>
        </div>
        <!-- /formulario -->

    </div>
    <!-- /container -->

<?php include ("templates/footer.php"); ?>