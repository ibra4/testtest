import FormButtons from 'components/Fields/FormButtons';
import SelectField from 'components/Fields/SelectField';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { CONSTANTS } from 'providers/helpers/constants';
import React from 'react';
import { Col, Row } from 'react-bootstrap';

import * as Yup from 'yup';

function Form({ initialValues, config, onSubmit }) {
    const validationSchema = Yup.object().shape({
        name: Yup.string().required(),
        for: Yup.string().required(),
        min_age: Yup.number().required(),
        max_age: Yup.number().required().moreThan(Yup.ref('min_age'))
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
                <WhiteBox>
                    <form onSubmit={handleSubmit}>
                        <Row>
                            <Col md={4}>
                                <TextField
                                    name="name"
                                    label="Name"
                                    onChange={handleChange}
                                    value={values.name}
                                    onBlur={handleBlur}
                                    error={errors.name}
                                    className="mb-3"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="name_en"
                                    label="Name En"
                                    onChange={handleChange}
                                    value={values.name_en}
                                    onBlur={handleBlur}
                                    error={errors.name_en}
                                    className="mb-3"
                                />
                            </Col>
                            <Col md={4}>
                                <SelectField
                                    name="abas_domain_id"
                                    label="Domain"
                                    onChange={handleChange}
                                    value={values.abas_domain_id}
                                    onBlur={handleBlur}
                                    error={errors.abas_domain_id}
                                    options={config.abas_domains}
                                    className="mb-3"
                                />
                            </Col>
                        </Row>
                        <Row>
                            <Col md={4}>
                                <SelectField
                                    name="for"
                                    label="For"
                                    onChange={handleChange}
                                    value={values.for}
                                    onBlur={handleBlur}
                                    error={errors.for}
                                    options={CONSTANTS.SUB_DOMAIN_FOR}
                                    className="mb-3"
                                />
                            </Col>
                            <Col md={4}>
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
                            <Col md={4}>
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
                        </Row>
                        <FormButtons />
                    </form>
                </WhiteBox>
            )}
        </Formik>
    );
}

export default Form;
