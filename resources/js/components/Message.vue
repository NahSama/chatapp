<template>
    <div class="">
        <div class="d-flex justify-content-center">
            <div class="badge badge-pill badge-secondary ">{{ time }}</div>
        </div><br>
        <div :class="[className, floatClass]" class="badge" style="" id="text" v-model="userName">
            <span id="user-name">{{userName}}</span> 
        <slot></slot>
        </div>
    </div>            
</template>

<script>
    export default {
        props: [
            'color',
            'user',
            'time',
            'position',
        ],
        computed: {
            className: function() {
                return 'badge-' + this.color;
            },

            badgeClass: function() {
                return 'badge-' + this.color;
            },

            floatClass: function() {
                return 'float-' + this.position;
            },

            userName: function(){
                if (this.user !=''){
                    return this.user +':';
                }
                return this.user;
            }
        },
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>
<style> 
    #text {
        max-width:40%; 
        white-space: normal;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 300;
    }

    #user-name {
        font-weight: 700;
    }
</style> 