<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">
            I'm an example component.

            <!-- Botão para abrir o modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
              Abrir Modal
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Meu Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
          Conteúdo do seu modal vai aqui.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar Alterações</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  
</template>


<script>
</script>
