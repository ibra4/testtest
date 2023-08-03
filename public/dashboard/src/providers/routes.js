export const ROUTES = {
    SETTINGS: {
        GET: '/bootstrap'
    },
    ADMINS: {
        LIST: '/admins',
        UPLOAD: '/admins/upload',
        CREATE: '/admins/create'
    },
    SUB_ADMINS: {
        LIST: '/sub-admins',
        CREATE: '/sub-admins/create'
    },
    EXAMINEES: {
        LIST: '/examinees',
        CREATE: '/examinees/create',
        EXAM: 'examinees-exam'
    },
    COUNTRY_STATISTICS: {
        GET: '/country-statistics'
    },
    LEITER_RECORDS: {
        GET_BY_TYPE: '/leiter-records',
        CREATE: '/leiter-records'
    },
    SLIDERS: {
        GET: '/sliders',
        UPLOAD: '/sliders/upload'
    },
    MY_PROFILE: {
        GET: 'my-profile/data',
        POST: 'my-profile/update'
    },
    HISTORY: {
        TEASER: 'history/teaser',
        GET: 'history'
    },
    TOP5: {
        TEASER: 'top-5/teaser',
        GET: 'top-5/teaser' // Not ready
    }
}