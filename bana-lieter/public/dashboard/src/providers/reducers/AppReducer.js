const defaultState = {

}

export const AppReducer = (state = defaultState, action) => {
    switch (action.type) {
        case "test":
            return { ...state, test: action.payload }
        default:
            return { ...state }
    }
}