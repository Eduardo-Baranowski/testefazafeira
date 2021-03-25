<template>


    <header>

        <nav class="container">

            <a href="/"><img id="logo" src="">FazAFeira</a>
            <img v-on:click="openMenu" alt="Abrir menu" id="menu-button" src="https://raw.githubusercontent.com/william-costa/wdev-mock-site-resources/master/assets/images/menu.svg">

            <div id="menu-items" :class="{active:menuActive}">

                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/painel">Painel</a></li>
                    <li><a href="/produto">Cadastrar Produto</a></li>
                </ul>

            </div>

        </nav>

    </header>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>

