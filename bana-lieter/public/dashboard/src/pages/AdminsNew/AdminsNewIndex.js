import React, { useEffect, useState } from 'react';
import Layout from 'components/Layout';
import { ROUTES } from 'providers/routes';
import Filters from './Filters';
import { useDataTable } from 'providers/hooks/useDataTable';
import View from './View';
import FullLoader from 'components/FullLoader';
import { httpClient } from 'providers/helpers';
import DataTable from 'react-data-table-component';

const columns = [
    {
        id: 'id',
        name: 'ID',
        selector: (row) => row.id,
        sortable: true
    },
    {
        id: 'name',
        name: 'Name',
        selector: (row) => row.name,
        sortable: true
    },
    {
        name: 'Gender',
        selector: (row) => row.name
    }
];

function AdminsNewIndex() {
    const [data, setData] = useState();
    const [filters, setFilters] = useState({
        name: '',
        page: ''
    });

    const getData = async () => {
        const res = await httpClient.get('/admins');
        setData(res.data);
    };

    useEffect(() => {
        getData();
    }, []);

    const handleSort = ({ id }, order) => {
        console.log(order, id);
    };

    return (
        <Layout title="AdminsNew">
            <Filters queryParams={filters} onSearch={setFilters} />
            {data?.data && <DataTable
                columns={columns}
                data={data?.data}
                onSort={handleSort}
                pagination
                paginationServer
                paginationDefaultPage={1}
                paginationPerPage={data.data.per_page}
                paginationTotalRows={data.data.total}
                onChangePage={console.log}
            />}
        </Layout>
    );
}

export default AdminsNewIndex;
