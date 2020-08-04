<template>
  <div>
    <el-alert v-if="error"
        :title="error.email[0]"
        type="error"
        center
        show-icon>
    </el-alert><br>
    <el-form :model="ruleForm" status-icon ref="ruleForm" label-width="120px" class="demo-ruleForm">
        <el-form-item 
            label="Email"
            prop="email"
            :rules="[
                { required: true, message: 'Please input email address', trigger: 'blur' },
                { type: 'email', message: 'Please input correct email address', trigger: ['blur', 'change'] }
        ]">
            <el-input type="email" v-model="ruleForm.email" autocomplete="off"></el-input>
        </el-form-item>

        <el-form-item 
            label="Password"
            prop="password"
            :rules="[
                { required: true, message: 'Please input password', trigger: 'blur' },                             
        ]">
            <el-input type="password" v-model="ruleForm.password" autocomplete="off"></el-input>
        </el-form-item>                         

        <el-form-item>
            <el-button type="primary" @click="onSubmit('ruleForm')">Submit</el-button>
            <el-button @click="resetForm('ruleForm')">Reset</el-button>
        </el-form-item>
    </el-form>  
  </div>
</template>

<script>
    export default {
        data() {           
            return {
                ruleForm: {  
                    email: '',
                    password : ''
                },
                error : ''
            }
        },
        methods: {
            onSubmit(formName) {

                 this.$refs[formName].validate((valid) => {
                    if (valid) {

                        const params = {
                            email: this.ruleForm.email,
                            password: this.ruleForm.password
                        };
                        
                        axios.post('login', params).then((respose) => {
                            this.errors = '';
                            console.log(respose);
                            //this.$router.push('/home');
                        }).catch((errors) => {
                            this.error = errors.response.data.errors;
                        });
                    }  
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }
        }        
    }
</script>
