<template>
    <div>
        <h1>Lista de Despesas</h1>
        <ul>
            <li v-for="despesa in despesas" :key="despesa.id">
                <Despesa :despesa="despesa" @removerDespesa="removerDespesa" />
            </li>
        </ul>
        <h2>Total: R$ {{ total }}</h2>

    </div>
</template>
<script>

import Despesa from './Despesa.vue';

export default {
    name: 'Application',
    components: {
        Despesa
    },
    data() {
        return {
            despesas: [],
            total: 0
        };
    },
    beforeMount() {
        console.log('Fetching despesas data...');
        fetch('http://localhost:3000/despesas')
            .then(response => response.json())
            .then(data => {
                this.despesas = data;
            });
    },
    methods: {
        removerDespesa(id) {
            this.despesas = this.despesas.filter(despesa => despesa.id !== id);
        }
    },
    watch: {
        despesas: {
            handler(newDespesas) {
                this.total = newDespesas.reduce((acc, despesa) => acc + parseFloat(despesa.valor), 0);
            },
            deep: true,
            immediate: true
        }
    }

}
</script>
<style></style>