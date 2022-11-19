import { FaEdit, FaFileExcel, FaPlus, FaTrash } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import QueryString from 'qs';
import { Link, useHistory, useParams } from 'react-router-dom';
import Showing from 'components/Datatable/Showing';
import NoData from 'components/Datatable/NoData';
import Pagination from 'components/Datatable/Pagination';
import AvatarNameTD from 'components/Datatable/AvatarNameTD';
import WhiteBox from 'components/WhiteBox';
import DataTable from 'react-data-table-component';


const View = ({ data, queryParams, onSearch }) => {
    const { push } = useHistory();
    const { type } = useParams();
    const columns = [
        {
            id: 'scaled_score',
            name: 'Scaled Score',
            selector: (row) => row.scaled_score,
            sortable: true
        },
        {
            id: 'value',
            name: 'Value',
            selector: (row) => row.value,
            sortable: true
        },
        {
            id: 'min_age',
            name: 'Min age',
            selector: (row) => row.min_age,
            sortable: true
        },
        {
            id: 'max_age',
            name: 'Max Age',
            selector: (row) => row.max_age,
            sortable: true
        },
        {
            id: 'actions',
            name: 'actions',
            selector: (row) => (
                <>
                    <div className="d-flex">
                        <ActionButton
                            icon={<FaEdit />}
                            onClick={() => push(`/leiter-records/${row._id}/update`)}
                            variant="success"
                        />
                        <ActionButton icon={<FaTrash />} onClick={() => {}} variant="danger" classes="ms-3" />
                    </div>
                </>
            )
        }
    ];
    
    const handleSort = ({ id }, order) => {
        onSearch({ ...queryParams, sort: [id, order] });
    };

    const renderRow = (item) => (
        <tr key={item._id}>
            {/* <td>{item._id}</td> */}
            <td>{item.scaled_score}</td>
            <td>{item.value}</td>
            <td>{item.min_age}</td>
            <td>{item.max_age}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        icon={<FaEdit />}
                        onClick={() => push(`/leiter-records/${item._id}/update`)}
                        variant="success"
                    />
                    <ActionButton icon={<FaTrash />} onClick={() => {}} variant="danger" classes="ms-3" />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Showing data={data} />
                <div className="d-flex">
                    <Link to={`/leiter-records/${type}/create`} className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">Add new Record</span>
                    </Link>
                    <a
                        className="btn btn-success ms-2"
                        target="_blank"
                        href={`/leiter-records/${type}/export?${QueryString.stringify(queryParams)}`}
                    >
                        <FaFileExcel />
                        <span className="ms-2">Export to Excel</span>
                    </a>
                </div>
            </div>
            <WhiteBox>{data?.data && <DataTable columns={columns} data={data?.data} onSort={handleSort} />}</WhiteBox>
            <Pagination data={data} onSearch={onSearch} queryParams={queryParams} />
        </>
    );
};

export default View;
