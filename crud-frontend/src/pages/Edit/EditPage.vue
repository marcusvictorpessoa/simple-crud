<template>
  <div>
      <navigation-bar-edit />
      <br>
      <br>
      <div class="container">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s4">
                <input placeholder=" " id="name" type="text" class="validate" required v-model="customer.name">
                <label for="name">Nome</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="medical_record" type="text" class="validate" v-model="customer.medical_record">
                <label for="medical_record">Registro médico</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="phone" type="text" class="validate" v-model="customer.phone">
                <label for="phone">Telefone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                <input placeholder=" " id="cel" type="text" class="validate" v-model="customer.cel">
                <label for="cel">Celular</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="zipcode" type="text" class="validate" v-model="customer.zipcode">
                <label for="zipcode">Cep</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="address" type="text" class="validate" v-model="customer.address">
                <label for="address">Endereço</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input placeholder=" " id="complement" type="text" class="validate" v-model="customer.complement">
                <label for="complement">Complemento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                <input placeholder=" " id="adress_number" type="text" class="validate" v-model="customer.address_number">
                <label for="address_number">Número</label>
                </div>
                <div class="input-field col s3">
                <input placeholder=" " id="district" type="text" class="validate" v-model="customer.district">
                <label for="district">Bairro</label>
                </div>
                <div class="input-field col s3">
                <input placeholder=" " id="state" type="text" class="validate" v-model="customer.state">
                <label for="state">Estado</label>
                </div>
                <div class="input-field col s3">
                <input placeholder=" " id="city" type="text" class="validate" v-model="customer.city">
                <label for="Cidade">Cidade</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                <input placeholder=" " id="birth" type="text" class="validate" v-model="customer.birth">
                <label for="birth">Data de nascimento</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="age" type="text" class="validate" v-model="customer.age">
                <label for="age">Idade</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="gender" type="text" class="validate" v-model="customer.gender">
                <label for="gender">Gênero</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                <input placeholder=" " id="rg" type="text" class="validate" v-model="customer.rg">
                <label for="rg">Rg</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="organ_rg" type="text" class="validate" v-model="customer.organ_rg">
                <label for="organ_rg">Orgão</label>
                </div>
                <div class="input-field col s4">
                <input placeholder=" " id="cpf" type="text" class="validate" v-model="customer.cpf">
                <label for="cpf">Cpf</label>
                </div>
            </div>
        </form>
      </div>
      <div class="fixed-action-btn">
        <button @click="updateCustomer" class="btn btn-floating waves-effect waves-light btn-large blue">
          <i class="material-icons">save</i>
        </button>
      </div>
  </div>
</template>

<script>
import NavigationBarEdit from '../../components/NavigationBarEdit'
import Customers from '../../services/customers'

export default {
    data(){
        return{
            customer:{
                id: 0,
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
            }
        }
    },
    async mounted(){
        const id_customer = localStorage.getItem('id_customer')
        this.customer.id = id_customer
        this.customer = await Customers.read(this.customer.id).then(res => {return res.data})

    },
    components:{
        NavigationBarEdit
    },
    methods:{
        async updateCustomer(){
            this.customer = await Customers.update(this.customer.id, this.customer).then(res => {
                return res.data
            }).catch(() => {
                alert("Erro, tente novamente!")
            })

            if(this.customer){
                alert("Registro atualizado com sucesso!")
            }
        }
    }
}
</script>

<style>

</style>