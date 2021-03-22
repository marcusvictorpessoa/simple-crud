<template>
  <div>
      <navigation-bar/>
      <br>
      <br>
      <div class="container">    
            <register-form/>
      </div>
  </div>
</template>

<script> 
import NavigationBar from '../../components/NavigationBar'
import RegisterForm from '../../components/RegisterForm'

export default {
    components:{
        NavigationBar,
        RegisterForm
    }
}
</script>

<style>

</style>