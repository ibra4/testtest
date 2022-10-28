import axios from "axios";
import store from "providers/store";

export const httpClient = axios.create({
    baseURL: window.location.host.search('local') == -1 ? 'https://l.ibra.info/api' : 'http://bl.local/api',
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    },
    withCredentials: true
})

export const hasRole = (role) => {
    const user = store.getState().app.config.user
    return user.role == 'root' ? true : role === user.role
}

export const hasAnyRole = (roles) => {
    const user = store.getState().app.config.user
    return user.role == 'root' ? true : roles.includes(user.role)
}