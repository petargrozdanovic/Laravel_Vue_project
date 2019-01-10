<template>
  <div class="crud">
    <h2>Profile Details</h2>

    <div class="form-group">
      <label>Username</label>
      <input type="text" :value="name" class="form-control" id="username" name="username">
    </div>

    <div class="form-group">
      <label>Email ID</label>
      <input type="email" :value="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
      <label for="name-three">Mobile</label>
      <input type="text" :value="phone" @input="phone = $event.target.value" class="form-control" id="phone" name="phone">
    </div>

    <div class="form-group">
      <label>Your City</label>
       <select class="form-control">
          <option value="#" id="city" name="city">{{ city }}</option>
      </select>
    </div>
    <div class="form-group">
      <label>You are a</label>
      <select class="form-control">
        <option value="#">{{ type }}</option>
      </select>
    </div>

    <button type="submit" @click="up" class="btn">Update Profile</button>
    <button type="submit" class="btn">Delete Profile</button>
    <button type="submit" class="btn">Cancel</button>
  </div>
</template>
<script>
  export default {
    computed: {
    },
    methods: {
      up() {
        this.$emit('update', this.id, this.phone);
      }
    },
    props: ['id', 'name', 'email', 'phone', 'city', 'type', 'visitor']
  }
</script>
