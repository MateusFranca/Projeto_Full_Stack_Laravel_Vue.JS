<template>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">usca de Marcas</div>

                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="InputId" class="form-label">ID</label>
                          <input type="number" class="form-control" id="InputId" aria-describedby="IdHelp" placeholder="ID">
                          <div id="IdHelp" class="form-text-average text-muted">Opcional. Informe o ID do registro</div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="InputNome" class="form-label">Nome</label>
                          <input type="text" class="form-control" id="InputNome" aria-describedby="nomeHelp" placeholder="Nome da marca">
                          <div id="nomeHelp" class="form-text-average text-muted">Opcional. Informe o nome da marca</div>
                        </div>
                    </div>
                  </div>
                  <div class="card-footer">
                        <button type="submit" class="btn btn-primary bt-sm float-right">Pesquisar</button>
                      </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
    
</script>