<template>
	<div>
		<myprofile-component
      v-for="crud in cruds"
      v-bind="crud"
			v-bind:phone="crud.phone"
      :key="crud.id"
      @update="up"
		></myprofile-component>
	</div>
</template>
<script>
	import MyprofileComponent from './MyprofileComponent.vue';

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
				window.axios.get('/get-my-profile').then(({ data }) => {
          for(let i = 0; i < data.length; i++) {
            this.cruds.push(data[i]);
          }
				}).catch((error) => {
					console.log('error', error);
				});
			},
			up(id, phone) {
				window.axios.put('/my-profile/'+id, {phone: phone}).then(({ data }) => {
          this.success('Data loaded');
				}).catch((error) => {
					console.log('error', error);
				});
			},
		},
		components: {
			MyprofileComponent
		}
	}
</script>
