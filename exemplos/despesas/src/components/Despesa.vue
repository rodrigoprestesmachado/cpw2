<template>
    <div>
        {{ despesa.descricao }} - {{ despesa.categoria }} - R$ {{ despesa.valor }} - {{ despesa.data }}
        <button @click="remover(despesa.id)">Remover</button>

        <div class="notification is-link" v-if="despesaRemovida">
            <button class="delete" @click="closeButton(despesa.id)"></button>
            Despesa {{ despesa.descricao }} removida
        </div>

    </div>
</template>
<script>
export default {
    name: 'Despesa',
    data() {
        return {
            despesaRemovida: false
        };
    },
    props: {
        despesa: {
            type: Object,
            required: true
        }
    },
    methods: {
        remover(id) {
            console.log('Removendo despesa com id:', id);
            fetch(`http://localhost:3000/despesas/${id}`, {
                method: 'DELETE'
            })
                .then(response => {
                    if (response.ok) {
                        this.despesaRemovida = true;

                    } else {
                        console.error('Erro ao remover despesa');
                    }
                });
        },
        closeButton(id) {
            this.despesaRemovida = false;
            this.$emit('remover-despesa', id);
        }
    }

}
</script>
<style></style>