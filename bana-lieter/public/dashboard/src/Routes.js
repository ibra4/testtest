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
import AdminFormIndex from 'pages/AdminForm/AdminFormIndex';
import SubAdminFormIndex from 'pages/SubAdminForm/SubAdminFormIndex';
import ExamineesIndex from 'pages/Examinees/ExamineesIndex';
import ExamineeFormIndex from 'pages/ExamineeForm/ExamineeFormIndex';
import LeiterRecordsIndex from 'pages/LeiterRecords/LeiterRecordsIndex';

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
        {/* Dashboard */}
        <Route exact path="/" render={() => <Redirect to="/dashboard" />} />
        <Route path="/dashboard" component={Dashboard} exact />

        {/* Admins */}
        <Route path="/admins" component={AdminsIndex} exact />
        <Route path="/admins/create" component={AdminFormIndex} exact />
        <Route path="/admins/:id/update" component={AdminFormIndex} exact />

        {/* Sub Admins */}
        <Route path="/sub-admins" component={SubAdminsIndex} exact />
        <Route path="/sub-admins/create" component={SubAdminFormIndex} exact />
        <Route path="/sub-admins/:id/update" component={SubAdminFormIndex} exact />

        {/* Sub Admins */}
        <Route path="/examinees" component={ExamineesIndex} exact />
        <Route path="/examinees/create" component={ExamineeFormIndex} exact />
        <Route path="/examinees/:id/update" component={ExamineeFormIndex} exact />

        <Route path="/leiter-records/:type" component={LeiterRecordsIndex} exact />

        {/* Rest */}
      </Switch>
    </BrowserRouter>
  ) : (
    <FullLoader />
  );
};

export default Routes;
