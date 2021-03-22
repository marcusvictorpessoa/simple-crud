<template>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue">
                <!--Logo-->
                <a class="brand-logo center">Novo registro</a>
                <!--options-->
                <ul class="right">
                    <li><a @click="start">Início</a></li>
                    <li><a @click="logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>

export default {   
    methods:{
        start(){
            window.location.href = "/home"
        },
        logout(){
            localStorage.removeItem('id')
            window.location.replace("/")
        }
    }
}
</script>

<style>

</style>