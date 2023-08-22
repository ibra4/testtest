import { FaEdit, FaPlus } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import { Link, useHistory } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import moment from 'moment';

const View = ({ data }) => {
    const { t } = useTranslation();
    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <td>{item.name}</td>
            <td>{item.name_en}</td>
            <td>{item.domain_name}</td>
            <td>{item.category_label}</td>
            <td>{moment(item.created_at).format('yyyy-MM-DD')}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        label={t('Edit')}
                        icon={<FaEdit />}
                        onClick={() => push(`/settings/abas/sub-domains/${item.id}/update`)}
                        variant="success"
                    />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Link to="/settings/abas/sub-domains/create" className="btn btn-primary">
                    <FaPlus />
                    <span className="ms-2">{t('create_new', { name: t('Sub Domain') })}</span>
                </Link>
            </div>
            <Table striped>
                <thead>
                    <tr>
                        <th>{t('ID')}</th>
                        <th>{t('Name')}</th>
                        <th>{t('Name En')}</th>
                        <th>{t('Domain')}</th>
                        <th>{t('Category')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Actions')}</th>
                    </tr>
                </thead>
                <tbody>{data && data.map(renderRow)}</tbody>
            </Table>
        </>
    );
};

export default View;
