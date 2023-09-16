import FormButtons from 'components/Fields/FormButtons';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React, { useEffect, useState } from 'react';
import { Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

import * as Yup from 'yup';

function Form({ initialValues, config, onSubmit }) {
    const { t } = useTranslation();
    const validationSchema = Yup.object().shape({
        name: Yup.string().required().label(t('Name'))
    });
    const [cities, setCities] = useState([]);
    useEffect(() => {
        if (initialValues && initialValues.country_id) {
            setCities(config.countries.find((item) => item.id == initialValues.country_id).cities);
        }
    }, [initialValues]);

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
                            <Col md={6}>
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
                            <Col md={6}>
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
                        </Row>
                        <FormButtons />
                    </form>
                </WhiteBox>
            )}
        </Formik>
    );
}

export default Form;
