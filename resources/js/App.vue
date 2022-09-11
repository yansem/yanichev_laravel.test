<template>
    <div>
        <router-link :to="{name: 'cat.index'}">Cats</router-link>
        <router-link :to="{name: 'breed.index'}">Breeds</router-link>
    </div>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
