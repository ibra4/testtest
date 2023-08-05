import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import store from 'providers/store';
import { ToastProvider } from 'react-toast-notifications';
import Routes from './Routes';

import 'assets/translations/index';

import 'assets/scss/main.scss';

ReactDOM.render(
    <Provider store={store}>
        <ToastProvider autoDismiss autoDismissTimeout={3000}>
            <Routes />
        </ToastProvider>
    </Provider>,
    document.getElementById('root')
);