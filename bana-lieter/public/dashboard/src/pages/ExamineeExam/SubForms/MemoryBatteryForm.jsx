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

function MemoryBatteryForm({ initialValues, onSubmit }) {
    const { submitHandler, data, isLoading } = useReport(initialValues, onSubmit, 'memory');

    return (
        <WhiteBox classes="p-0">
            <ReportTitle title='Memory Battery' />
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
            <ReportsButtons data={data} isLoading={isLoading} />
        </WhiteBox>
    );
}

export default MemoryBatteryForm;
