<template>
    <div>
        <router-link :to="{name: 'breed.create'}" class="btn btn-primary">Add</router-link>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Age average</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <template v-if="breeds" v-for="breed in breeds">
                <tr :class="isEdit(breed.id) ? 'd-none' : ''">
                    <td>{{ breed.name }}</td>
                    <td>{{ breed.description }}</td>
                    <td>{{ breed.age_average }}</td>
                    <td>
                        <a href="#" class="btn btn-success" @click.prevent="editBreed(breed)">Edit</a>
                        <a href="#" class="btn btn-danger" @click.prevent="deleteBreed(breed.id)">Delete</a>
                    </td>
                </tr>
                <tr :class="isEdit(breed.id) ? '' : 'd-none'">
                    <td><input v-model="name" type="text" class="form-control"></td>
                    <td><textarea v-model="description" type="text" class="form-control"></textarea></td>
                    <td><input v-model="age_average" type="number" class="form-control"></td>
                    <td>
                        <a href="#" class="btn btn-success" @click.prevent="updateBreed(breed.id)">Update</a>
                    </td>
                </tr>
            </template>

            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            breeds: [],
            breedId: null,
            name: '',
            description: '',
            age_average: null
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
        },
        editBreed(breed) {
            this.breedId = breed.id
            this.name = breed.name
            this.description = breed.description
            this.age_average = breed.age_average
        },
        isEdit(id) {
            return this.breedId === id
        },
        updateBreed(id) {
            axios.patch(`/api/breeds/${id}`, {name: this.name, description: this.description, age_average: this.age_average})
                .then( res => {
                    this.breedId = false
                    this.getBreeds()
                })
        },
        deleteBreed(id) {
            axios.delete(`/api/breeds/${id}`)
                .then( res => {
                    this.getBreeds()
                })
        }
    }
}
</script>

<style scoped>

</style>
