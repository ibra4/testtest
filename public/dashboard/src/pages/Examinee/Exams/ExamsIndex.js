import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import { httpClient } from 'providers/helpers'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import ExamsView from './ExamsView'
import { useHistory } from 'react-router-dom'
import { useToasts } from 'react-toast-notifications'
import GeneralError from 'components/GeneralError'
import { generalErrorText } from 'providers/helpers/constants'

function ExamsIndex() {

    const { t } = useTranslation()
    const { id } = useParams()
    const { addToast } = useToasts()
    const { push } = useHistory()

    const [data, setData] = useState({})
    const [errorResponse, setErrorResponse] = useState(null)
    const [status, setStatus] = useState("loading")

    const getData = async () => {
        try {
            const res = await httpClient.get(`examinees/${id}/exams`)
            setData(res.data)
            setStatus("success")
        } catch (error) {
            setErrorResponse(error)
            setStatus('error');
        }
    }

    useEffect(() => {
        getData();
    }, [])

    const onCreateExam = async (data, examType) => {
        const res = await httpClient.post(`leiter-exams/create/${id}`, data)

        if (res.status == 200) {
            addToast(t('Saved Successfully'), { appearance: 'success' });
            push(`/reports/${examType}/${res.data.id}`)
        } else {
            addToast(t(generalErrorText), {appearance: 'error'});
            return res
        }
    }

    const renderView = () => {
        switch (status) {
            case 'loading':
                return <FullLoader />
            case 'success':
                return <ExamsView data={data} onCreateExam={onCreateExam} />
            case 'error':
                return <GeneralError errorResponse={errorResponse} />
        }
    }

    return (
        <Layout title={t("Examinee exams")}>
            {renderView()}
        </Layout>
    )
}

export default ExamsIndex
