<template>
    <b-row>
        <b-col cols="8">
            
        </b-col>
        <b-col cols="4">
            <b-img rounded="circle" blank width="60" heigth="60" blank-color="#777" alt="Circle image" class="m-1" />
            <p>Usuario seleccionado</p>
            <hr>
            <b-form-checkbox>
                Descativar notificaciones
            </b-form-checkbox>

        </b-col>
    </b-row>
</template>

<script>
    export default {
        data(){
            return {
                
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
