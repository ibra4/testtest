import FormButtons from 'components/Fields/FormButtons';
import TextField from 'components/Fields/TextField';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import * as yup from 'yup';

const validationSchema = yup.object().shape({});

function ExaminerRatingScaleSectionForm({ initialValues, onSubmit }) {
    return (
        <WhiteBox>
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
                        <div className="title">Examiner rating scale Section A-D</div>
                        <Row>
                            <Col md={3}>
                                <TextField
                                    name="attention"
                                    label="Attention"
                                    onChange={handleChange}
                                    value={values.attention}
                                    onBlur={handleBlur}
                                    error={errors.attention}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="organization_impulse_control"
                                    label="Organization/Impulse Control"
                                    onChange={handleChange}
                                    value={values.organization_impulse_control}
                                    onBlur={handleBlur}
                                    error={errors.organization_impulse_control}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="activity_level"
                                    label="Activity Level"
                                    onChange={handleChange}
                                    value={values.activity_level}
                                    onBlur={handleBlur}
                                    error={errors.activity_level}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="sociability"
                                    label="Sociability"
                                    onChange={handleChange}
                                    value={values.sociability}
                                    onBlur={handleBlur}
                                    error={errors.sociability}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                        </Row>
                        <div className="title">Examiner rating scale Section A-D</div>
                        <Row>
                            <Col md={3}>
                                <TextField
                                    name="energy_and_feelings"
                                    label="Energy and Feelings"
                                    onChange={handleChange}
                                    value={values.energy_and_feelings}
                                    onBlur={handleBlur}
                                    error={errors.energy_and_feelings}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="regulation"
                                    label="Regulation"
                                    onChange={handleChange}
                                    value={values.regulation}
                                    onBlur={handleBlur}
                                    error={errors.regulation}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="anxiety"
                                    label="Anxiety"
                                    onChange={handleChange}
                                    value={values.anxiety}
                                    onBlur={handleBlur}
                                    error={errors.anxiety}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={3}>
                                <TextField
                                    name="sensory_reaction"
                                    label="Sensory Reaction"
                                    onChange={handleChange}
                                    value={values.sensory_reaction}
                                    onBlur={handleBlur}
                                    error={errors.sensory_reaction}
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

export default ExaminerRatingScaleSectionForm;
