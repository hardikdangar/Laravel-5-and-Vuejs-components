<script>
var App = Vue.extend({});

var router = new VueRouter();
router.map({
  '/create':{
    component: Vue.component('create')
  },
  '/':{
    component: Vue.component('index')
  },
  '/:id/edit':{
    name:'item.edit',
    component: Vue.component('edit')
  },
  '/:id':{
    name:'item.show',
    component: Vue.component('show')
  },
});

router.start(App,'body');
</script>