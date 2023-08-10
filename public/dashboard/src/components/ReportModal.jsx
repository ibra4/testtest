import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import { FaPlus, FaSave } from 'react-icons/fa';
import React, { useState } from 'react';
import { useTranslation } from 'react-i18next';

function ReportModal({ title = '', addButtonLabel, children }) {
    const [show, setShow] = useState(false);
    const onHide = () => setShow(false);
    const { t } = useTranslation();

    return (
        <>
            <Button onClick={() => setShow(true)}>
                <FaPlus />
                <span className="ms-2">{addButtonLabel}</span>
            </Button>
            <Modal show={show} onHide={onHide} size="lg" aria-labelledby="contained-modal-title-vcenter" centered>
                <Modal.Header closeButton>
                    <Modal.Title id="contained-modal-title-vcenter">{title}</Modal.Title>
                </Modal.Header>
                <Modal.Body>{children}</Modal.Body>
                <Modal.Footer className="justify-content-start">
                    <Button type="submit me-2">
                        <FaSave />
                        <span className="ps-2">{t('Save')}</span>
                    </Button>
                    <Button variant="danger" onClick={onHide}>
                        {t('Close')}
                    </Button>
                </Modal.Footer>
            </Modal>
        </>
    );
}

export default ReportModal;
