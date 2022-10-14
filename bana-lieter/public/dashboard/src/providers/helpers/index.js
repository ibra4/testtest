import axios from "axios";

export const httpClient = axios.create({
    baseURL: 'http://bl.local/api',
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    },
    withCredentials: true
})