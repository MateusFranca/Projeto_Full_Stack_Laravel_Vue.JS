<template>
  <div class="form-group">
    <label :for="id" class="form-label">{{titulo}}</label>
    <slot></slot> <!-- Use v-slot para definir slots -->
    <div :id="idHelp" class="form-text- text-muted">{{textoAjuda}}</div>
</div>
</template>

<script>
    export default {
      props: ['id', 'titulo', 'idHelp', 'textoAjuda']
    }
</script>