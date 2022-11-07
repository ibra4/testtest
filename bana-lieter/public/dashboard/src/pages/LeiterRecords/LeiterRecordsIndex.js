import React, { useEffect, useState } from 'react'
import Layout from 'components/Layout'
import { ROUTES } from 'providers/routes'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import View from './View'
import FullLoader from 'components/FullLoader'
import { useHistory, useLocation, useParams } from 'react-router-dom'

function LeiterRecordsIndex() {
    const { type } = useParams()
    let { search, pathname } = useLocation();
    let { push } = useHistory();

    const [status, setStatus] = useState("not-ready")
    const [queryParams, setQueryParams] = useState({
        page: 1,
        min_age: '',
        max_age: '',
        scaled_score: '',
        value: '',
    })

    const { data, onSearch, isLoading } = useDataTable(queryParams, setQueryParams, status, setStatus, `${ROUTES.LEITER_RECORDS.GET_BY_TYPE}/type/${type}`)

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

    return (
        <Layout title={type}>
            <Filters onSearch={onSearch} queryParams={queryParams} />
            {isLoading && <FullLoader />}
            <View data={data} onSearch={onSearch} queryParams={queryParams} />
        </Layout>
    )
}

export default LeiterRecordsIndex
