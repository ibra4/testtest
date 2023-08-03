import { useEffect, useState } from 'react'

export const useReport = (initialValues, onSubmit, type) => {
    const [data, setData] = useState({});
    const [isLoading, setIsLoading] = useState(false);

    useEffect(() => {
        setData({
            file_en: initialValues.file_en,
            file_ar: initialValues.file_ar,
            updated_at: initialValues.updated_at,
            saved: initialValues.saved,
        });
    }, []);

    const submitHandler = async (values, { setErrors, setSubmitting }) => {
        try {
            setIsLoading(true);
            const res = await onSubmit(type, values);
            setData(res.data);
        } catch (error) {
            setErrors(error.response.data.errors);
        }
        setSubmitting(false);
        setIsLoading(false);
    };

    return {
        data,
        isLoading,
        submitHandler
    }
}
