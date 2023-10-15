<template>
  <div class="form-gropu">
    <label :for="id" class="form-label">{{titulo}}</label>
    <slot></slot> <!--Pega o cinteudo interno presente dentro da teg de componente e passa aqui-->
    <div :id="IdHelp" class="form-text-average text-muted">{{textoAjuda}}</div>
  </div>
</template>

<script>
    export default {
      props: ['id', 'titulo', 'idHelp', 'textoAjuda']
    }
</script>