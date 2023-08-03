export const setConfig = (payload) => {
    return {
        type: "SET_CONFIG",
        payload
    }
}

export const addAdmin = (payload) => {
    return {
        type: 'ADD_ADMIN',
        payload
    }
}

export const updateAdmin = (id, name) => {
    return {
        type: 'UPDATE_ADMIN',
        payload: {id, name}
    }
}

