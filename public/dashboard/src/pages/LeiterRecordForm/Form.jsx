import FormButtons from 'components/Fields/FormButtons';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

import * as Yup from 'yup';

function Form({ initialValues, config, onSubmit }) {
    const { t } = useTranslation();

    const validationSchema = Yup.object().shape({
        min_age: Yup.number().required().label(t('Min age')),
        max_age: Yup.number().required().label(t('Max age')),
        scaled_score: Yup.number().required().label(t('Scaled Score')),
        value: Yup.number().required().label(t('Value'))
    });

    return (
        <Formik
            enableReinitialize
            initialValues={initialValues}
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
                <>
                    <WhiteBox>
                        <form onSubmit={handleSubmit}>
                            <Row>
                                <Col md={3}>
                                    <TextField
                                        name="min_age"
                                        label="Min age"
                                        onChange={handleChange}
                                        value={values.min_age}
                                        onBlur={handleBlur}
                                        error={touched.min_age && errors.min_age}
                                        className="mb-3"
                                        type="number"
                                    />
                                </Col>
                                <Col md={3}>
                                    <TextField
                                        name="max_age"
                                        label="Max age"
                                        onChange={handleChange}
                                        value={values.max_age}
                                        onBlur={handleBlur}
                                        error={touched.max_age && errors.max_age}
                                        className="mb-3"
                                        type="number"
                                    />
                                </Col>
                                <Col md={3}>
                                    <TextField
                                        name="value"
                                        label="Value"
                                        onChange={handleChange}
                                        value={values.value}
                                        onBlur={handleBlur}
                                        error={touched.value && errors.value}
                                        className="mb-3"
                                        type="number"
                                    />
                                </Col>
                                <Col md={3}>
                                    <TextField
                                        name="scaled_score"
                                        label="Scaled Score"
                                        onChange={handleChange}
                                        value={values.scaled_score}
                                        onBlur={handleBlur}
                                        error={touched.scaled_score && errors.scaled_score}
                                        className="mb-3"
                                        type="number"
                                    />
                                </Col>
                            </Row>
                            <FormButtons />
                        </form>
                    </WhiteBox>
                </>
            )}
        </Formik>
    );
}

export default Form;
