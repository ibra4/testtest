import React from 'react';
import { Table } from 'react-bootstrap';
import AvatarNameTD from 'components/Datatable/AvatarNameTD';
import { useTranslation } from 'react-i18next';
import ActionButton from './Fields/ActionButton';
import { useHistory } from 'react-router-dom';
import { TbReportAnalytics } from 'react-icons/tb';
import { FaPlus } from 'react-icons/fa';

const Top5Examiners = ({ data }) => {
    const { t } = useTranslation();

    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <AvatarNameTD item={item.examiner} />
            <td>{item.examinee_name}</td>
            <td>{item.created_at}</td>
            <td>{item.updated_at}</td>
            <td>
                <ActionButton
                    label={t('View Report')}
                    icon={<TbReportAnalytics />}
                    onClick={() => push(`examinees/${item.id}/exam`)}
                />
            </td>
        </tr>
    );

    return (
        <>
            <Table striped>
                <thead>
                    <tr>
                        <th>{t('ID')}</th>
                        <th>{t('Examiner')}</th>
                        <th>{t('Examinee')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Latest Update')}</th>
                        <th>{t('Report')}</th>
                    </tr>
                </thead>
                <tbody>{data && data && data.map(renderRow)}</tbody>
            </Table>
            <div className="text-center">
                <ActionButton label={t('View More')} icon={<FaPlus />} onClick={() => push(`history`)} />
            </div>
        </>
    );
};

export default Top5Examiners;
