<template>
  <div>
      <navigation-bar-add />
      <br>
      <br>
      <div class="container">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s4">
                <input placeholder="nome" id="name" type="text" class="validate" required v-model="customer.name">
                <label for="name">Nome</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="ex: 0872541" id="medical_record" type="text" class="validate" v-model="customer.medical_record">
                <label for="medical_record">Registro médico</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="(99) 3333-3333" id="phone" type="text" class="validate" v-model="customer.phone">
                <label for="phone">Telefone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                <input placeholder="(99) 99999-9999" id="cel" type="text" class="validate" v-model="customer.cel">
                <label for="cel">Celular</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="63030-370" id="zipcode" type="text" class="validate" v-model="customer.zipcode">
                <label for="zipcode">Cep</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="ex: Quadra 20, Setor D" id="address" type="text" class="validate" v-model="customer.address">
                <label for="address">Endereço</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input placeholder="complemento" id="complement" type="text" class="validate" v-model="customer.complement">
                <label for="complement">Complemento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                <input placeholder="ex: 10" id="adress_number" type="text" class="validate" v-model="customer.address_number">
                <label for="address_number">Número</label>
                </div>
                <div class="input-field col s3">
                <input placeholder="ex: Dirceu" id="district" type="text" class="validate" v-model="customer.district">
                <label for="district">Bairro</label>
                </div>
                <div class="input-field col s3">
                <input placeholder="ex: Piauí" id="state" type="text" class="validate" v-model="customer.state">
                <label for="state">Estado</label>
                </div>
                <div class="input-field col s3">
                <input placeholder="ex: Teresina" id="city" type="text" class="validate" v-model="customer.city">
                <label for="Cidade">Cidade</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                <input placeholder="ex 05/04/1990" id="birth" type="text" class="validate" v-model="customer.birth">
                <label for="birth">Data de nascimento</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="ex: 20" id="age" type="text" class="validate" v-model="customer.age">
                <label for="age">Idade</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="ex: Masculino" id="gender" type="text" class="validate" v-model="customer.gender">
                <label for="gender">Gênero</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                <input placeholder="ex: 0.000.000" id="rg" type="text" class="validate" v-model="customer.rg">
                <label for="rg">Rg</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="ex: SSP" id="organ_rg" type="text" class="validate" v-model="customer.organ_rg">
                <label for="organ_rg">Orgão</label>
                </div>
                <div class="input-field col s4">
                <input placeholder="000.000.000-00" id="cpf" type="text" class="validate" v-model="customer.cpf">
                <label for="cpf">Cpf</label>
                </div>
            </div>
        </form>
      </div>
      <div class="fixed-action-btn">
        <button @click="CreateCustomer" class="btn btn-floating waves-effect waves-light btn-large blue">
          <i class="material-icons">save</i>
        </button>
      </div>
  </div>
</template>

<script>
import NavigationBarAdd from '../../components/NavigationBarAdd'
import Customers from '../../services/customers'

export default {
    data(){
        return {
            customer:{
                name: '',
                medical_record: '',
                phone: '',
                cel: '',
                zipcode: '',
                address: '',
                complement: '',
                address_number: '',
                district: '',
                state: '',
                city: '',
                birth: '',
                age: '',
                gender: '',
                rg: '',
                organ_rg: '',
                cpf: ''
            },
            msg: {}
        }
    },
    components:{
        NavigationBarAdd
    },
    methods:{
        async CreateCustomer(){
            this.msg = await Customers.create(this.customer).then(res => {
                return res.data
            }).catch(() => {
                alert("Erro, tente novamente!")
            })

            if(this.msg){
                alert("Registro feito com sucesso!")
            }
            
            this.customer.name = ''
            this.customer.medical_record = ''
            this.customer.phone = ''
            this.customer.cel = ''
            this.customer.zipcode = ''
            this.customer.address = ''
            this.customer.complement = ''
            this.customer.address_number = ''
            this.customer.district = ''
            this.customer.state = ''
            this.customer.city = ''
            this.customer.birth = ''
            this.customer.age = ''
            this.customer.gender = ''
            this.customer.rg = ''
            this.customer.organ_rg = ''
            this.customer.cpf = ''
        }
    }
}
</script>

<style>

</style>