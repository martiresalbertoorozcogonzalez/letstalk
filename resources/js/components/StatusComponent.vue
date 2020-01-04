<template>
    <b-img
        rounded="circle"
        blank
        width="10"
        heigth="10"
        alt="Status"
        :title="online ? 'Conectado' : 'Desconectado'"
        :blank-color="online ? 'green' : 'gray'"
    />
</template>

<script>
export default {
    props: {
        online: Boolean
    }
};
</script>
