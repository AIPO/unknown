<template>
    <div>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item">
                    LOGO
                </a>
                <div class="navbar-menu is-active">
                    <router-link to="/" class="navbar-item">Home</router-link>
                    <router-link to="/about" class="navbar-item">About</router-link>
                </div>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
        </nav>
        <hero></hero>
    </div>
</template>

<script>
    import Hero from './Hero.vue'

    export default {
        name: "main-header",
        components:
            {
                'hero': Hero
            }
    }
</script>

<style scoped>

</style>