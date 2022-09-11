<template>
    <div class="w-25">
        <input v-model="name" type="text" class="form-control" placeholder="Name">
        <input v-model="age" type="number" class="form-control" placeholder="Age">
        <select v-model="breed" class="form-select">
            <option selected disabled :value="null">Select breed</option>
            <template v-for="breed in breeds">
                <option :value="breed.id">{{ breed.name }}</option>
            </template>
        </select>
        <a href="#" class="btn btn-primary" @click.prevent="storeCat">Add</a>
    </div>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            name: '',
            age: null,
            breed: null,
            breeds: []
        }
    },
    mounted() {
        this.getBreeds()
    },
    methods: {
        storeCat() {
            axios.post('/api/cats', {name: this.name, age: this.age, breed_id: this.breed})
                .then( res => {
                    this.$router.push({name: 'cat.index'})
                })
        },
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
