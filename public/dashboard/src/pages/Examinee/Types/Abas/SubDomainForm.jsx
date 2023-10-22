import classNames from 'classnames';
import CheckboxField from 'components/Fields/CheckboxField';
import { Field, FieldArray, Formik, useFormikContext } from 'formik';
import { hasRole } from 'providers/helpers';
import React, { useEffect, useMemo, useState } from 'react';
import { Button, Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaSave } from 'react-icons/fa';

function FormObserver() {
    const { values } = useFormikContext();
    const [sumOfResults, setSumOfResults] = useState(0);
    useEffect(() => {
        let sum = 0;
        values.questions.map((questionValue) => {
            sum += questionValue.result;
        });
        setSumOfResults(sum);
    }, [values]);

    return sumOfResults;
}

function SaveButton({ isSaved, label, classes }) {
    return (
        <Button className={classNames('great-save', classes)} type="submit" disabled={isSaved}>
            <span className="me-2">
                <FaSave />
            </span>
            {label}
        </Button>
    );
}

function SubDomainForm({ subDomain, onSubmit }) {
    const canEdit = useMemo(() => subDomain.is_saved && !hasRole('root'), []);

    const { t } = useTranslation();
    return (
        <Formik enableReinitialize initialValues={subDomain} onSubmit={onSubmit}>
            {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                <form onSubmit={handleSubmit}>
                    <SaveButton classes={'mb-2'} isSaved={canEdit} label={t('Save')} />
                    <Table className="align-middle" bordered>
                        <tbody>
                            <tr>
                                <td rowSpan={2}>
                                    <h3>{subDomain.title}</h3>
                                    <p>{subDomain.description}</p>
                                </td>
                                <td className="text-center">القدرة</td>
                                <td className="text-center" colSpan={3}>
                                    التكرار
                                </td>
                                <td className="text-center" rowSpan={2}>
                                    تخمين؟
                                </td>
                            </tr>
                            <tr>
                                <td>غير قادر</td>
                                <td>أبداً</td>
                                <td>أحياناً</td>
                                <td>دائماً</td>
                            </tr>
                            <FieldArray
                                name="questions"
                                render={(arrayHelpers) =>
                                    values.questions.map((questionField, index) => (
                                        <tr key={index}>
                                            <td>
                                                {questionField.question_number}. {questionField.title}
                                            </td>
                                            <td className="text-center">
                                                <label htmlFor={`question-${index}-${0}`} className="w-100">
                                                    <Field
                                                        id={`question-${index}-${0}`}
                                                        type="radio"
                                                        name={`questions.${index}.result`}
                                                        value={0}
                                                        disabled={canEdit}
                                                        onChange={() => setFieldValue(`questions.${index}.result`, 0)}
                                                    />
                                                    <span className="ms-2">0</span>
                                                </label>
                                            </td>
                                            <td className="text-center">
                                                <label htmlFor={`question-${index}-${1}`} className="w-100">
                                                    <Field
                                                        id={`question-${index}-${1}`}
                                                        type="radio"
                                                        name={`questions.${index}.result`}
                                                        value={1}
                                                        disabled={canEdit}
                                                        onChange={() => setFieldValue(`questions.${index}.result`, 1)}
                                                    />
                                                    <span className="ms-2">1</span>
                                                </label>
                                            </td>
                                            <td className="text-center">
                                                <label htmlFor={`question-${index}-${2}`} className="w-100">
                                                    <Field
                                                        id={`question-${index}-${2}`}
                                                        type="radio"
                                                        name={`questions.${index}.result`}
                                                        value={2}
                                                        disabled={canEdit}
                                                        onChange={() => setFieldValue(`questions.${index}.result`, 2)}
                                                    />
                                                    <span className="ms-2">2</span>
                                                </label>
                                            </td>
                                            <td className="text-center">
                                                <label htmlFor={`question-${index}-${3}`} className="w-100">
                                                    <Field
                                                        id={`question-${index}-${3}`}
                                                        type="radio"
                                                        name={`questions.${index}.result`}
                                                        value={3}
                                                        disabled={canEdit}
                                                        onChange={() => setFieldValue(`questions.${index}.result`, 3)}
                                                    />
                                                    <span className="ms-2">3</span>
                                                </label>
                                            </td>
                                            <td className="text-center">
                                                <CheckboxField
                                                    onChange={(evt) =>
                                                        setFieldValue(`questions.${index}.guess`, evt.target.checked)
                                                    }
                                                    disabled={canEdit}
                                                    name={`questions.${index}.guess`}
                                                    value={questionField.guess}
                                                    onBlur={handleBlur}
                                                    className="mb-3"
                                                    id={`questions.${index}.guess`}
                                                />
                                            </td>
                                        </tr>
                                    ))
                                }
                            />
                            <tr>
                                <td style={{ direction: 'ltr' }}>المجموع</td>
                                <td colSpan={5}>
                                    <FormObserver />
                                </td>
                            </tr>
                        </tbody>
                    </Table>
                    <SaveButton isSaved={canEdit} label={t('Save')} />
                </form>
            )}
        </Formik>
    );
}

export default SubDomainForm;
