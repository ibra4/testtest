import React, { useState } from 'react';
import { httpClient } from 'providers/helpers';
import { useSelector } from 'react-redux';
import { useToasts } from 'react-toast-notifications';
import { useTranslation } from 'react-i18next';
import { Modal } from 'react-bootstrap';
import classNames from 'classnames';

function FormModal({
    apiPrefix,
    defaultValue,
    Form,
    updateCallback = null,
    createCallback = null,
    buttonLabel,
    icon,
    variant
}) {
    const { t } = useTranslation();
    const [show, setShow] = useState(false);
    const onHide = () => setShow(false);
    const [data, setData] = useState(defaultValue);
    const config = useSelector((state) => state.app.config);

    const { addToast } = useToasts();

    const onSubmit = async (data) => {
        const endPoint = defaultValue.id ? `${apiPrefix}/${defaultValue.id}/update` : `${apiPrefix}/create`;
        const httpMethod = defaultValue.id ? 'put' : 'post';
        const res = await httpClient[httpMethod](endPoint, data);
        if (res.status == 200) {
            addToast(t('Saved Successfully'), { appearance: 'success' });
            if (createCallback) createCallback();
            if (updateCallback) updateCallback(data);
            if (updateCallback) setData(data);
            onHide();
        } else {
            return res;
        }
    };

    return (
        <>
            <div className={classNames('action-button d-flex', `text-${variant}`)} onClick={() => setShow(true)}>
                {icon && icon}
                {buttonLabel && <span className={icon && 'ms-2'}>{t(buttonLabel)}</span>}
            </div>
            <Modal show={show} onHide={onHide} size="lg" aria-labelledby="contained-modal-title-vcenter" centered>
                <Form initialValues={data} config={config} onSubmit={onSubmit} onHide={onHide} />
            </Modal>
        </>
    );
}

export default FormModal;
