import { FaSearch } from 'react-icons/fa';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row, Button } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { CONSTANTS } from 'providers/helpers/constants';
import SelectField from 'components/Fields/SelectField';

function Filters({ queryParams, onSearch }) {
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
                                    name="title"
                                    label="Title"
                                    onChange={handleChange}
                                    value={values.title}
                                    onBlur={handleBlur}
                                    error={errors.title}
                                    className="mb-3"
                                />
                            </Col>
                            <Col md={4}>
                                <SelectField
                                    name="for"
                                    label="For"
                                    onChange={handleChange}
                                    value={values.for}
                                    onBlur={handleBlur}
                                    error={errors.for}
                                    className="mb-3"
                                    options={CONSTANTS.NOTIFICATION_FOR}
                                />
                            </Col>
                            <Col md={4}>
                                <SelectField
                                    name="type"
                                    label="Type"
                                    onChange={handleChange}
                                    value={values.type}
                                    onBlur={handleBlur}
                                    error={errors.type}
                                    className="mb-3"
                                    options={CONSTANTS.NOTIFICATION_TYPES}
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
