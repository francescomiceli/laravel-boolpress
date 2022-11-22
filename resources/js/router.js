import Vue from "vue";
import VueRouter from "vue-router";
import ListComponent from './components/ListComponent'
Vue.use(VueRouter);
const router = new VueRouter({
    routes: [{path:'/', name:'home', component:ListComponent}]
})

export default router;
