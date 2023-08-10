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

function SupplementalAttentionForm({ initialValues, onSubmit }) {
    const { submitHandler, data, isLoading } = useReport(initialValues, onSubmit, 'supplemental_attention');

    return (
        <WhiteBox classes="p-0">
            <ReportTitle title={'Supplemental Attention/Memory Scores'} />
            <Formik
                enableReinitialize
                initialValues={initialValues}
                validationSchema={validationSchema}
                onSubmit={submitHandler}
            >
                {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                    <form onSubmit={handleSubmit} className="p-25">
                        <Row>
                            <Col md={4}>
                                <TextField
                                    name="attention_sustained_errors"
                                    label="Attention Sustained Errors (ASe)"
                                    onChange={handleChange}
                                    value={values.attention_sustained_errors}
                                    onBlur={handleBlur}
                                    error={errors.attention_sustained_errors}
                                    className="mb-3"
                                    type="number"
                                    disabled={data.saved}
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="attention_divided_correct"
                                    label="Attention Divided Correct (ADc)"
                                    onChange={handleChange}
                                    value={values.attention_divided_correct}
                                    onBlur={handleBlur}
                                    error={errors.attention_divided_correct}
                                    className="mb-3"
                                    type="number"
                                    disabled={data.saved}
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="attention_divided_incorrect"
                                    label="Attention Divided Incorrect (ADi)"
                                    onChange={handleChange}
                                    value={values.attention_divided_incorrect}
                                    onBlur={handleBlur}
                                    error={errors.attention_divided_incorrect}
                                    className="mb-3"
                                    type="number"
                                    disabled={data.saved}
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="nonverbal_stroop_congruent_incorrect"
                                    label="Nonverbal Stroop Congruent Incorrect (NSCi)"
                                    onChange={handleChange}
                                    value={values.nonverbal_stroop_congruent_incorrect}
                                    onBlur={handleBlur}
                                    error={errors.nonverbal_stroop_congruent_incorrect}
                                    className="mb-3"
                                    type="number"
                                    disabled={data.saved}
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="nonverbal_stroop_incongruent_incorrect"
                                    label="Nonverbal Stroop Incongruent Incorrect (NSii)"
                                    onChange={handleChange}
                                    value={values.nonverbal_stroop_incongruent_incorrect}
                                    onBlur={handleBlur}
                                    error={errors.nonverbal_stroop_incongruent_incorrect}
                                    className="mb-3"
                                    type="number"
                                    disabled={data.saved}
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

export default SupplementalAttentionForm;
