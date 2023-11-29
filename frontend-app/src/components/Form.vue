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
                <tr v-for="(Form, index) in allForm" :key="Form.id">
                    <td>{{ Form.id }}</td>
                    <td>{{ Form.nama }}</td>
                    <td>{{ Form.alamat }}</td>
                    <td>{{ Form.telepon }}</td>
                    <td>{{ Form.gender }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning" @click="edit(Form)">Edit</button>
                            <button type="button" class="btn btn-danger" @click="remove(Form)">Delete</button>
                        </div>
                    </td>
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
            allForm: {},
            Form: {
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
