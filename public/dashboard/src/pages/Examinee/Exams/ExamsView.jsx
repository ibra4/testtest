import ExamineeGeneralData from 'components/ExamineeGeneralData';
import WhiteBox from 'components/WhiteBox';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaPlus } from 'react-icons/fa';
import { Link } from 'react-router-dom';
import AbasTableView from './Views/AbasTableView';
import LeiterTableView from './Views/LeiterTableView';

function ExamsView({ data, onCreateExam }) {
    const { t } = useTranslation();
    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <ExamineeGeneralData examinee={data.examinee} examiner={data.center} />
            </WhiteBox>
            <LeiterTableView rows={data?.leiter} onCreateExam={onCreateExam} />
            <AbasTableView rows={data?.abas} onCreateExam={onCreateExam} />
            <WhiteBox title={t('CASD Tests')}>
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
                        <span className="ms-2">{t('create_new', { name: t('CASD Tests') })}</span>
                    </Link>
                </div>
            </WhiteBox>
            <WhiteBox title={t('MPR Tests')}>
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
                        <span className="ms-2">{t('create_new', { name: t('MPR Exam') })}</span>
                    </Link>
                </div>
            </WhiteBox>
        </>
    );
}

export default ExamsView;
