<template>
    <div class="vh-100">
        <section class="bg-light h-100 py-3 py-md-5 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div v-if="isSuccess" class="alert alert-success" role="alert">
                            {{ isSuccess }}
                        </div>
                        <div class="card border border-light-subtle rounded-3 shadow-sm">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <h3 class="fw-bold text-center">Inventory Management</h3>
                                <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Register Account</h2>
                                <form @submit.prevent="register">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.firstName" type="text" class="form-control"
                                                    :class="errors.first_name ? 'is-invalid' : ''" placeholder="">
                                                <label class="form-label">First Name</label>
                                                <div v-if="errors.first_name" class="text-danger form-text">{{
                                                    errors.first_name.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.lastName" type="text" class="form-control"
                                                    :class="errors.last_name ? 'is-invalid' : ''" placeholder="">
                                                <label class="form-label">Last Name</label>
                                                <div v-if="errors.last_name" class="text-danger form-text">{{
                                                    errors.last_name.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.middelName" type="text" class="form-control"
                                                    :class="errors.middle_name ? 'is-invalid' : ''" placeholder="">
                                                <label class="form-label">Middle Name</label>
                                                <div v-if="errors.middle_name" class="text-danger form-text">{{
                                                    errors.middle_name.join(', ') }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.username" type="text" class="form-control"
                                                    :class="errors.username ? 'is-invalid' : ''" placeholder="">
                                                <label class="form-label">Username</label>
                                                <div v-if="errors.username" class="text-danger form-text">{{
                                                    errors.username.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.email" type="text" class="form-control"
                                                    :class="errors.email ? 'is-invalid' : ''" placeholder="">
                                                <label class="form-label">Email</label>
                                                <div v-if="errors.email" class="text-danger form-text">{{
                                                    errors.email.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.passsword" type="password" class="form-control"
                                                    :class="errors.password ? 'is-invalid' : ''" placeholder="">
                                                <label for="password" class="form-label">Password</label>
                                                <div v-if="errors.password" class="text-danger form-text">{{
                                                    errors.password.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.confirmPassword" type="password"
                                                    class="form-control"
                                                    :class="errors.confirm_password ? 'is-invalid' : ''" placeholder="">
                                                <label for="password" class="form-label">Confirm Password</label>
                                                <div v-if="errors.confirm_password" class="text-danger form-text">{{
                                                    errors.confirm_password.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.role" type="text" class="form-control" name="email"
                                                    :class="errors.role ? 'is-invalid' : ''" id="email" placeholder="">
                                                <label class="form-label">Role</label>
                                                <div v-if="errors.role" class="text-danger form-text">{{
                                                    errors.role.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.address" type="text" class="form-control"
                                                    :class="errors.address ? 'is-invalid' : ''" placeholder="">
                                                <label class="form-label">Address</label>
                                                <div v-if="errors.address" class="text-danger form-text">{{
                                                    errors.address.join(', ') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input v-model="form.contact" type="text" class="form-control"
                                                    :class="errors.contact ? 'is-invalid' : ''" placeholder="">
                                                <label class="form-label">Contact</label>
                                                <div v-if="errors.contact" class="text-danger form-text">{{
                                                    errors.contact.join(', ') }}</div>
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
                                            <p class="m-0 text-secondary text-center">Already have an account?
                                                <RouterLink to="/">Login</RouterLink>
                                            </p>
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
            isSuccess: '',
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
            },

            errors: []
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
                    role: this.form.role,
                    address: this.form.address,
                    contact: this.form.contact,
                });

                if (response) {
                    this.form.firstName = '';
                    this.form.lastName = '';
                    this.form.middelName = '';
                    this.form.username = '';
                    this.form.email = '';
                    this.form.passsword = '';
                    this.form.confirmPassword = '';
                    this.form.role = '';
                    this.form.address = '';
                    this.form.contact = '';

                    this.isSuccess = response.data.message;
                }

            } catch (e) {
                console.log(e.response.data.errors);
                this.errors = e.response.data.errors;
            }

        }
    }

}
</script>
<style></style>