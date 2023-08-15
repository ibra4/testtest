import { generalErrorText } from 'providers/helpers/constants';
import React, { useEffect, useState } from 'react';
import { useTranslation } from 'react-i18next';
import { FaBan } from 'react-icons/fa';

function GeneralError({ errorResponse = null }) {
    const { t } = useTranslation();
    const [message, setMessage] = useState(null);
    const [statusCode, setStatusCode] = useState(null);

    useEffect(() => {
        if (errorResponse && errorResponse.response != null) {
            if (errorResponse.response.data.message) {
                setMessage(t(errorResponse.response.data.message));
            } else {
                setMessage(t(generalErrorText));
            }
            setStatusCode(errorResponse.response.status);
            if (errorResponse.response.data.action == 'toast') {
                addToast(errorResponse.response.data.message, { appearance: 'errorResponse' });
            }
        } else {
            setMessage(t(generalErrorText));
        }
    }, [errorResponse]);

    return (
        <div className="general-error-page-wrapper">
            {statusCode && (
                <div className="status-code text-danger">
                    <FaBan />
                    <br />
                    {statusCode}
                </div>
            )}
            <div className="error-message">{message}</div>
        </div>
    );
}

export default GeneralError;
