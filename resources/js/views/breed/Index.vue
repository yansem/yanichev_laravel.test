<template>
    <div>
        <router-link :to="{name: 'breed.create'}" class="btn btn-primary">Add</router-link>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Age average</th>
            </tr>
            </thead>
            <tbody>
            <tr v-if="breeds" v-for="breed in breeds">
                <td>{{ breed.name }}</td>
                <td>{{ breed.description }}</td>
                <td>{{ breed.age_average }}</td>
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
            breeds: []
        }
    },
    mounted() {
        this.getBreeds()
    },
    methods: {
        getBreeds() {
            axios.get('/api/breeds')
                .then( res => {
                    this.breeds = res.data.data
                })
        }
    }
}
</script>

<style scoped>

</style>
