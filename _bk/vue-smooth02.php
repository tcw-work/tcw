<div id="app">
    <h2 id="sec-3">Top Section</h2>
    <div style="height: 2000px;"></div>
    <a href="#sec-3" v-smooth-scroll>Go To Top</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue2-smooth-scroll@1.5.0/dist/vue-smooth-scroll.min.js"></script>






<script>
    const VueSmoothScroll = window['VueSmoothScroll'].default;

    Vue.use(VueSmoothScroll);
    new Vue({
        el: '#app'
    });
</script>