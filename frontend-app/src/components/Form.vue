<template>
    <div class="container">
        <h2>Data Form</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Telepon</td>
                    <td>Gender</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(form, index) in allform" :key="form.id">
                    <td>{{ form.id }}</td>
                    <td>{{ form.nama }}</td>
                    <td>{{ form.alamat }}</td>
                    <td>{{ form.telepon }}</td>
                    <td>{{ form.gender }}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
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
