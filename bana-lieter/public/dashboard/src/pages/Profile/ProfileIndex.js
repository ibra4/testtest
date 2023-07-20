import React, { useEffect, useState } from 'react'
import { useHistory } from 'react-router-dom'
import Layout from 'components/Layout'
import Form from './Form'
import { getLangcode, httpClient } from 'providers/helpers'
import { ROUTES } from 'providers/routes'
import FullLoader from 'components/FullLoader'
import { useSelector } from 'react-redux'
import { useToasts } from 'react-toast-notifications'
import NotFoundErrorMessage from 'components/NotFoundErrorMessage'
import { useTranslation } from 'react-i18next'

function ProfileIndex() {

    const { t } = useTranslation()

    const { push } = useHistory()

    const [data, setData] = useState()
    const [status, setStatus] = useState("loading")
    const config = useSelector(state => state.app.config)
    const [message, setMessage] = useState(null)

    const getData = async () => {
        try {
            const res = await httpClient.get(`${ROUTES.MY_PROFILE.GET}`)
            setData(res.data)
            setStatus("success")
        } catch (error) {
            if (error.response.status == 404) {
                setStatus("error")
                setMessage(t("Profile not found"))
            }
        }
    }

    const { addToast } = useToasts()

    useEffect(() => {
        getData()
    }, [])

    const onSubmit = async (data) => {
        const res = await httpClient.post(ROUTES.MY_PROFILE.POST, data)
        if (res.status == 200) {
            addToast(t('Updated Successfully'), { appearance: 'success' });
            const currentLocale = getLangcode();
            const newLocale = res.data.locale;
            if (newLocale != currentLocale) {
                localStorage.setItem('lang', newLocale);
                let pathname = window.location.pathname;
                pathname = pathname.replace(currentLocale, newLocale)
                console.log('pathname : ', pathname);
                window.location.pathname = pathname;
            }
            // push('/my-profile')
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
        <Layout title={t('Update My Profile')}>
            {renderView()}
        </Layout>
    )
}

export default ProfileIndex
