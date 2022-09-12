<template>
    <div class="w-25">
        <input v-model="name" type="text" class="form-control" placeholder="Name">
        <input v-model="description" type="text" class="form-control" placeholder="Description">
        <input v-model="age_average" type="number" class="form-control" placeholder="Age average">
        <a href="#" class="btn btn-primary" @click.prevent="storeBreed">Add</a>
    </div>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            name: '',
            description: '',
            age_average: null,
        }
    },
    methods: {
        storeBreed() {
            axios.post('/api/breeds', {name: this.name, description: this.description, age_average: this.age_average})
                .then( res => {
                    this.$router.push({name: 'breed.index'})
                })
        },
    }
}
</script>

<style scoped>

</style>
