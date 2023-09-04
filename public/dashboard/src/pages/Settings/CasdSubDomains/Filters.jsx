import { FaSearch } from 'react-icons/fa';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row, Button } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import SelectField from 'components/Fields/SelectField';

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
                                    name="casd_domain_id"
                                    label="Domain"
                                    onChange={handleChange}
                                    value={values.casd_domain_id}
                                    onBlur={handleBlur}
                                    error={errors.casd_domain_id}
                                    className="mb-3"
                                    options={config.casd_domains}
                                />
                            </Col>
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
