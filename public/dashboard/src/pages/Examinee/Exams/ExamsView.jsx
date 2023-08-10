import ExamineeGeneralData from 'components/ExamineeGeneralData';
import ActionButton from 'components/Fields/ActionButton';
import ReportModal from 'components/ReportModal';
import WhiteBox from 'components/WhiteBox';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaPlus } from 'react-icons/fa';
import { TbReportAnalytics } from 'react-icons/tb';
import { Link } from 'react-router-dom';
import { useHistory } from 'react-router-dom';
import LeiterExamForm from './Forms/LeiterExamForm';

function ExamsView({ examinee, leiter, onCreateExam }) {
    const { t } = useTranslation();
    const { push } = useHistory();
    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <ExamineeGeneralData examinee={examinee} />
            </WhiteBox>
            <WhiteBox title={t('Leiter Exams')}>
                <Table className="align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{t('Age')}</th>
                            <th>{t('Created By')}</th>
                            <th>{t('Application Date')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {leiter &&
                            leiter.map((leiterReport) => (
                                <tr key={leiterReport.id}>
                                    <td>{leiterReport.id}</td>
                                    <td>{leiterReport.age}</td>
                                    <td>{leiterReport?.examiner?.name}</td>
                                    <td>{leiterReport.application_date}</td>
                                    <td>{examinee.created_at}</td>
                                    <td>
                                        <ActionButton
                                            label={t('View Exam')}
                                            icon={<TbReportAnalytics />}
                                            onClick={() => push(`/reports/leiter/${leiterReport.id}`)}
                                        />
                                    </td>
                                </tr>
                            ))}
                    </tbody>
                </Table>
                <div className="text-center">
                    <LeiterExamForm onSubmit={(values) => onCreateExam(values, 'leiter')} />
                </div>
            </WhiteBox>
            <WhiteBox title={t('CASD Exams')}>
                <Table className="align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{t('Age')}</th>
                            <th>{t('Created By')}</th>
                            <th>{t('Application Date')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </Table>
                <div className="text-center">
                    <Link to={`/reports/casd/create`} className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', { name: 'CASD Report' })}</span>
                    </Link>
                </div>
            </WhiteBox>
            <WhiteBox title={t('MPR Exams')}>
                <Table className="align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{t('Age')}</th>
                            <th>{t('Created By')}</th>
                            <th>{t('Application Date')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </Table>
                <div className="text-center">
                    <Link to={`/reports/mpr/create`} className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', { name: 'MPR Report' })}</span>
                    </Link>
                </div>
            </WhiteBox>
            <WhiteBox title={t('ABAS Exams')}>
                <Table className="align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{t('Age')}</th>
                            <th>{t('Created By')}</th>
                            <th>{t('Application Date')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </Table>
                <div className="text-center">
                    <Link to={`/reports/abas/create`} className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', { name: 'ABAS Report' })}</span>
                    </Link>
                </div>
            </WhiteBox>
        </>
    );
}

export default ExamsView;
