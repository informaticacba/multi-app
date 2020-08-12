<template>
  <div>
    <el-container>
        <el-header>Mux</el-header>
        <el-container>
            <el-aside width="25%">
                <router-link :to="{ name: 'login' }">login</router-link> <br>
                <router-link :to="{ name: 'home' }">Home</router-link>
              </el-aside>
            <el-container>
                <el-main>
                    <el-col :span="6" :offset="6">    
                       <router-view></router-view>                         
                     </el-col>                 
                </el-main>
                <el-footer>CorpJorge</el-footer>
            </el-container>
        </el-container>
    </el-container>   
  </div>
</template>

<script>
    export default {
           
    }
</script>
