import FormButtons from 'components/Fields/FormButtons';
import SelectField from 'components/Fields/SelectField';
import TextAreaField from 'components/Fields/TextAreaField';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { CONSTANTS } from 'providers/helpers/constants';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

import * as Yup from 'yup';

function Form({ initialValues, config, onSubmit, edit = false }) {
    const { t } = useTranslation();
    const validationSchema = Yup.object().shape({});

    return (
        <Formik
            enableReinitialize
            initialValues={{ ...initialValues, password: '', password_confirmation: '' }}
            onSubmit={async (values, { setErrors, setSubmitting }) => {
                try {
                    await onSubmit(values);
                } catch (error) {
                    setErrors(error.response.data.errors);
                }
                setSubmitting(false);
            }}
            validationSchema={validationSchema}
        >
            {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                <WhiteBox>
                    <form onSubmit={handleSubmit}>
                        <Row>
                            <Col md={4}>
                                <TextField
                                    name="title"
                                    label="Title"
                                    onChange={handleChange}
                                    value={values.title}
                                    onBlur={handleBlur}
                                    error={errors.title}
                                    className="mb-3"
                                />
                            </Col>
                            <Col md={4}>
                                <SelectField
                                    name="for"
                                    label="For"
                                    onChange={handleChange}
                                    value={values.for}
                                    onBlur={handleBlur}
                                    error={errors.for}
                                    className="mb-3"
                                    options={CONSTANTS.NOTIFICATION_FOR}
                                    disabled={edit}
                                />
                            </Col>
                            <Col md={4}>
                                <SelectField
                                    name="type"
                                    label="Type"
                                    onChange={handleChange}
                                    value={values.type}
                                    onBlur={handleBlur}
                                    error={errors.type}
                                    className="mb-3"
                                    options={CONSTANTS.NOTIFICATION_TYPES}
                                    disabled={edit}
                                />
                            </Col>
                        </Row>
                        <Row>
                            <Col md={8}>
                                <TextAreaField
                                    name="description"
                                    label="Description"
                                    onChange={handleChange}
                                    value={values.description}
                                    onBlur={handleBlur}
                                    error={errors.description}
                                    className="mb-3"
                                    type="textarea"
                                    rows={4}
                                />
                            </Col>
                        </Row>
                        <FormButtons />
                    </form>
                </WhiteBox>
            )}
        </Formik>
    );
}

export default Form;
