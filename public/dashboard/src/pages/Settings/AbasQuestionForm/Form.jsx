import FormButtons from 'components/Fields/FormButtons';
import SelectField from 'components/Fields/SelectField';
import TextAreaField from 'components/Fields/TextAreaField';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row } from 'react-bootstrap';

import * as Yup from 'yup';

function Form({ initialValues, config, onSubmit }) {
    const validationSchema = Yup.object().shape({
        name: Yup.string().required()
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
                                <SelectField
                                    name="abas_sub_domain_id"
                                    label="Sub Domain"
                                    onChange={handleChange}
                                    value={values.abas_sub_domain_id}
                                    onBlur={handleBlur}
                                    error={errors.abas_sub_domain_id}
                                    options={config.abas_sub_domains}
                                    className="mb-3"
                                />
                            </Col>
                        </Row>
                        <Row>
                            <Col md={8}>
                                <TextAreaField
                                    name="name"
                                    label="Title"
                                    onChange={handleChange}
                                    value={values.name}
                                    onBlur={handleBlur}
                                    error={touched.name && errors.name}
                                    className="mb-3"
                                />
                            </Col>
                            <Col md={8}>
                                <TextAreaField
                                    name="name_en"
                                    label="Title En"
                                    onChange={handleChange}
                                    value={values.name_en}
                                    onBlur={handleBlur}
                                    error={errors.name_en}
                                    className="mb-3"
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
