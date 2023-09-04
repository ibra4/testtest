import CheckboxField from 'components/Fields/CheckboxField';
import { FieldArray, Formik } from 'formik';
import React from 'react';
import { Button, Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaSave } from 'react-icons/fa';

function SubDomainForm({ subDomain, onSubmit }) {
    const { t } = useTranslation();
    return (
        <Formik enableReinitialize initialValues={subDomain} onSubmit={onSubmit}>
            {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                <form onSubmit={handleSubmit}>
                    <Table className="align-middle">
                        <thead>
                            <tr>
                                <th>{t('Question')}</th>
                                <th>{t('Checked')}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <FieldArray
                                name="questions"
                                render={(arrayHelpers) =>
                                    values.questions.map((questionField, index) => (
                                        <tr key={index}>
                                            <td>
                                                {questionField.question_number}. {questionField.title}
                                            </td>
                                            <td className="text-center">
                                                <CheckboxField
                                                    onChange={(evt) =>
                                                        setFieldValue(`questions.${index}.checked`, evt.target.checked)
                                                    }
                                                    disabled={subDomain.is_saved}
                                                    name={`questions.${index}.checked`}
                                                    value={questionField.checked}
                                                    onBlur={handleBlur}
                                                    className="mb-3"
                                                    id={`questions.${index}.checked`}
                                                />
                                            </td>
                                        </tr>
                                    ))
                                }
                            />
                        </tbody>
                    </Table>
                    <Button type="submit" disabled={subDomain.is_saved}>
                        <span className="me-2">
                            <FaSave />
                        </span>
                        {t('Save')}
                    </Button>
                </form>
            )}
        </Formik>
    );
}

export default SubDomainForm;
