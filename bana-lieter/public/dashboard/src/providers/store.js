import { configureStore } from '@reduxjs/toolkit';
import { AppReducer } from './reducers/AppReducer';

const store = configureStore({
  reducer: {
    app: AppReducer,
  }
});

export default store;