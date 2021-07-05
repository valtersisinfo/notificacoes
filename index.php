<!DOCTYPE html>
<html>
<head>
  <title>Notificações</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="script.js"></script>

</head>
<body>

  <div class="container-fluid">
    <div class="row">

      <div class="col-12 offset-md-3 col-md-6 offset-xxl-4 col-xxl-4">
        <div class="card mt-2">
          <div class="card-header text-center bg-danger text-white">
            Notificações
          </div>
          <div class="card-body">

            <div class="form-group row permissao">
              <label for="BPermissao" class="col-form-label col-form-label-sm col-5">Solicita a permissão</label>
              <div class="col-7">
                <div class="d-grid">
                  <button id="BPermissao" type="button" class="btn btn-warning">Permitir notificações</button>
                </div>
                <div id="DPermissao" class="form-text text-end mt-0">Click no botão para solicitar permissão</div>
              </div>
            </div>

            <div class="form-group row envio mb-2">
              <label for="ITitulo" class="col-form-label col-form-label-sm col-5">Título: </label>
              <div class="col-7">
                <input id="ITitulo" type="text" class="form-control form-control-sm" aria-describedby="HMensagem" placeholder="Ex. Vai Corinthians!">
                <div id="DTitulo" class="form-text text-end mt-0">Digite um título.</div>
              </div>
            </div>

            <div class="form-group row envio mb-2">
              <label for="TMensagem" class="col-form-label col-form-label-sm col-5">Mensagem: </label>
              <div class="col-7">
                <textarea id="TMensagem" class="form-control form-control-sm" aria-describedby="HMensagem" placeholder="Ex. Este jogo temos que ganhar!"></textarea>
                <div id="DMensagem" class="form-text text-end mt-0">Digite uma mensagem.</div>
              </div>
            </div>

            <div class="form-group row envio mb-2">
              <label for="TLink" class="col-form-label col-form-label-sm col-5">Link: </label>
              <div class="col-7">
                <input id="TLink" type="text" class="form-control form-control-sm" placeholder="Ex. http://acordarcedo.com" pattern="<?php
                    $pattern = '((https?|ftp)://)?'; // SCHEME
                    $pattern .= '([a-z0-9+!*(),;?&=$_.-]+(:[a-z0-9+!*(),;?&=$_.-]+)?@)?'; // User and Pass
                    $pattern .= '([a-z0-9\-\.]*)\.(([a-z]{2,4})|([0-9]{1,3}\.([0-9]{1,3})\.([0-9]{1,3})))'; // Host or IP
                    $pattern .= '(:[0-9]{2,5})?'; // Port
                    $pattern .= '(/([a-z0-9+$_%-]\.?)+)*/?'; // Path
                    $pattern .= '(\?[a-z+&\$_.-][a-z0-9;:@&%=+/$_.-]*)?'; // GET Query
                    $pattern .= '(#[a-z_.-][a-z0-9+$%_.-]*)?'; // Anchor
                    echo $pattern; ?>">
                <div id="DLink" class="form-text text-end mt-0">Digite um link.</div>
              </div>
            </div>

            <div class="form-group row envio">
              <label for="BEnviar" class="col-form-label col-form-label-sm col-5">Enviar a notificação</label>
              <div class="col-7">
                <div class="d-grid">
                  <button id="BEnviar" type="button" class="btn btn-warning">Enviar</button>
                </div>
                <div id="DEnviar" class="form-text text-end mt-0">Click no botão para enviar a notificação</div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</body>
</html>