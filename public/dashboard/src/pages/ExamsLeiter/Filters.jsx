import { FaSearch } from 'react-icons/fa';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row, Button } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { useSelector } from 'react-redux';
import SelectField from 'components/Fields/SelectField';

function Filters({ queryParams, onSearch }) {
    const { t } = useTranslation();
    const config = useSelector((state) => state.app.config);
    return (
        <Formik
            enableReinitialize
            initialValues={queryParams}
            onSubmit={(values, { setSubmitting }) => {
                onSearch({ ...values, page: 1 });
                setSubmitting(false);
            }}
        >
            {({ values, errors, touched, handleChange, handleBlur, handleSubmit, isSubmitting }) => (
                <WhiteBox>
                    <form onSubmit={handleSubmit}>
                        <Row>
                            <Col md={4}>
                                <TextField
                                    name="id"
                                    label="ID"
                                    onChange={handleChange}
                                    value={values.id}
                                    onBlur={handleBlur}
                                    error={errors.id}
                                    className="mb-3"
                                />
                            </Col>
                            {/* <Col md={4}>
                                <TextField
                                    name="name"
                                    label="Name"
                                    onChange={handleChange}
                                    value={values.name}
                                    onBlur={handleBlur}
                                    error={errors.name}
                                    className="mb-3"
                                />
                            </Col> */}
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
                        <Button disabled={isSubmitting} type="submit">
                            <FaSearch />
                            <span className="ms-2">{t('Search')}</span>
                        </Button>
                    </form>
                </WhiteBox>
            )}
        </Formik>
    );
}

export default Filters;
