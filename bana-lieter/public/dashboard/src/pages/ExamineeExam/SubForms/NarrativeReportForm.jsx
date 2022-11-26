import FormButtons from 'components/Fields/FormButtons';
import ReportsButtons from 'components/Reports/ReportsButtons';
import ReportTitle from 'components/Reports/ReportTitle';
import WhiteBox from 'components/WhiteBox';
import { Formik } from 'formik';
import { useReport } from 'providers/hooks/useReport';
import React from 'react';
import * as yup from 'yup';

const validationSchema = yup.object().shape({});

function NarrativeReportForm({ initialValues, onSubmit }) {
    const { submitHandler, data, isLoading } = useReport(initialValues, onSubmit, 'narrative');
    return (
        <WhiteBox classes="p-0">
            <ReportTitle title="Narrative Report (En)" />
            <Formik
                enableReinitialize
                initialValues={initialValues}
                validationSchema={validationSchema}
                onSubmit={submitHandler}
            >
                {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                    <form className="p-25" onSubmit={handleSubmit}>
                        <FormButtons back={false} />
                    </form>
                )}
            </Formik>
            <ReportsButtons data={data} isLoading={isLoading} />
        </WhiteBox>
    );
}

export default NarrativeReportForm;
