<template>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card mb-3">
                  <div class="card-header">Busca de Marcas</div>

                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        
                        <input-component titulo="ID" id="inputID" id-help="idHelp" texto-ajuda="Opcional. Informe o ID do registro">
                        <input type="number" class="form-control" id="InputId" aria-describedby="IdHelp" placeholder="ID">
                        </input-component>
                        
                        </div>
                        <div class="col-md-6 mb-3">

                          <input-component titulo="Nome da marca" id="InputNome" id-help="nomeHelp" texto-ajuda="Opcional. Informe o nome da marca">
                          <input type="text" class="form-control" id="InputNome" aria-describedby="nomeHelp" placeholder="Nome da marca">
                          </input-component>

                        </div>
                    </div>
                  </div>
                  <div class="card-footer">
                        <button type="submit" class="btn btn-primary bt-sm float-end">Pesquisar</button>
                  </div>
              </div>

                <!-- CARD LISTAGEM -->
                <div class="card">
                      <div class="card-header">Relação de marcas</div>
                        <div class="card-body">
                          <tabela-component></tabela-component>
                        </div>
                          <div class="card-footer">
                            <button type="button" class="btn btn-primary bt-sm float-end">Adicionar</button>
                        </div>
                      </div>
                </div>
                <!-- CARD LISTAGEM -->

            </div>
      </div>
</template>

<script>
    
</script>