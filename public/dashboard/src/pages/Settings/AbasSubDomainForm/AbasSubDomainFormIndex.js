import React, { useEffect, useState } from 'react'
import { useHistory, useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import Form from './Form'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useSelector } from 'react-redux'
import { useToasts } from 'react-toast-notifications'
import { useTranslation } from 'react-i18next'

const defaultDomain = {
    name: '',
    name_en: '',
    abas_domain_id: '',
    for: '',
    min_age: '',
    max_age: ''
}

function AbasSubDomainFormIndex() {

    const { t } = useTranslation()
    const { id } = useParams()

    const title = id ? `${t('update', { name: t('Sub Domain') })} #${id}` : t('create_new', { name: t('Sub Domain') })

    const { push } = useHistory()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)

    const getData = async () => {
        const res = await httpClient.get(`abas/sub-domains/${id}`)
        setData(res.data)
        setStatus("success")
    }

    const { addToast } = useToasts()

    useEffect(() => {
        if (id) {
            getData()
        } else {
            setData(defaultDomain)
            setStatus("success")
        }
    }, [])

    const onSubmit = async (data) => {
        let res;
        if (id) {
            res = await httpClient.put(`abas/sub-domains/${id}/update`, data)
        } else {
            res = await httpClient.post(`abas/sub-domains/create`, data)
        }
        if (res.status == 200) {
            addToast(t('Saved Successfully'), { appearance: 'success' });
            push('/settings/abas/sub-domains')
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

export default AbasSubDomainFormIndex