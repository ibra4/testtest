import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import { httpClient } from 'providers/helpers'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import CasdView from './CasdView'
import GeneralError from 'components/GeneralError'
import { useToasts } from 'react-toast-notifications'
import { generalErrorText } from 'providers/helpers/constants'

function CasdIndex() {

    const { t } = useTranslation()
    const { id } = useParams()
    const { addToast } = useToasts()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")
    const [error, setError] = useState(null)

    const getData = async () => {
        try {
            const res = await httpClient.get(`casd-exams/${id}`)
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

    const onExamSubmit = async (values) => {
        try {
            const confirmed = confirm(t("confirm_save_exam"))
            if (confirmed) {
                const res = await httpClient.put(`casd-exams/update/${id}`, values)
                addToast(t('Saved Successfully'), { appearance: 'success' });
                setData(res.data);
            }
        } catch (error) {
            console.log
            addToast(t(generalErrorText), { appearance: 'error' });
        }
    }

    const renderView = () => {
        switch (status) {
            case 'loading':
                return <FullLoader />
            case 'success':
                return <CasdView data={data} onExamSubmit={onExamSubmit} />
            case 'error':
                return <GeneralError message={error} />
        }
    }

    return (
        <Layout title={t("CASD Exam") + ` #${id}`}>
            {renderView()}
        </Layout>
    )
}

export default CasdIndex
