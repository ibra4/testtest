import React, { useState } from 'react'
import Layout from 'components/Layout'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import View from './View'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'

function NotificationsIndex() {
    const { t } = useTranslation();
    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        title: '',
        type: '',
        for: 'all'
    })

    const { data, onSearch, isLoading, handleDelete } = useDataTable(queryParams, setQueryParams, status, setStatus, '/notifications')

    return (
        <Layout title={t('Notifications Center')}>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <View data={data} onSearch={onSearch} queryParams={queryParams} handleDelete={handleDelete} />
        </Layout>
    )
}

export default NotificationsIndex
