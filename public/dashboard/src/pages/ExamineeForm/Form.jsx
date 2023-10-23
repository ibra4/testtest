import FormButtons from 'components/Fields/FormButtons';
import SelectField from 'components/Fields/SelectField';
import SelectField2 from 'components/Fields/SelectField2';
import TextAreaField from 'components/Fields/TextAreaField';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { sameUserId } from 'providers/helpers';
import { CONSTANTS } from 'providers/helpers/constants';
import React, { useEffect, useState } from 'react';
import { Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { useSelector } from 'react-redux';
import { useToasts } from 'react-toast-notifications';

import * as Yup from 'yup';

function Form({ initialValues, config, onSubmit }) {
    const { t } = useTranslation();
    const { addToast } = useToasts();
    const validationSchema = Yup.object().shape({
        name: Yup.string().required().label(t('Name')),
        birthday: Yup.date().required().label(t('Birthday')),
        gender: Yup.number().required().label(t('Gender')),
        country_id: Yup.number().required().label(t('Country'))
    });
    const [cities, setCities] = useState([]);
    const { referral_sources, information_sources } = useSelector((state) => state.app.config);

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
                    if (error.response.status == 400 || error.response.status == 422) {
                        setErrors(error.response.data.errors);
                    } else {
                        addToast(error.response.data.message, { appearance: 'error' });
                    }
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
                                        disabled={initialValues.id && !sameUserId(initialValues.admin_id)}
                                    />
                                </Col>
                                <Col md={4}>
                                    <TextField
                                        name="name_en"
                                        label="English Name - Optional"
                                        onChange={handleChange}
                                        value={values.name_en}
                                        onBlur={handleBlur}
                                        error={touched.name_en && errors.name_en}
                                        className="mb-3"
                                        disabled={initialValues.id && !sameUserId(initialValues.admin_id)}
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
                                <Col md={4}>
                                    <SelectField2
                                        onChange={(value) => setFieldValue('referral_source', value.id)}
                                        label={'Referral Source'}
                                        value={values.referral_source}
                                        onBlur={handleBlur}
                                        error={errors.referral_source}
                                        options={referral_sources}
                                        className="mb-3"
                                    />
                                </Col>
                                <Col md={4}>
                                    <SelectField2
                                        onChange={(value) => setFieldValue('information_source', value.id)}
                                        label={'Information Source'}
                                        value={values.information_source}
                                        onBlur={handleBlur}
                                        error={errors.information_source}
                                        options={information_sources}
                                        className="mb-3"
                                    />
                                </Col>
                                <Col md={4}>
                                    <TextField
                                        name="school"
                                        label="School - Workplace"
                                        onChange={handleChange}
                                        value={values.school}
                                        onBlur={handleBlur}
                                        error={touched.school && errors.school}
                                        className="mb-3"
                                    />
                                </Col>
                                <Col md={4}>
                                    <TextField
                                        name="grade"
                                        label="Grade"
                                        onChange={handleChange}
                                        value={values.grade}
                                        onBlur={handleBlur}
                                        error={touched.grade && errors.grade}
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

                            <FormButtons />
                        </form>
                    </WhiteBox>
                </>
            )}
        </Formik>
    );
}

export default Form;
