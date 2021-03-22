<template>

    <div class="card">
        <form class="center card-content">
            <div class="col">
                <div class="input-field">
                    <input id="email" type="email" class="validate" required v-model="user.email">
                    <label for="email">E-mail</label>
                </div>
                <div class="input-field">
                    <input id="password" type="password" class="validate" required v-model="user.password">
                    <label for="password">Senha</label>
                </div>
            </div>
        </form>
        <div class="card-action center">
            <button @click="login" class="btn waves-effect waves-light blue">
                Entrar
            </button>
        </div>
    </div>

</template>

<script>
import Users from '../services/users'

export default {

    data(){
       return {
            user:{
                id: 0,
                name: '',
                password: '',
                image: ''
            },
            dados: [],
            cont: 0
       }
    },

    methods:{
        async login(){
            this.dados = await Users.list().then(res => {return res.data})
            
            for(this.cont = 0; this.cont < this.dados.length;this.cont++){
                //console.log(this.dados[this.cont])
                if(this.user.email === this.dados[this.cont].email && this.user.password === this.dados[this.cont].password){
                    this.user = this.dados[this.cont]     
                }
            }

            if (this.user.id === 0 && this.user.name === ""){
                this.user.id = 0
                this.user.email = ""
                this.user.password = ""
                this.user.name = ""
                this.user.image = ""
                return alert("E-mail ou senha incorreto!")
            }

            localStorage.setItem("id",this.user.id)
            this.user.id = 0
            this.user.email = ""
            this.user.password = ""
            this.user.name = ""
            this.user.image = ""
            
            return window.location.href = "/home"
        }
    }

}
</script>

<style>

</style>