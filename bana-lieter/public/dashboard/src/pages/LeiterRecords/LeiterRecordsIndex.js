import React, { useEffect, useState } from 'react'
import Layout from 'components/Layout'
import { ROUTES } from 'providers/routes'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import View from './View'
import FullLoader from 'components/FullLoader'
import { useHistory, useLocation, useParams } from 'react-router-dom'
import { useTranslation } from 'react-i18next'
import { getLeiterRecordLabelByType, httpClient } from 'providers/helpers'

function LeiterRecordsIndex() {
    const { t } = useTranslation()
    const { type } = useParams()
    let { pathname } = useLocation();
    let { push } = useHistory();

    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        min_age: '',
        max_age: '',
        scaled_score: '',
        value: '',
        sort: []
    })

    const { data, onSearch, isLoading, getData } = useDataTable(queryParams, setQueryParams, status, setStatus, `${ROUTES.LEITER_RECORDS.GET_BY_TYPE}/type/${type}`)

    useEffect(() => {
        push(pathname)
        setQueryParams({
            page: 1,
            min_age: '',
            max_age: '',
            scaled_score: '',
            value: '',
        })
    }, [type])

    const handleDelete = async id => {
        await httpClient.post(`${ROUTES.LEITER_RECORDS.CREATE}/${id}/delete`, {})
        getData()
    }

    return (
        <Layout title={t(getLeiterRecordLabelByType(type))}>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <View data={data} onSearch={onSearch} queryParams={queryParams} handleDelete={handleDelete} />
        </Layout>
    )
}

export default LeiterRecordsIndex
