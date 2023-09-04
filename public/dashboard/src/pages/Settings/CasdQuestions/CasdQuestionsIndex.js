import React, { useState } from 'react'
import Layout from 'components/Layout'
import View from './View'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import { useDataTable } from 'providers/hooks/useDataTable'
import { useSelector } from 'react-redux'
import Filters from './Filters'

function CasdQuestionsIndex() {

    const { t } = useTranslation()
    const config = useSelector((state) => state.app.config);

    const [status, setStatus] = useState("not-ready")

    const [queryParams, setQueryParams] = useState({
        page: 1,
        name: '',
        name_en: '',
        casd_sub_domain_id: ''
    })

    const { data, onSearch, isLoading, handleDelete } = useDataTable(queryParams, setQueryParams, status, setStatus, '/casd/questions')

    return (
        <Layout title={t('CASD Questions')}>
            {isLoading && <FullLoader />}
            <Filters onSearch={onSearch} queryParams={queryParams} config={config} />
            <View data={data} onSearch={onSearch} queryParams={queryParams} />
        </Layout>
    )
}

export default CasdQuestionsIndex
