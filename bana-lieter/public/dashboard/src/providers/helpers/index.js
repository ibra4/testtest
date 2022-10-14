import axios from "axios";

export const httpClient = axios.create({
    baseURL: 'http://bl.local',
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    },
    withCredentials: true
})