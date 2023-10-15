<template>
    <div class="container">
        <h2>Cadastro de Produto</h2>
        <form @submit.prevent="salvarProduto">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    v-model="produto.nome"
                    id="nome"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea
                    class="form-control"
                    v-model="produto.descricao"
                    id="descricao"
                    required
                ></textarea>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input
                    type="text"
                    class="form-control"
                    v-model="produto.categoria"
                    id="categoria"
                />
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input
                    type="file"
                    class="form-control"
                    @change="handleFileUpload"
                    id="imagem"
                />
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input
                    type="number"
                    class="form-control"
                    v-model="produto.preco"
                    id="preco"
                    required
                />
            </div>
            <div class="mb-3 form-check">
                <input
                    type="checkbox"
                    class="form-check-input"
                    v-model="produto.disponivel"
                    id="disponivel"
                />
                <label class="form-check-label" for="disponivel"
                    >Disponível</label
                >
            </div>
            <input type="hidden" name="_token" :value="csrfToken" />
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            produto: {
                nome: "",
                descricao: "",
                categoria: "",
                imagem: null,
                preco: null,
                disponivel: false,
            },
            csrfToken: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        };
    },
    methods: {
        salvarProduto() {
            const formData = new FormData();
            formData.append("nome", this.produto.nome);
            formData.append("descricao", this.produto.descricao);
            formData.append("categoria", this.produto.categoria);
            formData.append("imagem", this.produto.imagem);
            formData.append("preco", this.produto.preco);
            formData.append("disponivel", this.produto.disponivel);

            axios
                .post("/produtos", formData)
                .then((response) => {
                    console.log("Produto salvo com sucesso", response.data);
                })
                .catch((error) => {
                    console.error("Erro ao salvar o produto", error);
                });
        },
        handleFileUpload(event) {
            this.produto.imagem = event.target.files[0];
        },
    },
};
</script>

<style scoped>
/* Estilos específicos do componente, se necessário */
</style>
