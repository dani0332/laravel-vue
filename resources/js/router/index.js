import {createRouter,createWebHistory} from "vue-router";
import  Dashboard from "../views/Dashboard.vue"
import  Products from "../views/Products.vue"
import  NotFound from "../views/NotFound.vue"
import  Login from "../views/Guest/Login.vue"
import  ForgetPassword from "../views/Guest/ForgetPassword.vue"
import  ResetPassword from "../views/Guest/ResetPassword.vue"
import  AdminLayout from "../components/Layouts/AdminLayout.vue"
import store from "../store";

const routes = [
    {
        path:'/admin',
        name:'admin',
        component: AdminLayout,
        meta: {
            requiresAuth: true
        },
        children:[
            {
                path:'dashboard',
                name:'admin.dashboard',
                component: Dashboard,
            },
            {
                path:'products',
                name:'admin.products',
                component: Products,
            },
        ],
    },
    {
        path:'/login',
        name:'login',
        component: Login,
        meta: {
            requiresGuest:true
        }

    },
    {
        path:'/forget-password',
        name:'forgotPassword',
        component: ForgetPassword,
        meta: {
            requiresGuest:true
        }
    },
    {
        path:'/reset-password',
        name:'resetPassword',
        component: ResetPassword,
        meta: {
            requiresGuest:true
        }
    },
    {
        path:'/:pathMatch(.*)*',
        // name:'dashboard',
        component: NotFound
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to,from,next)=>{

    if(to.meta.requiresAuth &&  !sessionStorage.getItem('TOKEN')){
        next({name:'login'})
    }else if(to.meta.requiresGuest && sessionStorage.getItem('TOKEN')) {
        next({name:'admin.dashboard'})
    }else{
        next();
    }


})

export default router;