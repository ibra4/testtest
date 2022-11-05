import { FaSearch } from 'react-icons/fa';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row, Button } from 'react-bootstrap';

function Filters({ queryParams, onSearch }) {
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
                            <Col md={3}>
                                <TextField
                                    name="min_age"
                                    label="Min Age"
                                    onChange={handleChange}
                                    value={values.min_age}
                                    onBlur={handleBlur}
                                    error={errors.min_age}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="max_age"
                                    label="Max Age"
                                    onChange={handleChange}
                                    value={values.max_age}
                                    onBlur={handleBlur}
                                    error={errors.max_age}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="scaled_score"
                                    label="Scaled Score"
                                    onChange={handleChange}
                                    value={values.scaled_score}
                                    onBlur={handleBlur}
                                    error={errors.scaled_score}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="value"
                                    label="Value"
                                    onChange={handleChange}
                                    value={values.value}
                                    onBlur={handleBlur}
                                    error={errors.value}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                        </Row>
                        <Button disabled={isSubmitting} type="submit">
                            <FaSearch />
                            <span className="ms-2">Search</span>
                        </Button>
                    </form>
                </WhiteBox>
            )}
        </Formik>
    );
}

export default Filters;
