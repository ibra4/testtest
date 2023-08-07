import { FaSearch } from 'react-icons/fa';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row, Button } from 'react-bootstrap';
import SelectField from 'components/Fields/SelectField';
import { CONSTANTS } from 'providers/helpers/constants';
import { useTranslation } from 'react-i18next';

function Filters({ queryParams, onSearch, config }) {
    const { t } = useTranslation();
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
                            {config.user.role == 'root' && (
                                <Col md={4}>
                                    <SelectField
                                        name="admin_id"
                                        label="Admin"
                                        onChange={handleChange}
                                        value={values.admin_id}
                                        onBlur={handleBlur}
                                        error={errors.admin_id}
                                        className="mb-3"
                                        options={config.admins}
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
