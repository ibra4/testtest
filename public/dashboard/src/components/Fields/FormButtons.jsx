import React from 'react';
import { Button } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaSave, FaBackward } from 'react-icons/fa';
import { useHistory } from 'react-router-dom';

function FormButtons({ back = true }) {
    const { t } = useTranslation();
    const { goBack } = useHistory();
    return (
        <div className="d-flex">
            {back && (
                <Button variant="secondary" onClick={goBack} className="me-2">
                    <FaBackward />
                    <span className="ps-2">{t('Back')}</span>
                </Button>
            )}
            <Button type="submit">
                <FaSave />
                <span className="ps-2">{t('Save')}</span>
            </Button>
        </div>
    );
}

export default FormButtons;
