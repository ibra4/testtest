import FormButtons from 'components/Fields/FormButtons';
import SelectField from 'components/Fields/SelectField';
import SelectField2 from 'components/Fields/SelectField2';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { CONSTANTS } from 'providers/helpers/constants';
import React, { useEffect, useState } from 'react';
import { Col, Row } from 'react-bootstrap';

import * as Yup from 'yup';

const validationSchema = Yup.object().shape({
    name: Yup.string().min(4, 'Too Short!').max(50, 'Too Long!').required('Name field is required!'),
    birthday: Yup.date().required(),
    application_date: Yup.date().required(),
    gender: Yup.number().required(),
    country_id: Yup.number().required()
});

function Form({ initialValues, config, onSubmit }) {
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
                <>
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
                                        error={touched.name && errors.name}
                                        className="mb-3"
                                    />
                                </Col>
                                <Col md={4}>
                                    <TextField
                                        name="birthday"
                                        label="Birthday"
                                        onChange={handleChange}
                                        value={values.birthday}
                                        onBlur={handleBlur}
                                        error={touched.birthday && errors.birthday}
                                        type="date"
                                        className="mb-3"
                                    />
                                </Col>
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
                                <Col md={4}>
                                    <SelectField
                                        name="gender"
                                        label="Gender"
                                        onChange={handleChange}
                                        value={values.gender}
                                        onBlur={handleBlur}
                                        error={touched.gender && errors.gender}
                                        options={CONSTANTS.GENDER}
                                        className="mb-3"
                                    />
                                </Col>
                                <Col md={4}>
                                    <SelectField2
                                        onChange={(value) => {
                                            setFieldValue('country_id', value.id);
                                            setFieldValue('city_id', '');
                                            setCities(config.countries.find((item) => item.id == value.id).cities);
                                        }}
                                        label="Country"
                                        name="country_id"
                                        value={values.country_id}
                                        onBlur={handleBlur}
                                        error={touched.country_id && errors.country_id}
                                        options={config.countries}
                                        className="mb-3"
                                    />
                                </Col>
                                <Col md={4}>
                                    <SelectField2
                                        onChange={(value) => setFieldValue('city_id', value.id)}
                                        label="City"
                                        value={values.city_id}
                                        onBlur={handleBlur}
                                        error={touched.city_id && errors.city_id}
                                        options={cities}
                                        className="mb-3"
                                    />
                                </Col>
                                {config.user.role === 'root' && !values.id && (
                                    <Col md={4}>
                                        <SelectField
                                            name="admin_id"
                                            label="Admin"
                                            onChange={handleChange}
                                            value={values.admin_id}
                                            onBlur={handleBlur}
                                            error={touched.admin_id && errors.admin_id}
                                            options={config.admins}
                                            className="mb-3"
                                        />
                                    </Col>
                                )}
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
