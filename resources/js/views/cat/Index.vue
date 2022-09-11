<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Breed</th>
            </tr>
            </thead>
            <tbody>
            <tr v-if="cats" v-for="cat in cats">
                <td>{{ cat.name }}</td>
                <td>{{ cat.age }}</td>
                <td>{{ cat.breed.name }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            cats: []
        }
    },
    mounted() {
        this.getCats()
    },
    methods: {
        getCats() {
            axios.get('/api/cats')
                .then( res => {
                    this.cats = res.data.data
                })
        }
    }
}
</script>

<style scoped>

</style>
