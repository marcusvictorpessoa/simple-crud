<template>

    <div>
        <navigation-bar/>
        <br>
        <br>
        <div class="container">
            <login-form/>
        </div>
    </div>
 
</template>

<script>
import NavigationBar from '../../components/NavigationBar'
import LoginForm from '../../components/LoginForm'
export default {
    components: {
        NavigationBar,
        LoginForm
    }
}

</script>

<style>

</style>