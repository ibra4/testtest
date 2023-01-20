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
            <AvatarNameTD item={item} />
            <td>{item.used_reports}</td>
            <td>{item.number_of_reports}</td>
        </tr>
    );

    return (
        <>
            <Table striped>
                <thead>
                    <tr>
                        <th>{t('ID')}</th>
                        <th>{t('Admin')}</th>
                        <th>{t('Used Reports')}</th>
                        <th>{t('Number of reports')}</th>
                    </tr>
                </thead>
                <tbody>{data && data && data.map(renderRow)}</tbody>
            </Table>
        </>
    );
};

export default Top5Examiners;
