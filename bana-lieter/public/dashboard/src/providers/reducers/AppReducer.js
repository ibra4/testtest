const defaultState = {
    config: null
}

export const AppReducer = (state = defaultState, action) => {
    switch (action.type) {
        case "SET_CONFIG":
            return { ...state, config: action.payload }
        default:
            return { ...state }
    }
}