<template>
    <div>
    Test 12345
    </div>
</template>

<script>
    import axios from 'redaxios'

    export default {
        name : 'form',
        data(){
            return{
                allForm : {},
                form:{
                    'id':'',
                    'nama':'',
                    'alamat':'',
                    'telepon':'',
                    'gender':''
                }
            }

        }
    }
</script>
