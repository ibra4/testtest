import TextAreaField from 'components/Fields/TextAreaField';
import TextField from 'components/Fields/TextField';
import { Formik } from 'formik';
import React, { useState } from 'react';
import { Button, Col, Modal, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaPlus, FaSave } from 'react-icons/fa';
import { useToasts } from 'react-toast-notifications';
import * as Yup from 'yup';

const initialValues = {
    application_date: '',
    examiner_notes: ''
};

const validationSchema = Yup.object().shape({
    application_date: Yup.date().required()
});

function LeiterExamForm({ onSubmit }) {
    const [show, setShow] = useState(false);
    const onHide = () => setShow(false);
    const { t } = useTranslation();
    const { addToast } = useToasts();

    const title = t('create_new', { name: 'Leiter Report' });

    return (
        <>
            <Button onClick={() => setShow(true)}>
                <FaPlus />
                <span className="ms-2">{title}</span>
            </Button>
            <Formik
                enableReinitialize
                initialValues={initialValues}
                validationSchema={validationSchema}
                onSubmit={async (values, { setErrors, setSubmitting }) => {
                    try {
                        await onSubmit(values);
                    } catch (error) {
                        if (error.response.status == 400 || error.response.status == 422) {
                            setErrors(error.response.data.errors);
                        } else {
                            addToast(error.response.data.message, { appearance: 'error' });
                        }
                    }
                    setSubmitting(false);
                }}
            >
                {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                    <Modal
                        show={show}
                        onHide={onHide}
                        size="lg"
                        aria-labelledby="contained-modal-title-vcenter"
                        centered
                    >
                        <form onSubmit={handleSubmit}>
                            <Modal.Header closeButton>
                                <Modal.Title id="contained-modal-title-vcenter">{title}</Modal.Title>
                            </Modal.Header>
                            <Modal.Body>
                                <Row>
                                    <Col md={4}>
                                        <TextField
                                            name="application_date"
                                            label="Application Date"
                                            onChange={handleChange}
                                            value={values.application_date}
                                            onBlur={handleBlur}
                                            error={touched.application_date && errors.application_date}
                                            type="date"
                                            className="mb-3"
                                        />
                                    </Col>
                                </Row>
                                <Row>
                                    <Col md={6}>
                                        <TextAreaField
                                            name="examiner_notes"
                                            label="Examiner Notes"
                                            onChange={handleChange}
                                            value={values.examiner_notes}
                                            onBlur={handleBlur}
                                            error={touched.examiner_notes && errors.examiner_notes}
                                            className="mb-3"
                                        />
                                    </Col>
                                </Row>
                            </Modal.Body>
                            <Modal.Footer className="justify-content-start">
                                <Button type="submit me-2">
                                    <FaSave />
                                    <span className="ps-2">{t('Save')}</span>
                                </Button>
                                <Button variant="danger" onClick={onHide}>
                                    {t('Close')}
                                </Button>
                            </Modal.Footer>
                        </form>
                    </Modal>
                )}
            </Formik>
        </>
    );
}

export default LeiterExamForm;
