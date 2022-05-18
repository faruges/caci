import {createStore, createLogger} from "vuex";

const store = createStore({
    state() {
        return {
            msg: 'vuex te saluda desde el store :3',
            data: {}
        }
    },
    mutations: {
        setData(state, payload) {
            state.data = payload
            console.log('argumento data:  ' + state.data);
        }
    },
    actions: {
        fetchData({commit, state}, data) {

                commit('setData', data)

        }
    },
    getters: {},
    plugins: [createLogger()]
});
export default store;
