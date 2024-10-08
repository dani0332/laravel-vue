import {createRouter,createWebHistory} from "vue-router";
import  Dashboard from "../views/Dashboard.vue"
import  NotFound from "../views/NotFound.vue"
import  Login from "../views/Guest/Login.vue"
import  ForgetPassword from "../views/Guest/ForgetPassword.vue"
import  ResetPassword from "../views/Guest/ResetPassword.vue"

const routes = [
    {
        path:'/dashboard',
        name:'dashboard',
        component: Dashboard
    },
    {
        path:'/login',
        name:'login',
        component: Login
    },
    {
        path:'/forget-password',
        name:'forgotPassword',
        component: ForgetPassword
    },
    {
        path:'/reset-password',
        name:'resetPassword',
        component: ResetPassword
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

export default router;