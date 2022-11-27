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

function AttentionForm({ initialValues, onSubmit }) {
    const { submitHandler, data, isLoading } = useReport(initialValues, onSubmit, 'attention');

    return (
        <WhiteBox classes="p-0">
            <ReportTitle title={'Attention'} />
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
                                    name="attention_sustained"
                                    label="Attention Sustained"
                                    onChange={handleChange}
                                    value={values.attention_sustained}
                                    onBlur={handleBlur}
                                    error={errors.attention_sustained}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="nonverbal_stroop_congruent_correct"
                                    label="Nonverbal Stroop Congruent Correct"
                                    onChange={handleChange}
                                    value={values.nonverbal_stroop_congruent_correct}
                                    onBlur={handleBlur}
                                    error={errors.nonverbal_stroop_congruent_correct}
                                    className="mb-3"
                                    type="number"
                                />
                            </Col>
                            <Col md={4}>
                                <TextField
                                    name="nonverbal_stroop_incongruent_correct"
                                    label="Nonverbal Stroop Incongruent Correct"
                                    onChange={handleChange}
                                    value={values.nonverbal_stroop_incongruent_correct}
                                    onBlur={handleBlur}
                                    error={errors.nonverbal_stroop_incongruent_correct}
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

export default AttentionForm;
