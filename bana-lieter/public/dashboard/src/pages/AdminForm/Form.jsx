import CheckboxField from 'components/Fields/CheckboxField';
import FormButtons from 'components/Fields/FormButtons';
import SelectField from 'components/Fields/SelectField';
import SelectField2 from 'components/Fields/SelectField2';
import TextField from 'components/Fields/TextField';
import UploadField from 'components/Fields/UploadField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { CONSTANTS } from 'providers/helpers/constants';
import { ROUTES } from 'providers/routes';
import React, { useEffect, useState } from 'react';
import { Col, Row } from 'react-bootstrap';

import * as Yup from 'yup';

const validationSchema = Yup.object().shape({
    name: Yup.string().min(4, 'Too Short!').max(50, 'Too Long!').required('Name field is required!'),
    email: Yup.string().email('Invalid email').required('Email field is required!'),
    number_of_reports: Yup.number().integer().typeError('Numebr of reports must be an integer number').min(0)
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
                                    name="avatar"
                                    label="Avatar"
                                    onChange={(value) => setFieldValue('avatar', value)}
                                    value={values.avatar}
                                    onBlur={handleBlur}
                                    error={errors.avatar}
                                    path={ROUTES.ADMINS.UPLOAD}
                                    className="mb-3"
                                />
                            </Col>
                            <Col className="col-auto">
                                <UploadField
                                    name="cv"
                                    label="CV"
                                    onChange={(value) => setFieldValue('cv', value)}
                                    value={values.cv}
                                    onBlur={handleBlur}
                                    error={errors.cv}
                                    path={ROUTES.ADMINS.UPLOAD}
                                    className="mb-3"
                                    type="doc"
                                />
                            </Col>
                            <Col>
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
                                            name="email"
                                            label="Email"
                                            onChange={handleChange}
                                            value={values.email}
                                            onBlur={handleBlur}
                                            error={errors.email}
                                            type="email"
                                            className="mb-3"
                                        />
                                    </Col>
                                    <Col md={6}>
                                        <TextField
                                            name="phone_number"
                                            label="Phone Number"
                                            onChange={handleChange}
                                            value={values.phone_number}
                                            onBlur={handleBlur}
                                            error={errors.phone_number}
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
                                            error={errors.gender}
                                            options={CONSTANTS.GENDER}
                                            className="mb-3"
                                        />
                                    </Col>
                                </Row>
                                <Row>
                                    <Col md={6}>
                                        <TextField
                                            name="password"
                                            label="Password"
                                            onChange={handleChange}
                                            value={values.password}
                                            onBlur={handleBlur}
                                            error={errors.password}
                                            type="password"
                                            className="mb-3"
                                        />
                                    </Col>
                                    <Col md={6}>
                                        <TextField
                                            name="password_confirmation"
                                            label="Confirm Password"
                                            onChange={handleChange}
                                            value={values.password_confirmation}
                                            onBlur={handleBlur}
                                            error={errors.password_confirmation}
                                            type="password"
                                            className="mb-3"
                                        />
                                    </Col>
                                </Row>
                            </Col>
                        </Row>
                        <Row>
                            <Col md={4}>
                                <TextField
                                    name="number_of_reports"
                                    label="Number of reports"
                                    onChange={handleChange}
                                    value={values.number_of_reports}
                                    onBlur={handleBlur}
                                    error={errors.number_of_reports}
                                    type="number"
                                    className="mb-3"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="expiration_date"
                                    label="Expiration Date"
                                    onChange={handleChange}
                                    value={values.expiration_date}
                                    onBlur={handleBlur}
                                    error={touched.expiration_date && errors.expiration_date}
                                    type="date"
                                    className="mb-3"
                                />
                            </Col>
                        </Row>
                        <Row>
                            <Col md={4}>
                                <SelectField2
                                    onChange={(value) => {
                                        setFieldValue('country_id', value.id);
                                        setFieldValue('city_id', '');
                                        setCities(config.countries.find((item) => item.id == value.id).cities);
                                    }}
                                    label="Country"
                                    value={values.country_id}
                                    onBlur={handleBlur}
                                    error={errors.country_id}
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
                                    error={errors.city_id}
                                    options={cities}
                                    className="mb-3"
                                />
                            </Col>
                        </Row>
                        <Row>
                            <Col md={4}>
                                <CheckboxField
                                    onChange={(evt) => setFieldValue('is_active', evt.target.checked)}
                                    name="is_active"
                                    label="Is Active?"
                                    value={values.is_active}
                                    onBlur={handleBlur}
                                    error={errors.is_active}
                                    className="mb-3"
                                    id="is_active"
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
