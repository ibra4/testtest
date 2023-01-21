import React, { useState } from 'react'
import Layout from 'components/Layout'
import { ROUTES } from 'providers/routes'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import View from './View'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'

function AdminsIndex() {
    const { t } = useTranslation();
    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        name: '',
        email: ''
    })

    const { data, onSearch, isLoading, handleDelete } = useDataTable(queryParams, setQueryParams, status, setStatus, ROUTES.ADMINS.LIST)

    return (
        <Layout title={t('Admins')}>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <View data={data} onSearch={onSearch} queryParams={queryParams} handleDelete={handleDelete} />
        </Layout>
    )
}

export default AdminsIndex
