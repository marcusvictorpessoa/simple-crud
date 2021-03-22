<template>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue">
                <!--Logo-->
                <a class="brand-logo center">Lista de registros</a>
                <!--options-->
                <ul class="right">
                    <li><a @click="logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>

export default {   
    methods:{
        logout(){
            localStorage.removeItem('id')
            window.location.replace("/")
        }
    }
}
</script>

<style>

</style>