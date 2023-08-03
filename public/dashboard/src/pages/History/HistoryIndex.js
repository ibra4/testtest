import React, { useState } from 'react'
import Layout from 'components/Layout'
import { ROUTES } from 'providers/routes'
import { useDataTable } from 'providers/hooks/useDataTable'
import View from './View'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'

function HistoryIndex() {
    const { t } = useTranslation();
    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
    })

    const { data, onSearch, isLoading } = useDataTable(queryParams, setQueryParams, status, setStatus, ROUTES.HISTORY.GET)

    return (
        <Layout title={t('History')}>
            {/* <Filters onSearch={onSearch} queryParams={queryParams} /> */}
            {isLoading && <FullLoader />}
            <View data={data} onSearch={onSearch} queryParams={queryParams} />
        </Layout>
    )
}

export default HistoryIndex
