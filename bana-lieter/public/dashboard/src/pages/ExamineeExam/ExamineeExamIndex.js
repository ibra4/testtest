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
        const res = await httpClient.get(`${ROUTES.EXAMINEES.LIST}/${id}`)
        setData(res.data)
    }

    useEffect(() => {
        getData()
        setStatus("success")
    }, [])

    return (
        <Layout title="Exam">
            {status == "success" ? <View data={data} /> : <FullLoader />}
        </Layout>
    )
}

export default ExamineeExamIndex
