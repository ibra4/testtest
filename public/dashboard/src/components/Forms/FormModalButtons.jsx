import React from 'react';
import { Button } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaSave, FaSpinner, FaTimes } from 'react-icons/fa';

function FormModalButtons({ onHide = true, isSubmitting }) {
    const { t } = useTranslation();
    return (
        <div className="d-flex">
            <Button variant="danger" onClick={onHide} className="me-2">
                <FaTimes />
                <span className="ps-2">{t('Close')}</span>
            </Button>
            <Button type="submit" disabled={isSubmitting}>
                {isSubmitting ? <FaSpinner className="loading-icon" /> : <FaSave />}
                <span className="ps-2">{t('Save')}</span>
            </Button>
        </div>
    );
}

export default FormModalButtons;
