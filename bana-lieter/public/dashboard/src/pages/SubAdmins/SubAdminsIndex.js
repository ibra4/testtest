import React, { useState } from 'react'
import Layout from 'components/Layout'
import { ROUTES } from 'providers/routes'
import Filters from './Filters'
import { useDataTable } from 'providers/hooks/useDataTable'
import View from './View'
import { useSelector } from 'react-redux'

function SubAdminsIndex() {
    const [status, setStatus] = useState("not-ready")
    const config = useSelector(state => state.app.config)
    
    const [queryParams, setQueryParams] = useState({
        page: 1,
        name: '',
        email: '',
        admin_id: config.user.role === 'root' ? '' : config.user.id
    })

    const { data, onSearch } = useDataTable(queryParams, setQueryParams, status, setStatus, ROUTES.SUB_ADMINS.GET)

    return (
        <Layout title='Sub Admins'>
            <Filters onSearch={onSearch} queryParams={queryParams} config={config} />
            {data && data.data && <View data={data} onSearch={onSearch} queryParams={queryParams} />}
        </Layout>
    )
}

export default SubAdminsIndex
