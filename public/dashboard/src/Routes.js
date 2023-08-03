import React, { useState } from 'react';
import { BrowserRouter, Switch, Route, Redirect } from 'react-router-dom';
import { ROUTES } from 'providers/routes';
import { setConfig } from 'providers/actions/AppActions';
import { useDispatch } from 'react-redux';
import FullLoader from 'components/FullLoader';
import Dashboard from 'pages/Dashboard';
import AdminsIndex from 'pages/Admins/AdminsIndex';
import SubAdminsIndex from 'pages/SubAdmins/SubAdminsIndex';
import { getLangcode, httpClient } from 'providers/helpers';
import AdminFormIndex from 'pages/AdminForm/AdminFormIndex';
import SubAdminFormIndex from 'pages/SubAdminForm/SubAdminFormIndex';
import ExamineesIndex from 'pages/Examinees/ExamineesIndex';
import ExamineeFormIndex from 'pages/ExamineeForm/ExamineeFormIndex';
import LeiterRecordsIndex from 'pages/LeiterRecords/LeiterRecordsIndex';
import LeiterRecordFormIndex from 'pages/LeiterRecordForm/LeiterRecordFormIndex';
import SlidersIndex from 'pages/Settings/Sliders/SlidersIndex';
import SliderFormIndex from 'pages/Settings/SliderForm/SliderFormIndex';
import ExamineeExamIndex from 'pages/ExamineeExam/ExamineeExamIndex';
import ProfileIndex from 'pages/Profile/ProfileIndex';
import HistoryIndex from 'pages/History/HistoryIndex';

const Routes = () => {
  const [status, setStatus] = useState("loading");
  const [baseName, setBaseName] = useState()

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

  const getLang = () => {
    if (getLangcode() == null) {
      localStorage.setItem('lang', 'en');
    }
    const langcode = getLangcode();
    setBaseName(`${langcode}/admin`)
  }

  React.useEffect(() => {
    getLang()
    getSettings();
  }, []);

  return status === "success" ? (
    <BrowserRouter basename={baseName}>
      <Switch>
        {/* Dashboard */}
        <Route exact path="/" render={() => <Redirect to="/dashboard" />} />
        <Route path="/dashboard" component={Dashboard} exact />

        {/* Admins */}
        <Route path="/admins" component={AdminsIndex} exact />
        <Route path="/admins/create" component={AdminFormIndex} exact />
        <Route path="/admins/:id/update" component={AdminFormIndex} exact />

        {/* Examiners */}
        <Route path="/sub-admins" component={SubAdminsIndex} exact />
        <Route path="/sub-admins/create" component={SubAdminFormIndex} exact />
        <Route path="/sub-admins/:id/update" component={SubAdminFormIndex} exact />

        {/* Examinees */}
        <Route path="/examinees" component={ExamineesIndex} exact />
        <Route path="/examinees/create" component={ExamineeFormIndex} exact />
        <Route path="/examinees/:id/update" component={ExamineeFormIndex} exact />
        <Route path="/examinees/:id/exam" component={ExamineeExamIndex} exact />

        {/* Leiter Records */}
        <Route path="/leiter-records/:type" component={LeiterRecordsIndex} exact />
        <Route path="/leiter-records/:type/create" component={LeiterRecordFormIndex} exact />
        <Route path="/leiter-records/:id/update" component={LeiterRecordFormIndex} exact />

        {/* Sliders */}
        <Route path="/settings/slider" component={SlidersIndex} exact />
        <Route path="/settings/slider/create" component={SliderFormIndex} exact />
        <Route path="/settings/slider/:id/update" component={SliderFormIndex} exact />

        {/* Profile */}
        <Route path="/my-profile" component={ProfileIndex} exact />
        <Route path="/history" component={HistoryIndex} exact />
      </Switch>
    </BrowserRouter>
  ) : (
    <FullLoader />
  );
};

export default Routes;