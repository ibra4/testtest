import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import { httpClient } from 'providers/helpers'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import AbasView from './AbasView'
import GeneralError from 'components/GeneralError'
import { useToasts } from 'react-toast-notifications'

function AbasIndex() {

    const { t } = useTranslation()
    const { id } = useParams()
    const { addToast } = useToasts()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")
    const [error, setError] = useState(null)

    const getData = async () => {
        try {
            const res = await httpClient.get(`abas-exams/${id}`)
            setData(res.data)
            setStatus("success")
        } catch (error) {
            setError(error)
            setStatus('error');
        }
    }

    useEffect(() => {
        getData()
    }, [])

    const onSubDomainSubmit = async (type, values) => {
        return await httpClient.put(`abas-exams/update/${id}/${type}`, values)
    }

    const renderView = () => {
        switch (status) {
            case 'loading':
                return <FullLoader />
            case 'success':
                return <AbasView data={data} onSubDomainSubmit={onSubDomainSubmit} />
            case 'error':
                return <GeneralError message={error} />
        }
    }

    return (
        <Layout title={t("ABAS Exam") + `#${id}`}>
            {renderView()}
        </Layout>
    )
}

export default AbasIndex
