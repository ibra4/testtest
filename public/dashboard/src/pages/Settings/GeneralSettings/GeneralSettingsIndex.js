import React, { useEffect, useState } from 'react'
import Layout from 'components/Layout'
import Form from './Form'
import { httpClient } from 'providers/helpers'
import FullLoader from 'components/FullLoader'
import { useToasts } from 'react-toast-notifications'
import { useTranslation } from 'react-i18next'

function GeneralSettingsIndex() {

    const { t } = useTranslation()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")

    const getData = async () => {
        const res = await httpClient.get('/settings')
        setData(res.data)
        setStatus("success")
    }

    const { addToast } = useToasts()

    useEffect(() => {
        getData()
    }, [])

    const onSubmit = async (data) => {
        const res = await httpClient.put(`/settings/update`, data)
        if (res.status == 200) {
            addToast(t('Saved Successfully'), { appearance: 'success' });
        } else {
            addToast(t(generalErrorText), { appearance: 'error' });
        }
    }

    return (
        <Layout title={t('Settings')}>
            {status == "success" ? <Form initialValues={data} onSubmit={onSubmit} /> : <FullLoader />}
        </Layout>
    )
}

export default GeneralSettingsIndex
