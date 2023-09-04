import React, { useState } from 'react'
import Layout from 'components/Layout'
import View from './View'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import Filters from './Filters'
import { useSelector } from 'react-redux'
import { useDataTable } from 'providers/hooks/useDataTable'

function CasdSubDomainsIndex() {

    const { t } = useTranslation()
    const config = useSelector((state) => state.app.config);

    const [status, setStatus] = useState("not-ready")

    const [queryParams, setQueryParams] = useState({
        page: 1,
        name: '',
        name_en: ''
    })

    const { data, onSearch, isLoading, handleDelete } = useDataTable(queryParams, setQueryParams, status, setStatus, '/casd/sub-domains')

    return (
        <Layout title={t('CASD Sub Domains')}>
            {isLoading && <FullLoader />}
            <Filters onSearch={onSearch} queryParams={queryParams} config={config} />
            <View data={data} onSearch={onSearch} queryParams={queryParams} />
        </Layout>
    )
}

export default CasdSubDomainsIndex
