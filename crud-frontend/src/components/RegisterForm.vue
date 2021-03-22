<template>
  <div class="card">
        <form class="center card-content">
            <div class="col">
                <div class="input-field">
                    <input id="name" type="text" class="validate" required v-model="user.name">
                    <label for="name">Nome</label>
                </div>
                <div class="input-field">
                    <input id="email" type="email" required v-model="user.email">
                    <label for="email">E-mail</label>
                </div>
                <div class="input-field">
                    <input id="password" type="password" required v-model="user.password">
                    <label for="password">Senha</label>
                </div>
                <div class="input-field">
                    <input id="passwordConfirm" type="password" required v-model="confirmpassword">
                    <label for="passwordConfirm">Confirme sua senha</label>
                </div>
            </div>
        </form>
        <div class="card-action center">
            <button @click="registerUser" class="btn waves-effect waves-light blue">
                Cadastrar
            </button>
        </div>
    </div>
</template>

<script>
import User from '../services/users'

export default {
    data(){
        return {
            user: {
                name: '',
                email: '',
                password: ''
            },
            confirmpassword: ''
        }
    },
    methods:{
        registerUser(){

            //to check if passwords are equals
            if (this.user.password != this.confirmpassword){
                return alert('As senhas devem ser iguais!')
            }

            //create user 
            User.create(this.user).then(res => {
                if (res.status == 200){
                    alert('Usuário registrado!')
                }else{
                    alert('Erro ao registrar usuário!')
                }
            })

            //clear the fields
            this.user.name = ''
            this.user.email = ''
            this.user.password = ''
            this.confirmpassword = ''
        }
    }
}
</script>

<style>

</style>