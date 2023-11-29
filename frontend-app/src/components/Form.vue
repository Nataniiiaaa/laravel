<template>
    <div class="container">
        <h2>Form</h2>
        <form @submit.prevent="simpan()">
            <div class="mb-3 form-group">
                <label>Nama</label>
                <input type="text" class="form-control" v-model="Form.nama">
            </div>
            <div class="mb-3 form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" v-model="Form.alamat">
            </div>
            <div class="mb-3 form-group">
                <label>Telepon</label>
                <input type="text" class="form-control" v-model="Form.telepon">
            </div>
            <div class="mb-3 form-group">
                <label>Gender</label>
                <select v-model="Form.gender" class="form-control">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="btn-group">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            <div class="btn-group">
                <button class="btn btn-warning" @click="clear()">Clear</button>
            </div>
        </form>
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
        remove(Form){
            var url = `http://127.0.0.1:8000/api/form/${Form.id}`;
            axios.delete(url).then(
                ()=>{
                    console.log('Data Berhasil Dihapus!');
                    this.allForm = data;
                }
            );
        },
        edit(Form){
            var url = `http://127.0.0.1:8000/api/form/${Form.id}`;
            axios.get(url).then(
                ({data})=>{
                    this.Form = data;
                    console.log(this.Form);
                }
            );
        },
        simpan(){
            if(this.Form.id==''){
                //simpan baru
                var url = `http://127.0.0.1:8000/api/form`;
                axios.post(url, this.Form).then(
                    ()=>{
                    console.log('Data Berhasil Disimpan!');
                    this.loadAllForm();
                    this.clear();
                }
            );
            }else{
                var url = `http://127.0.0.1:8000/api/form/${this.Form.id}`;
            axios.put(url, this.Form).then(
                ()=>{
                    console.log('Data Berhasil Diedit!');
                    this.loadAllForm();
                    this.clear();
                }
            );
        }

        },
        clear(){
            this.Form.id='',
            this.Form.nama='',
            this.Form.alamat='',
            this.Form.telepon='',
            this.Form.gender='';
        }
    },
};
</script>
