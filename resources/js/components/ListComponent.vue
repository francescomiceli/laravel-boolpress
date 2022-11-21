<template>
    <div>
        <ol>
            <li v-for="post in posts" :key="post.id">{{post.title}}</li>
        </ol>
    </div>
  </template>

  <script>
  export default {
     name: 'ListComponent',
     data(){
return{
    posts:[]
}
     },
     mounted(){
          axios.get('/api/posts').then((response)=>{
            console.log(response);
            this.posts=response.data
          })
      }
  }
  </script>

  <style lang="scss" scoped>

  </style>
