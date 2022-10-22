import axios from "axios";
import store from "providers/store";

export const httpClient = axios.create({
    baseURL: window.location.host.search('local') ? 'http://bl.local/api' : 'http://l.ibra.info/api',
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    },
    withCredentials: true
})

export const hasRole = (role) => {
    const user = store.getState().app.config.user
    return user.role == 'root' ? true : role === user.role
}