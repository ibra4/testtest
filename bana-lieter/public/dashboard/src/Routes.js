import React from 'react';
import { BrowserRouter, Switch, Route, Redirect } from 'react-router-dom';
import { ROUTES } from 'providers/routes';
import { setConfig } from 'providers/actions/AppActions';
import { useDispatch } from 'react-redux';
import FullLoader from 'components/FullLoader';
import Dashboard from 'pages/Dashboard';
import AdminsIndex from 'pages/Admins/AdminsIndex';
import SubAdminsIndex from 'pages/SubAdmins/SubAdminsIndex';
import { httpClient } from 'providers/helpers';

const Routes = () => {
  const [status, setStatus] = React.useState("loading");

  const dispatch = useDispatch();

  const getSettings = async () => {
    try {
      const config = await httpClient.get(ROUTES.SETTINGS.GET)
      dispatch(setConfig(config.data))
      setStatus("success");
    } catch (error) {
      setStatus("error ");
    }
  };

  React.useEffect(() => {
    getSettings();
  }, []);

  return status === "success" ? (
    <BrowserRouter basename="/admin">
      <Switch>
        <Route exact path="/" render={() => <Redirect to="/dashboard" />} />
        <Route path="/dashboard" component={Dashboard} exact />
        <Route path="/admins" component={AdminsIndex} exact />
        <Route path="/sub-admins" component={SubAdminsIndex} exact />
      </Switch>
    </BrowserRouter>
  ) : (
    <FullLoader />
  );
};

export default Routes;
