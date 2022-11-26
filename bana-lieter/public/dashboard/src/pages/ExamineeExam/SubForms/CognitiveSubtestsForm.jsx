import FormButtons from 'components/Fields/FormButtons';
import TextField from 'components/Fields/TextField';
import ReportsButtons from 'components/Reports/ReportsButtons';
import ReportTitle from 'components/Reports/ReportTitle';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { useReport } from 'providers/hooks/useReport';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import * as yup from 'yup';

const validationSchema = yup.object().shape({});

function CognitiveSubtestsForm({ initialValues, onSubmit }) {
    const { submitHandler, data, isLoading } = useReport(initialValues, onSubmit, 'cognitive');

    return (
        <WhiteBox classes="p-0">
            <ReportTitle title="Cognitive Subtests" />
            <Formik
                enableReinitialize
                initialValues={initialValues}
                validationSchema={validationSchema}
                onSubmit={submitHandler}
            >
                {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                    <form className="p-25" onSubmit={handleSubmit}>
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
            <ReportsButtons data={data} isLoading={isLoading} />
        </WhiteBox>
    );
}

export default CognitiveSubtestsForm;
