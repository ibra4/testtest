import { useState, useEffect } from 'react';
import qs from 'qs'
import { useHistory, useLocation } from 'react-router-dom';
import { httpClient } from 'providers/helpers';

export const useDataTable = (queryParams, setQueryParams, status, setStatus, route) => {

    let { search, pathname } = useLocation();
    let { push } = useHistory();

    const [data, setData] = useState({})

    useEffect(() => {
        const finalObj = { ...queryParams, ...qs.parse(search, { ignoreQueryPrefix: true }) }
        push(pathname + '?' + qs.stringify(finalObj))
        if (status === "ready") {
            getData()
        }
    }, [queryParams])

    useEffect(() => {
        if (search && search != "") {
            const queryParams = qs.parse(search, { ignoreQueryPrefix: true });
            setQueryParams(queryParams)
            setStatus("ready")
        }
        return () => {
            setStatus("not-ready")
        }
    }, [search])

    const onSearch = (values) => {
        setStatus('not-ready');
        push(pathname + '?' + qs.stringify(values));
    }

    const getData = async () => {
        const res = await httpClient.get(`${route}?${qs.stringify(queryParams)}`)
        setData(res.data)
        setStatus("success")
    }

    return { onSearch, data }
}