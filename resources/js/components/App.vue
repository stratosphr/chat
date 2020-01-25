<template>
    <p>Hello, worlds</p>
</template>

<script>
    export default {
        name: 'App',

        created() {
            axios.get('data').then(data => {
                console.log(data.data)
            })
        }
    }
</script>
