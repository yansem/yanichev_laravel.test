<template>
    <div>
        <router-link :to="{name: 'cat.create'}" class="btn btn-primary">Add</router-link>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Image (click name)</th>
                <th>Age</th>
                <th>Breed</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <template v-if="cats" v-for="cat in cats">
                <tr :class="isEdit(cat.id) ? 'd-none' : cat.breed.age_average === cat.age ? 'bg-warning' : ''">
                    <td><a href="#" @click.prevent="getImage(cat.id)">{{ cat.name }}</a></td>
                    <td><img :src="cat.image" width="100" height="100" alt="" :class="cat.image ? '' : 'd-none'"></td>
                    <td>{{ cat.age }}</td>
                    <td>{{ cat.breed.name }}</td>
                    <td>
                        <a href="#" class="btn btn-success" @click.prevent="editCat(cat)">Edit</a>
                        <a href="#" class="btn btn-danger" @click.prevent="deleteCat(cat.id)">Delete</a>
                    </td>
                </tr>
                <tr :class="isEdit(cat.id) ? '' : 'd-none'">
                    <td><input v-model="name" type="text" class="form-control"></td>
                    <td><input v-model="age" type="text" class="form-control"></td>
                    <select v-model="breed" class="form-select">
                        <template v-for="breed in breeds">
                            <option :value="breed.id">{{ breed.name }}</option>
                        </template>
                    </select>
                    <td>
                        <a href="#" class="btn btn-success" @click.prevent="updateCat(cat.id)">Update</a>
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
            cats: [],
            breeds: [],
            name: '',
            age: null,
            breed: null,
            catId: null,
            catImage: ''
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
        },
        getBreeds() {
            axios.get('/api/breeds')
                .then( res => {
                    this.breeds = res.data.data
                })
        },
        editCat(cat) {
            this.getBreeds()
            this.catId = cat.id
            this.name = cat.name
            this.age = cat.age
            this.breed = cat.breed.id
        },
        isEdit(id) {
            return this.catId === id
        },
        updateCat(id) {
            axios.patch(`/api/cats/${id}`, {name: this.name, age: this.age, breed_id: this.breed})
                .then( res => {
                    this.catId = false
                    this.getCats()
                })
        },
        deleteCat(id) {
            axios.delete(`/api/cats/${id}`)
                .then( res => {
                    this.getCats()
                })
        },
        getImage(catId) {
            axios.get('/api/cats/image')
                .then( res => {
                    this.cats.forEach( cat => {
                        if (cat.id === catId) {
                            cat.image = res.data[0].url;
                        }
                    })
                    // this.catImage = res.data[0].url
                })
        }
    }
}
</script>

<style scoped>

</style>
