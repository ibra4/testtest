import FormButtons from 'components/Fields/FormButtons';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import * as yup from 'yup';

const validationSchema = yup.object().shape({});

function MemoryBatteryForm({ initialValues, onSubmit }) {
    return (
        <WhiteBox title="Memory Battery">
            <Formik
                enableReinitialize
                initialValues={initialValues}
                validationSchema={validationSchema}
                onSubmit={async (values, { setErrors, setSubmitting }) => {
                    try {
                        await onSubmit(values);
                    } catch (error) {
                        setErrors(error.response.data.errors);
                    }
                    setSubmitting(false);
                }}
            >
                {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                    <form onSubmit={handleSubmit}>
                        <Row>
                            <Col md={4}>
                                <TextField
                                    name="forward_memory"
                                    label="Forward Memory"
                                    onChange={handleChange}
                                    value={values.forward_memory}
                                    onBlur={handleBlur}
                                    error={errors.forward_memory}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="reverse_memory"
                                    label="Reverse Memory"
                                    onChange={handleChange}
                                    value={values.reverse_memory}
                                    onBlur={handleBlur}
                                    error={errors.reverse_memory}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                        </Row>
                        <FormButtons back={false} />
                    </form>
                )}
            </Formik>
        </WhiteBox>
    );
}

export default MemoryBatteryForm;
