import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useHistory } from 'react-router-dom';
import NoData from 'components/Datatable/NoData';
import Pagination from 'components/Datatable/Pagination';
import AvatarNameTD from 'components/Datatable/AvatarNameTD';
import WhiteBox from 'components/WhiteBox';
import { useTranslation } from 'react-i18next';
import { TbReportAnalytics } from 'react-icons/tb';

const View = ({ data, queryParams, onSearch }) => {
    const { t } = useTranslation();
    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <AvatarNameTD item={{
                name: item.admin_name,
                avatar: item.admin_avatar
            }} />
            <td>{item.examinee_name}</td>
            <td>{item.created_at}</td>
            <td>{item.updated_at}</td>
            <td>
                <ActionButton
                    label={t('View Exam')}
                    icon={<TbReportAnalytics />}
                    onClick={() => push(`examinees/${item.id}/exam`)}
                />
            </td>
        </tr>
    );

    return (
        <>
            <WhiteBox>
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
                    <tbody>{data && data.data && data.data.map(renderRow)}</tbody>
                </Table>
                <NoData data={data} />
            </WhiteBox>
            <Pagination data={data} onSearch={onSearch} queryParams={queryParams} />
        </>
    );
};

export default View;
