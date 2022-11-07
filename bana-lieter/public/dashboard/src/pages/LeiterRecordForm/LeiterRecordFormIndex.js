import React, { useEffect, useState } from 'react'
import { useHistory, useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import Form from './Form'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useSelector } from 'react-redux'
import { useToasts } from 'react-toast-notifications'

const defaultUser = {
    min_age: '',
    max_age: '',
    value: '',
    scaled_score: ''
}

function LeiterRecordFormIndex() {

    const { id } = useParams()

    const title = id ? `Update leiter record #${id}` : 'Create new leiter record'

    const { push } = useHistory()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)

    const getData = async () => {
        const res = await httpClient.get(`${ROUTES.LEITER_RECORDS.CREATE}/${id}`)
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

    const onSubmit = async (values) => {
        let res;
        if (id) {
            res = await httpClient.put(`${ROUTES.LEITER_RECORDS.CREATE}/${id}/update`, values)
        } else {
            res = await httpClient.post(ROUTES.LEITER_RECORDS.CREATE, values)
        }
        if (res.status == 200) {
            addToast('Leiter record Saved Successfully', { appearance: 'success' });
            push(`/leiter-records/${data.type}`)
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

export default LeiterRecordFormIndex
