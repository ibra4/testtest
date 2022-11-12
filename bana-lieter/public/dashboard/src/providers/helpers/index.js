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

export const getGender = gender => gender ? "Male" : "Female"

export const generateRandomColor = () => {
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += Math.floor(Math.random() * 10);
    }
    return color
}

export const renderUserNameShortcut = name => {
    const parts = name.split(' ')
    var shortcutName = ""
    if (parts.length > 1) {
        shortcutName = parts[0].slice(0, 1) + parts[1].slice(0, 1)
    } else {
        shortcutName = name.slice(0, 2)
    }

    return shortcutName
}

export const getCountryById = country_id => {
    const countries = store.getState().app.config.countries
    const country = countries.find(item => item.id == country_id)
    return country ? country.name : "Not set"
}

export const getAdminById = admin_id => {
    const admins = store.getState().app.config.admins
    const admin = admins.find(item => item.id == admin_id)
    return admin && admin.label
}
