import { useState, useEffect } from 'react';
import qs from 'qs'
import { useHistory, useLocation } from 'react-router-dom';
import { httpClient } from 'providers/helpers';
import { useToasts } from 'react-toast-notifications';
import { useTranslation } from 'react-i18next';

export const useDataTable = (queryParams, setQueryParams, status, setStatus, route) => {

    let { search, pathname } = useLocation();
    let { push } = useHistory();
    const { t } = useTranslation();
    const { addToast } = useToasts()

    const [data, setData] = useState({})
    const [isLoading, setIsLoading] = useState(true)

    useEffect(() => {
        if (status == 'not-ready') {
            const finalObj = { ...queryParams, ...qs.parse(search, { ignoreQueryPrefix: true }) }
            push(pathname + '?' + qs.stringify(finalObj))
        }
    }, [queryParams, route])

    useEffect(() => {
        if (search && search != '') {
            const queryParams = qs.parse(search, { ignoreQueryPrefix: true });
            setQueryParams(queryParams)
            setStatus('ready')
        }
    }, [search])

    const onSearch = (values) => {
        setStatus('not-ready');
        push(pathname + '?' + qs.stringify(values));
    }

    useEffect(() => {
        if (status == 'ready') {
            getData()
        }
    }, [status])

    const handleDelete = async id => {
        const confirmed = confirm(t("confirm_delete", { id }))
        if (confirmed) {
            const res = await httpClient.post(`${route}/${id}/delete`)
            addToast(res.data.message, { appearance: res.status == 200 ? "success" : "error" })
            getData()
        }
    }

    const getData = async () => {
        setIsLoading(true)
        const res = await httpClient.get(`${route}?${qs.stringify(queryParams)}`)
        setData(res.data)
        setStatus('not-ready')
        setIsLoading(false)
    }

    const updateCallback = (values) => {
        setData({ ...data, data: data?.data.map(item => item.id == values.id ? values : item) })
    }

    const createCallback = getData

    return { onSearch, data, isLoading, getData, handleDelete, updateCallback, createCallback }
}