<template>
    <div>Test 12345</div>
</template>

<script>
import axios from "redaxios";

export default {
    name: "form",
    data() {
        return {
            allform: {},
            form: {
                id: "",
                nama: "",
                alamat: "",
                telepon: "",
                gender: "",
            },
        };
    },
    created() {
        console.log("Created !");
        this.loadAllForm();
    },
    mounted() {
        console.log("Mounted");
    },
    methods: {
        loadAllForm() {
            var url = `http://127.0.0.1:8000/api/form`;
            axios.get(url).then(({ data }) => {
                console.log(data);
                this.allForm = data;
            });
        },
    },
};
</script>
