import React from 'react';
import { Button } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaSave, FaBackward } from 'react-icons/fa';

function FormModalButtons({ onHide = true }) {
    const { t } = useTranslation();
    return (
        <div className="d-flex">
            <Button variant="secondary" onClick={onHide} className="me-2">
                <FaBackward />
                <span className="ps-2">{t('Close')}</span>
            </Button>
            <Button type="submit">
                <FaSave />
                <span className="ps-2">{t('Save')}</span>
            </Button>
        </div>
    );
}

export default FormModalButtons;
