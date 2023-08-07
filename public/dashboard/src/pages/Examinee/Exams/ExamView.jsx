import ExamineeGeneralData from 'components/ExamineeGeneralData';
import ActionButton from 'components/Fields/ActionButton';
import LabelValueCol from 'components/LabelValueCol';
import WhiteBox from 'components/WhiteBox';
import { getAdminById, getCountryById, getGender } from 'providers/helpers';
import React from 'react';
import { Row, Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaPlus } from 'react-icons/fa';
import { TbReportAnalytics } from 'react-icons/tb';
import { Link } from 'react-router-dom';
import { useHistory } from 'react-router-dom';

function ExamView({ examinee, leiter }) {
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
                        <th>ID</th>
                        <th>{t('Age')}</th>
                        <th>{t('Created By')}</th>
                        <th>{t('Application Date')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Actions')}</th>
                    </thead>
                    <tbody>
                        {leiter &&
                            leiter.map((leiterReport) => (
                                <tr>
                                    <td>{leiterReport.id}</td>
                                    <td className="text-danger">{examinee.age}</td>
                                    <td className="text-danger">Mohannad</td>
                                    <td className="text-danger">{examinee.created_at}</td>
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
                    <Link to={`/reports/${90}/leiter/create`} className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', { name: 'Leiter Report' })}</span>
                    </Link>
                </div>
            </WhiteBox>
            <WhiteBox title={t('CASD Exams')}>
                <Table className="align-middle">
                    <thead>
                        <th>ID</th>
                        <th>{t('Age')}</th>
                        <th>{t('Created By')}</th>
                        <th>{t('Application Date')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Actions')}</th>
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
                        <th>ID</th>
                        <th>{t('Age')}</th>
                        <th>{t('Created By')}</th>
                        <th>{t('Application Date')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Actions')}</th>
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
                        <th>ID</th>
                        <th>{t('Age')}</th>
                        <th>{t('Created By')}</th>
                        <th>{t('Application Date')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Actions')}</th>
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

export default ExamView;
