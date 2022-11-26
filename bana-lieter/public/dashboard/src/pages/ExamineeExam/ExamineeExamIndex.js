import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import View from './View'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'

function ExamineeExamIndex() {

    const { id } = useParams()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")

    const getData = async () => {
        const res = await httpClient.get(`${ROUTES.EXAMINEES.EXAM}/${id}`)
        setData(res.data)
        setStatus("success")
    }

    useEffect(() => {
        getData()
    }, [])

    const onSectionSubmit = async (type, values) => {
        try {
            return await httpClient.put(`${ROUTES.EXAMINEES.EXAM}/${id}/${type}`, values)
        } catch (error) {
            console.log(error)
        }
    }

    return (
        <Layout title="Exam">
            {status == "success" ? <View data={data} onSectionSubmit={onSectionSubmit} /> : <FullLoader />}
        </Layout>
    )
}

export default ExamineeExamIndex
