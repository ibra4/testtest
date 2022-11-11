import React, { useEffect, useState } from 'react'
import { useHistory, useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import Form from './Form'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useDispatch, useSelector } from 'react-redux'
import { useToasts } from 'react-toast-notifications'
import { addAdmin, updateAdmin } from 'providers/actions/AppActions'

const defaultUser = {
    name: '',
    email: '',
    phone_number: '',
    expiration_date: '',
    avatar: '',
    number_of_reports: 0,
    country_id: '',
    city_id: '',
    is_active: 1
}

function AdminFormIndex() {

    const { id } = useParams()

    const title = id ? `Update admin #${id}` : 'Create new admin'

    const { push } = useHistory()

    const dispatch = useDispatch()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)

    const getData = async () => {
        const res = await httpClient.get(`${ROUTES.ADMINS.LIST}/${id}`)
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
            res = await httpClient.put(`${ROUTES.ADMINS.LIST}/${id}/update`, data)
            dispatch(updateAdmin(res.data.id, res.data.name))
        } else {
            res = await httpClient.post(ROUTES.ADMINS.CREATE, data)
            dispatch(addAdmin({id: res.data.id, label: res.data.name}))
        }
        if (res.status == 200) {
            addToast('Admin Saved Successfully', { appearance: 'success' });
            push('/admins')
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

export default AdminFormIndex
