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
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal">
                              Adicionar
                            </button>
                        </div>
                      </div>
                </div>
                <!-- CARD LISTAGEM -->
            </div>
            <modal-component id="modal" titulo="Adicionar marca">
                <template v-slot:conteudo>
                    <div class="form-group mb-3">
                        <input-component titulo="Nome da marca" id="inputNome" id-help="idHelp" texto-ajuda="Informe o nome da marca">
                        <input type="text" class="form-control" id="inputNome" aria-describedby="idHelp" placeholder="Nome da marca">
                        </input-component>
                    </div>

                    <div class="form-group">
                      <input-component titulo="Imagem" id="novoImagem" id-help="novoImagemHelp" texto-ajuda="Selecione uma imagem no formato PNG, JPG ou JPEG.">
                        <input type="file" class="form-control" id="novoImagem" aria-describedby="novoImagemHelp">
                        </input-component>
                    </div>
                </template>

                <template v-slot:rodape>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </template>

            </modal-component>
      </div>
</template>

<script>
    
</script>