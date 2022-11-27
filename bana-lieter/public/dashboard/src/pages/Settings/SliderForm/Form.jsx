import FormButtons from 'components/Fields/FormButtons';
import TextAreaField from 'components/Fields/TextAreaField';
import TextField from 'components/Fields/TextField';
import UploadField from 'components/Fields/UploadField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { ROUTES } from 'providers/routes';
import React, { useEffect, useState } from 'react';
import { Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

import * as Yup from 'yup';

function Form({ initialValues, config, onSubmit }) {
    const { t } = useTranslation();
    const validationSchema = Yup.object().shape({
        title: Yup.string().required('Name field is required!'),
        description: Yup.string().required(t('Description field is required!')),
        image: Yup.string().required(t('Image field is required!'))
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
                            <Col className="col-auto">
                                <UploadField
                                    name="image"
                                    label='Image'
                                    onChange={(value) => setFieldValue('image', value)}
                                    value={values.image}
                                    onBlur={handleBlur}
                                    error={errors.image}
                                    path={ROUTES.SLIDERS.UPLOAD}
                                    className="mb-3"
                                />
                            </Col>
                            <Col>
                                <Row>
                                    <Col md={6}>
                                        <TextField
                                            name="title"
                                            label='Title'
                                            onChange={handleChange}
                                            value={values.title}
                                            onBlur={handleBlur}
                                            error={errors.title}
                                            className="mb-3"
                                        />
                                    </Col>
                                </Row>
                                <Row>
                                    <Col md={8}>
                                        <TextAreaField
                                            name="description"
                                            label='Description'
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
