<template>
    <div>
        <router-link :to="{name: 'route1'}">Route1</router-link>
        <router-link :to="{name: 'route2'}">Route2</router-link>
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
