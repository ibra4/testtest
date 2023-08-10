import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import LeiterView from './LeiterView'

function LeiterIndex() {

    const { t } = useTranslation()
    const { id } = useParams()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")

    const getData = async () => {
        const res = await httpClient.get(`examinees/leiter/${id}`)
        setData(res.data)
        setStatus("success")
    }

    useEffect(() => {
        getData()
    }, [])

    const onSectionSubmit = async (type, values) => {
        return await httpClient.put(`examinees/leiter/update/${id}/${type}`, values)
    }

    return (
        <Layout title={t("Leiter Exam") + `#${id}`}>
            {status == "success" ? <LeiterView data={data} onSectionSubmit={onSectionSubmit} /> : <FullLoader />}
        </Layout>
    )
}

export default LeiterIndex
