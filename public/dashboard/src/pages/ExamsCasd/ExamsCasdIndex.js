import React, { useState } from 'react'
import Layout from 'components/Layout'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import View from './View'

function ExamsCasdIndex() {
    const { t } = useTranslation();
    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        id: '',
        name: '',
        // admin_id: ''
    })

    const { data, onSearch, isLoading, handleDelete } = useDataTable(queryParams, setQueryParams, status, setStatus, '/exams/casd')

    return (
        <Layout title={t('Casd Exams')}>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <View data={data} onSearch={onSearch} queryParams={queryParams} handleDelete={handleDelete} />
        </Layout>
    )
}

export default ExamsCasdIndex
