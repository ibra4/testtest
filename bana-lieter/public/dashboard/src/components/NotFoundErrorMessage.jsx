import React from 'react';
import { Alert } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { Link } from 'react-router-dom';

function NotFoundErrorMessage({ message }) {
    const { t } = useTranslation();
    return (
        <div className="mt-5">
            <Alert variant="danger">
                <strong>{t('Model Not Found')}: </strong>
                {message}
            </Alert>
            <Link className="text-primary" to="/">
                {t('Go to home page')}
            </Link>
        </div>
    );
}

export default NotFoundErrorMessage;
