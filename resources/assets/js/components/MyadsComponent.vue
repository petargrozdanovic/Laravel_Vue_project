<template>
  <div class="crud">
    <div>
      <input type="hidden" name="_method"  />
      <div class="ad-item row">
        <div class="item-image-box col-sm-4">

          <!-- item-image -->
          <div class="item-image">
            <a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
          </div><!-- item-image -->
        </div><!-- item-image-box -->
        <!-- rending-text -->
        <div class="item-info col-sm-8">
          <!-- ad-info -->
          <div class="ad-info">
            <h3 class="item-price">{{ price }}$</h3>
            <h4 class="item-title"><a href="#">{{ title }}</a></h4>
            <div class="item-cat">
            <span><a href="#">{{ body }}</a></span>
            </div>
            <!-- ad-meta -->
            <div class="ad-meta">
              <div class="meta-content">
                <span class="dated">Posted On: <a href="#">{{ created_at }} </a></span>
                <span class="visitors">Visitors: {{ visitor }}</span>
              </div>
              <button @click="del">Delete</button>
            </div><!-- ad-meta -->
          </div><!-- item-info -->
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    computed: {
    },
    methods: {
      del() {
        this.$emit('delete', this.id);
      }
    },
    props: ['id', 'title', 'price', 'body', 'created_at', 'visitor']
  }
</script>

