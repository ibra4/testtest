import React, { useEffect, useState } from 'react'
import { useHistory, useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import Form from './Form'
import { httpClient } from 'providers/helpers'
import FullLoader from 'components/FullLoader'
import { useSelector } from 'react-redux'
import { useToasts } from 'react-toast-notifications'
import { useTranslation } from 'react-i18next'

const defaultQuestion = {
    name: '',
    name_en: '',
    casd_sub_domain_id: '',
    question_number: 0
}

function CasdQuestionFormIndex() {

    const { t } = useTranslation()
    const { id } = useParams()

    const title = id ? `${t('update', { name: t('Question') })} #${id}` : t('create_new', { name: t('Question') })

    const { push } = useHistory()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)

    const getData = async () => {
        const res = await httpClient.get(`casd/questions/${id}`)
        setData(res.data)
        setStatus("success")
    }

    const { addToast } = useToasts()

    useEffect(() => {
        if (id) {
            getData()
        } else {
            setData(defaultQuestion)
            setStatus("success")
        }
    }, [])

    const onSubmit = async (data) => {
        let res;
        if (id) {
            res = await httpClient.put(`casd/questions/${id}/update`, data)
        } else {
            res = await httpClient.post(`casd/questions/create`, data)
        }
        if (res.status == 200) {
            addToast(t('Saved Successfully'), { appearance: 'success' });
            push('/settings/casd/questions')
        } else {
            return res
        }
    }

    return (
        <Layout title={title}>
            {status == "success" ? <Form initialValues={data} config={config} onSubmit={onSubmit} /> : <FullLoader />}
        </Layout>
    )
}

export default CasdQuestionFormIndex
