import React from 'react';
import { BrowserRouter, Switch, Route, Redirect } from 'react-router-dom';
import { ROUTES } from 'providers/routes';
import { setTest } from 'providers/actions/AppActions';
import { useDispatch } from 'react-redux';
import FullLoader from 'components/FullLoader';
import Dashboard from 'pages/Dashboard';
import AdminsIndex from 'pages/Admins/AdminsIndex';
import SubAdminsIndex from 'pages/SubAdmins/SubAdminsIndex';

const Routes = () => {
  const [status, setStatus] = React.useState("loading");

  const dispatch = useDispatch();

  const getSettings = async () => {
    try {
      const res = await fetch("http://192.168.50.11/" + ROUTES.SETTINGS.GET);
      dispatch(setTest(res.data));
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
