import { FaEdit, FaFileExcel, FaPlus, FaTrash } from 'react-icons/fa';
import { TbReportAnalytics } from 'react-icons/tb';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import QueryString from 'qs';
import { Link, useHistory } from 'react-router-dom';
import Showing from 'components/Datatable/Showing';
import NoData from 'components/Datatable/NoData';
import Pagination from 'components/Datatable/Pagination';
import AvatarNameTD from 'components/Datatable/AvatarNameTD';
import WhiteBox from 'components/WhiteBox';
import { useTranslation } from 'react-i18next';

const View = ({ data, queryParams, onSearch }) => {
    const { t } = useTranslation();
    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <AvatarNameTD item={item} />
            <td>{item.age}</td>
            <td>{item.gender}</td>
            <td>{item.adminname}</td>
            <td>{item.createdbyadminname}</td>
            <td>{item.created_at}</td>
            <td>{item.updated_at}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        icon={<FaEdit />}
                        onClick={() => push(`examinees/${item.id}/update`)}
                        variant="success"
                    />
                    <ActionButton
                        icon={<TbReportAnalytics />}
                        onClick={() => push(`examinees/${item.id}/exam`)}
                        variant="primary"
                    />
                    <ActionButton icon={<FaTrash />} onClick={() => {}} variant="danger" />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Showing data={data} />
                <div className="d-flex">
                    <Link to="/examinees/create" className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', {name: t('Examinee')})}</span>
                    </Link>
                    <a
                        className="btn btn-success ms-2"
                        target="_blank"
                        href={`/examinees/export?${QueryString.stringify(queryParams)}`}
                    >
                        <FaFileExcel />
                        <span className="ms-2">{t('Export to Excel')}</span>
                    </a>
                </div>
            </div>
            <WhiteBox>
                <Table striped responsive>
                    <thead>
                        <tr>
                            <th>{t('ID')}</th>
                            <th>{t('Name')}</th>
                            <th>{t('Age')}</th>
                            <th>{t('Gender')}</th>
                            <th>{t('Admin Name')}</th>
                            <th>{t('Created By')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Latest Update')}</th>
                            <th>{t('Actions')}</th>
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
