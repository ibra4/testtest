import { FaEdit, FaPlus, FaTrash } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import { Link, useHistory } from 'react-router-dom';
import { useTranslation } from 'react-i18next';

const View = ({ data }) => {
    const { t } = useTranslation();
    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <td>{item.title}</td>
            <td>
                <img src={item.image} className="slider-table-item" />
            </td>
            <td>{item.created_at}</td>
            <td>{item.updated_at}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        label={t('Edit')}
                        icon={<FaEdit />}
                        onClick={() => push(`/settings/slider/${item.id}/update`)}
                        variant="success"
                    />
                    <ActionButton
                        icon={<FaTrash />}
                        label={t('Delete')}
                        onClick={() => {}}
                        variant="danger"
                        classes="ms-3"
                    />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Link to="/settings/slider/create" className="btn btn-primary">
                    <FaPlus />
                    <span className="ms-2">{t('create_new', { name: t('Slider') })}</span>
                </Link>
            </div>
            <Table striped>
                <thead>
                    <tr>
                        <th>{t('ID')}</th>
                        <th>{t('Title')}</th>
                        <th>{t('Image')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Latest Update')}</th>
                        <th>{t('Actions')}</th>
                    </tr>
                </thead>
                <tbody>{data && data.map(renderRow)}</tbody>
            </Table>
        </>
    );
};

export default View;
