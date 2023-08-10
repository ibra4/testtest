import React, { useState } from 'react'
import Layout from 'components/Layout'
import { ROUTES } from 'providers/routes'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import ReportsLeiterView from './ReportsLeiterView'

function ReportsLeiterIndex() {
    const { t } = useTranslation();
    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        id: '',
        name: '',
        admin_id: ''
    })

    const { data, onSearch, isLoading, handleDelete } = useDataTable(queryParams, setQueryParams, status, setStatus, '/reports/leiter')

    return (
        <Layout title={t('Leiter Reports')}>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <ReportsLeiterView data={data} onSearch={onSearch} queryParams={queryParams} handleDelete={handleDelete} />
        </Layout>
    )
}

export default ReportsLeiterIndex
