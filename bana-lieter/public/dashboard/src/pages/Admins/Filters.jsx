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
                                    name="email"
                                    label="Email"
                                    onChange={handleChange}
                                    value={values.email}
                                    onBlur={handleBlur}
                                    error={errors.email}
                                    className="mb-3"
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
