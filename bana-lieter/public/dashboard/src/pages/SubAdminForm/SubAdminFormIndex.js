import React, { useEffect, useState } from 'react'
import { useHistory, useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import Form from './Form'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useSelector } from 'react-redux'
import { useToasts } from 'react-toast-notifications'
import NotFoundErrorMessage from 'components/NotFoundErrorMessage'

const defaultUser = {
    name: '',
    email: '',
    phone_number: '',
    avatar: '',
}

function SubAdminFormIndex() {

    const { id } = useParams()

    const title = id ? `Update Sub admin #${id}` : 'Create new Sub admin'

    const { push } = useHistory()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)
    const [message, setMessage] = useState(null)

    const getData = async () => {
        try {
            const res = await httpClient.get(`${ROUTES.SUB_ADMINS.LIST}/${id}`)
            setData(res.data)
            setStatus("success")
        } catch (error) {
            if (error.response.status == 404) {
                setStatus("error")
                setMessage("SubAdmin not found")
            }
        }
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
            res = await httpClient.put(`${ROUTES.SUB_ADMINS.LIST}/${id}/update`, data)
        } else {
            res = await httpClient.post(ROUTES.SUB_ADMINS.CREATE, data)
        }
        if (res.status == 200) {
            addToast('Sub Admin Saved Successfully', { appearance: 'success' });
            push('/sub-admins')
        } else {
            return res
        }
    }

    const renderView = () => {
        switch (status) {
            case 'success':
                return <Form initialValues={data} config={config} onSubmit={onSubmit} />
            case 'loading':
                return <FullLoader />
            case 'error':
                return <NotFoundErrorMessage message={message} />
        }
    }

    return (
        <Layout title={title}>
            {renderView()}
        </Layout>
    )
}

export default SubAdminFormIndex
