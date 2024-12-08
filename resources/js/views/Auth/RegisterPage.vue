<template>
    <div class="vh-100">
        <section class="bg-light h-100 py-3 py-md-5 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card border border-light-subtle rounded-3 shadow-sm">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <h3 class="fw-bold text-center">Inventory Management</h3>
                                <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Register Account</h2>
                                <form @submit.prevent="register">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.firstName" type="text" class="form-control"
                                                    placeholder="">
                                                <label class="form-label">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.lastName" type="text" class="form-control"
                                                    placeholder="">
                                                <label class="form-label">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.middelName" type="text" class="form-control"
                                                    placeholder="">
                                                <label class="form-label">Middle Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.username" type="text" class="form-control"
                                                    placeholder="">
                                                <label for="email" class="form-label">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.email" type="text" class="form-control"
                                                    placeholder="">
                                                <label for="email" class="form-label">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.passsword" type="text" class="form-control"
                                                    placeholder="">
                                                <label for="email" class="form-label">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.confirmPassword" type="text" class="form-control"
                                                    placeholder="">
                                                <label for="email" class="form-label">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.role" type="text" class="form-control" name="email"
                                                    id="email" placeholder="">
                                                <label for="email" class="form-label">Role</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.address" type="text" class="form-control"
                                                    placeholder="">
                                                <label for="email" class="form-label">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.contact" type="text" class="form-control"
                                                    placeholder="">
                                                <label for="email" class="form-label">Contact</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid my-3">
                                                <button class="btn btn-primary btn-lg" type="submit">Register</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="m-0 text-secondary text-center">Already have an account? <a
                                                    href="#!" class="link-primary text-decoration-none">Login</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            form: {
                firstName: '',
                lastName: '',
                middelName: '',
                username: '',
                email: '',
                passsword: '',
                confirmPassword: '',
                role: '',
                address: '',
                contact: '',
            }
        }
    },

    methods: {
        async register() {
            try {
                const response = await axios.post('http://127.0.0.1:8000/api/registration', {
                    first_name: this.form.firstName,
                    last_name: this.form.lastName,
                    middle_name: this.form.middelName,
                    username: this.form.username,
                    email: this.form.email,
                    password: this.form.passsword,
                    confirm_password: this.form.confirmPassword,
                    role: this.form.contact,
                    address: this.form.address,
                    contact: this.form.contact,
                });

                console.log(response + " aw");
            } catch (e) {
                console.log(e);
            }

        }
    }

}
</script>
<style></style>