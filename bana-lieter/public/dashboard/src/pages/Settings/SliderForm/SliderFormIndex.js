import React, { useEffect, useState } from 'react'
import { useHistory, useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import Form from './Form'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useSelector } from 'react-redux'
import { useToasts } from 'react-toast-notifications'

const defaultSlider = {
    title: '',
    description: '',
    image: ''
}

function SliderFormIndex() {

    const { id } = useParams()

    const title = id ? `Update slider #${id}` : 'Create new slider'

    const { push } = useHistory()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)

    const getData = async () => {
        const res = await httpClient.get(`${ROUTES.SLIDERS.GET}/${id}`)
        setData(res.data)
        setStatus("success")
    }

    const { addToast } = useToasts()

    useEffect(() => {
        if (id) {
            getData()
        } else {
            setData(defaultSlider)
            setStatus("success")
        }
    }, [])

    const onSubmit = async (data) => {
        let res;
        if (id) {
            res = await httpClient.put(`${ROUTES.SLIDERS.GET}/${id}/update`, data)
        } else {
            res = await httpClient.post(`${ROUTES.SLIDERS.GET}/create`, data)
        }
        if (res.status == 200) {
            addToast('Slider Saved Successfully', { appearance: 'success' });
            push('/settings/slider')
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

export default SliderFormIndex
