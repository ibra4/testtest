import { FaEdit, FaPlus } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import { Link, useHistory } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import moment from 'moment';
import WhiteBox from 'components/WhiteBox';
import Pagination from 'components/Datatable/Pagination';
import Showing from 'components/Datatable/Showing';

const View = ({ data, onSearch, queryParams }) => {
    const { t } = useTranslation();
    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <td>{item.name}</td>
            <td>{item.name_en}</td>
            <td>{item.domain_full_name}</td>
            <td>{moment(item.created_at).format('yyyy-MM-DD')}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        label={t('Edit')}
                        icon={<FaEdit />}
                        onClick={() => push(`/settings/abas/questions/${item.id}/update`)}
                        variant="success"
                    />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Showing data={data} />
                <Link to="/settings/abas/questions/create" className="btn btn-primary">
                    <FaPlus />
                    <span className="ms-2">{t('create_new', { name: t('Question') })}</span>
                </Link>
            </div>
            <WhiteBox>
                <Table striped>
                    <thead>
                        <tr>
                            <th>{t('ID')}</th>
                            <th>{t('Name')}</th>
                            <th>{t('Name En')}</th>
                            <th>{t('Sub Domain')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>{data && data.data && data.data.map(renderRow)}</tbody>
                </Table>
            </WhiteBox>
            <Pagination data={data} onSearch={onSearch} queryParams={queryParams} />
        </>
    );
};

export default View;
