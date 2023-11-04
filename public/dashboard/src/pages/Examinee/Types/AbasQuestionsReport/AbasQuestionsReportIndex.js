import FullLoader from 'components/FullLoader'
import GeneralError from 'components/GeneralError'
import { httpClient } from 'providers/helpers'
import React, { useEffect, useState } from 'react'
import { useTranslation } from 'react-i18next'
import { useParams } from 'react-router-dom'
import { useToasts } from 'react-toast-notifications'
import AbasQuestionsReportView from './AbasQuestionsReportView'
import Layout from 'components/Layout'

function AbasQuestionsReportIndex() {
    const { t } = useTranslation()
    const { id } = useParams()
    const { addToast } = useToasts()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")
    const [error, setError] = useState(null)

    const getData = async () => {
        try {
            const res = await httpClient.get(`/exams/abas/report-questions/${id}`)
            setData(res.data)
            setStatus("success")
        } catch (error) {
            setError(error)
            setStatus('error');
        }
    }

    useEffect(() => {
        getData();
    }, [])

    const handleUpdate = async data => {
        try {
            const res = await httpClient.put(`/exams/abas/report-questions/${id}`, data);
            setData(res.data)
            addToast(t('Saved Successfully'), { appearance: 'success' });
        } catch (error) {
            addToast(t('Error'), { appearance: 'error' });
        }
    }

    const renderView = () => {
        switch (status) {
            case 'loading':
                return <FullLoader />
            case 'success':
                return <AbasQuestionsReportView data={data} handleUpdate={handleUpdate} />
            case 'error':
                return <GeneralError message={error} />
        }
    }

    return (
        <Layout title={t("ABAS Exam") + ` #${id}`}>
            {renderView()}
        </Layout>
    )
}

export default AbasQuestionsReportIndex