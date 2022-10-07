import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import store from 'providers/store';
import { ToastProvider } from 'react-toast-notifications';

import AdminApp from 'AdminApp';

import './assets/translations';
import 'assets/scss/main.scss';
import 'react-datepicker/dist/react-datepicker.css';

ReactDOM.render(
    <Provider store={store}>
        <ToastProvider>
            <AdminApp />
        </ToastProvider>
    </Provider>,
    document.getElementById('root')
);