import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import Layout from 'components/Layout'
import { httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import Loader from 'react-loader-spinner'
import ExamView from './ExamView'

function ExamsIndex() {

    const { t } = useTranslation()
    const { id } = useParams()

    const [data, setData] = useState({})
    const [status, setStatus] = useState("loading")

    const getData = async () => {
        const res = await httpClient.get(`examinees/${id}/exams`)
        setData(res.data)
        setStatus("success")
    }

    useEffect(() => {
        getData();
    }, [])

    console.log('data : ', data);
    
    return (
        <Layout title={t("Examinee exams")}>
            {status == 'loading' && <FullLoader />}
            <ExamView examinee={data.examinee} leiter={data.leiter} />
        </Layout>
    )
}

export default ExamsIndex
