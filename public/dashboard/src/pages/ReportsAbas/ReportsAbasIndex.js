import React, { useState } from 'react'
import Layout from 'components/Layout'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import ReportsAbasView from './ReportsAbasView'

function ReportsAbasIndex() {
    const { t } = useTranslation();
    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        id: '',
        name: '',
        // admin_id: ''
    })

    const { data, onSearch, isLoading, handleDelete } = useDataTable(queryParams, setQueryParams, status, setStatus, '/abas-exams')

    return (
        <Layout title={t('ABAS Reports')}>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <ReportsAbasView data={data} onSearch={onSearch} queryParams={queryParams} handleDelete={handleDelete} />
        </Layout>
    )
}

export default ReportsAbasIndex
