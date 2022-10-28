import React, { useState } from 'react'
import Layout from 'components/Layout'
import { ROUTES } from 'providers/routes'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import View from './View'
import FullLoader from 'components/FullLoader'

function AdminsIndex() {
    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        name: '',
        email: ''
    })

    const { data, onSearch, isLoading } = useDataTable(queryParams, setQueryParams, status, setStatus, ROUTES.ADMINS.LIST)

    return (
        <Layout title='Admins'>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <View data={data} onSearch={onSearch} queryParams={queryParams} />
        </Layout>
    )
}

export default AdminsIndex
