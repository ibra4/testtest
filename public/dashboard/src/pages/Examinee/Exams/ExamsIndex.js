import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import View from './View'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import Loader from 'react-loader-spinner'

function ExamsIndex() {

    const { t } = useTranslation()
    const { id } = useParams()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")

    const getData = async () => {
        const res = await httpClient.get(`examinees//${id}/exams`)
        setData(res.data)
        setStatus("success")
    }

    useEffect(() => {
        getData()
    }, [])

    return (
        <Layout title={t("Examinee exams")}>
            <Loader />
            {status == "success" ? <View data={data} onSectionSubmit={onSectionSubmit} /> : <FullLoader />}
        </Layout>
    )
}

export default ExamsIndex
