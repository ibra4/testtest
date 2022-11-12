import FormButtons from 'components/Fields/FormButtons';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import * as yup from 'yup';

const validationSchema = yup.object().shape({});

function CognitiveSubtestsForm({ initialValues, onSubmit }) {
    return (
        <WhiteBox title="Cognitive Subtests">
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
                                    name="figure_ground"
                                    label="Figure Ground"
                                    onChange={handleChange}
                                    value={values.figure_ground}
                                    onBlur={handleBlur}
                                    error={errors.figure_ground}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="form_completion"
                                    label="Form Completion"
                                    onChange={handleChange}
                                    value={values.form_completion}
                                    onBlur={handleBlur}
                                    error={errors.form_completion}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="classification_analogies"
                                    label="Classification Analogies"
                                    onChange={handleChange}
                                    value={values.classification_analogies}
                                    onBlur={handleBlur}
                                    error={errors.classification_analogies}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="sequential_order"
                                    label="Sequential Order"
                                    onChange={handleChange}
                                    value={values.sequential_order}
                                    onBlur={handleBlur}
                                    error={errors.sequential_order}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="visual_patterns"
                                    label="Visual Patterns"
                                    onChange={handleChange}
                                    value={values.visual_patterns}
                                    onBlur={handleBlur}
                                    error={errors.visual_patterns}
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

export default CognitiveSubtestsForm;
