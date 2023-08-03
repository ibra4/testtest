const defaultState = {
    config: null
}

export const AppReducer = (state = defaultState, action) => {
    switch (action.type) {
        case "SET_CONFIG":
            return { ...state, config: action.payload }
        case 'ADD_ADMIN':
            return { ...state, config: { ...state.config, admins: [...state.config.admins, action.payload] } }
        case 'UPDATE_ADMIN':
            return {
                ...state,
                config: {
                    ...state.config,
                    admins: state.config.admins.map(item => item.id == action.payload.id
                        ? { ...item, label: action.payload.name }
                        : item
                    )
                }
            }
        default:
            return { ...state }
    }
}