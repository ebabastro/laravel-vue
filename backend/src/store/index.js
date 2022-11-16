import { createStore } from "vuex";
import axiosClient from "../axios";

const store = createStore({
    state: {
        categories: [],
    },
    getters: {},
    actions: {
        getCategories({ commit }) {
            return axiosClient.get('/getCategories')
                .then(({ data }) => {
                    commit('setCategories', data);
                    return data;
                })
        }
    },
    mutations: {
        setCategories: (state, categoriesData) => {
            state.categories = categoriesData;
        },
    },
})

export default store;