import {createStore} from "vuex";
import axiosClient from "../axiosClient.js";

const store = createStore({
    state: {
        user:{
            token: null,
            data: {

            },
        },
        pageTitle: ""
    },
    getters: {},
    actions: {
        async login({commit},data){
            await axiosClient.post('/login',data)
                .then(({data}) => {
                    console.log("data",data.data);
                    commit('setUser', data.data.user);
                    commit('setToken', 1234)
                    return data;
                })
                .catch(error => {
                    console.error("API error:", error.response); // Log the error response from the API
                    throw error; // Re-throw the error so the caller can handle it
                });
        },
        async saveProduct({commit},data){
            await axiosClient.post('/saveProduct',data)
                .then(({data}) => {
                    console.log("saveProduct data",data.data);
                    return data;
                })
                .catch(error => {
                    console.error("API error:", error.response); // Log the error response from the API
                    throw error; // Re-throw the error so the caller can handle it
                });
        }
    },
    mutations: {
        setPageTitle(state,newTitle){
            state.pageTitle = newTitle;
        },
        setUser(state, user) {
            state.user.data = user;
        },
        setToken(state, token) {
            state.user.token = token;
            if (token) {
                sessionStorage.setItem('TOKEN', token);
            } else {
                sessionStorage.removeItem('TOKEN')
            }
        }
    },
});

export default store;