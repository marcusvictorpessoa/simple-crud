<template>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue">
                <!--Logo-->
                <a class="brand-logo center">Atualizar registro</a>
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
            localStorage.removeItem('id_customer')
        },
        logout(){
            localStorage.removeItem('id')
            localStorage.removeItem('id_customer')
            window.location.replace("/")
        }
    }
}
</script>

<style>

</style>