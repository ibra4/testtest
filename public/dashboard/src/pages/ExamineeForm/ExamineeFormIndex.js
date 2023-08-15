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
import { generalErrorText } from 'providers/helpers/constants'

const defaultUser = {
    name: '',
    name_en: '',
    birthday: '',
    gender: '',
    country_id: '',
    city_id: '',
    admin_id: '',
    examiner_notes: ''
}

function ExamineeFormIndex() {

    const { t } = useTranslation()
    const { id } = useParams()

    const title = id ? `${t('update', { name: t('Examinee') })} #${id}` : t('create_new', { name: t('Examinee') })

    const { push } = useHistory()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)

    const getData = async () => {
        const res = await httpClient.get(`${ROUTES.EXAMINEES.LIST}/${id}`)
        setData(res.data)
        setStatus("success")
    }

    const { addToast } = useToasts()

    useEffect(() => {
        if (id) {
            getData()
        } else {
            setData(defaultUser)
            setStatus("success")
        }
    }, [])

    const onSubmit = async (data) => {
        let res;
        if (id) {
            res = await httpClient.put(`${ROUTES.EXAMINEES.LIST}/${id}/update`, data)
        } else {
            res = await httpClient.post(ROUTES.EXAMINEES.CREATE, data)
        }
        if (res.status == 200) {
            addToast(t('Examinee Saved Successfully'), { appearance: 'success' });
            push('/examinees')
        } else {
            addToast(t(generalErrorText), {appearance: 'error'});
            return res
        }
    }

    return (
        <Layout title={title}>
            {status == "success" ? <Form initialValues={data} config={config} onSubmit={onSubmit} /> : <FullLoader />}
        </Layout>
    )
}

export default ExamineeFormIndex
