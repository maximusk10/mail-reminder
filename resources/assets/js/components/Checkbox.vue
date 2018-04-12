<template>
    <div>
     <switches v-on:click="handle" v-model="enabled"></switches>
        <h1>PENEK</h1>        
    </div>
</template>

<script>
import Switches from 'vue-switches';
export default {
    name: "Checkbox",
    props: [
        "status"
    ],
    data: ()=>{
        return {
            enabled: true
        }
    },
    components: {
        Switches
    },
    methods: {
        handle: ()=>{
            this.enabled = !this.enabled
            console.log('welelex')
        }
    }
}
</script>

