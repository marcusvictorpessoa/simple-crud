<template>
  <div>
    <navigation-bar-home />
    <br>
    <br>
    <div class="row">

      <div class="col s12 m3 l3">
        <img src="">
      </div>

      <div class="col s12 m6 l6">
        <div v-for="customer of customers" :key="customer.id" class="card">
          <div class="card-content">
            <h5>{{customer.name}}</h5>
          </div>
          <div class="card-action">
            <button @click="del(customer.id)" class="btn waves-effect waves-light red right">
              <i class="material-icons">delete</i>
            </button>
            <button @click="navigateToEdit(customer.id)" class="btn waves-effect waves-light green right">
              <i class="material-icons">edit</i>
            </button>
          </div>
        </div>
      </div>

    </div>

    <div class="fixed-action-btn">
        <button @click="navigateToAdd" class="btn btn-floating waves-effect waves-light btn-large blue">
          <i class="material-icons">add</i>
        </button>
      </div>

  </div>
</template>

<script>

import NavigationBarHome from '../../components/NavigationBarHome'
import Users from '../../services/users'
import Customers from '../../services/customers'

export default {
  data(){
    return{
      user:{
        id: 0,
        name: '',
        email: '',
        password: '',
        image: ''
      },
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
      },
      customers: [],
      msg: '',
      awa: {}
    }
  },
  components:{
    NavigationBarHome
  },
  async mounted(){
    const id_user = localStorage.getItem('id')
    this.user.id = id_user
    this.user = await Users.read(this.user.id).then(res => {return res.data})
    this.customers = await Customers.list().then(res => {return res.data})
    this.customers.reverse()
  },
  methods:{
    async del(id){
      this.msg = await Customers.delete(id).then(res =>{ return res.data}).catch(()=>{alert("Erro, tente novamente!")})  
      if(this.msg){
        alert("Registro deletado!")
      }
      window.location.href = '/home'
      
    },
    navigateToAdd(){
      window.location.href = '/add'
    },
    navigateToEdit(id){
      localStorage.setItem('id_customer', id)
      window.location.href = '/edit'
    }
  }
}
</script>

<style>

</style>