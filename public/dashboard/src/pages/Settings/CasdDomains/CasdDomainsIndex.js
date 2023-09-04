import React, { useEffect, useState } from 'react'
import Layout from 'components/Layout'
import View from './View'
import FullLoader from 'components/FullLoader'
import { httpClient } from 'providers/helpers'
import { useTranslation } from 'react-i18next'

function CasdDomainsIndex() {

    const { t } = useTranslation()
    const [data, setData] = useState([])
    const [isLoading, setIsLoading] = useState(true)

    const getData = async () => {
        try {
            const res = await httpClient.get('/casd/domains')
            setData(res.data)
            setIsLoading(false)
        } catch (error) {
            setIsLoading(false)
        }
    }

    useEffect(() => {
        getData()
    }, [])

    return (
        <Layout title={t('CASD Domains')}>
            {isLoading && <FullLoader />}
            <View data={data} />
        </Layout>
    )
}

export default CasdDomainsIndex
