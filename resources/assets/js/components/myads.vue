<template>
  <div>
    <myads-component
      v-for="crud in cruds"
      v-bind="crud"
      :key="crud.id"
      @delete="del"
    ></myads-component>
  </div>
</template>
<script>
  import MyadsComponent from './MyadsComponent.vue';

  export default {
    data() {
      return {
        cruds: []
      }
    },
    mounted: function() {
        this.read();
    },
    methods: {
      read() {
        window.axios.get('/get-my-ads').then(({ data }) => {
          for(let i = 0; i < data.length; i++) {
            this.cruds.push(data[i]);
          }
        });
      },
      del(id) {
        window.axios.delete(`/my-ads/${id}`).then(() => {
            let index = this.cruds.findIndex(crud => crud.id === id);
          this.cruds.splice(index, 1);
        });
      }
    },
    components: {
      MyadsComponent
    }
  }
</script>
