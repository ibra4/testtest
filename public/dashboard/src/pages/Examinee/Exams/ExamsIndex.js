import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import { httpClient } from 'providers/helpers'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import ExamsView from './ExamsView'
import { useHistory } from 'react-router-dom'
import { useToasts } from 'react-toast-notifications'

function ExamsIndex() {

    const { t } = useTranslation()
    const { id } = useParams()
    const { addToast } = useToasts()
    const { push } = useHistory()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")

    const getData = async () => {
        const res = await httpClient.get(`examinees/${id}/exams`)
        setData(res.data)
        setStatus("success")
    }

    useEffect(() => {
        getData();
    }, [])

    const onCreateExam = async (data, examType) => {
        const res = await httpClient.post(`examinees/${examType}/create/${id}`, data)

        if (res.status == 200) {
            addToast(t('Leiter Report Saved Successfully'), { appearance: 'success' });
            push(`/reports/${examType}/${res.data.id}`)
        } else {
            addToast(t('Something went wrong'));
            return res
        }
    }

    return (
        <Layout title={t("Examinee exams")}>
            {status == 'loading' && <FullLoader />}
            <ExamsView data={data} onCreateExam={onCreateExam} />
        </Layout>
    )
}

export default ExamsIndex
