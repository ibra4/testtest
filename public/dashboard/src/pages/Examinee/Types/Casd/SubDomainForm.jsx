import CheckboxField from 'components/Fields/CheckboxField';
import WhiteBox from 'components/WhiteBox';
import { FieldArray, Formik } from 'formik';
import React, { useEffect, useState } from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaSave } from 'react-icons/fa';

function SubDomainForm({ exam, onSubmit }) {
    const { t } = useTranslation();

    const [initialValaues, setInitialValaues] = useState({ questions: [] });

    useEffect(() => {
        let questions = [];
        exam.sub_domains.map((subDomain) => {
            questions.push(...subDomain.questions);
        });
        setInitialValaues({ questions });
    }, [exam.sub_domains]);

    const getQuestionIndex = (id) => {
        return initialValaues.questions.findIndex((item) => item.id === id);
    };

    return (
        <WhiteBox>
            <Formik enableReinitialize initialValues={initialValaues} onSubmit={onSubmit}>
                {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                    <form onSubmit={handleSubmit}>
                        {exam.sub_domains.map((subDomain) => (
                            <div key={subDomain.id} className="mb-3">
                                <h4 className="title">{subDomain.title}</h4>
                                <FieldArray
                                    name="questions"
                                    render={(arrayHelpers) =>
                                        subDomain.questions.map((questionField, index) => (
                                            <Row key={index}>
                                                <Col xs={2} className="text-center">
                                                    <CheckboxField
                                                        onChange={(evt) =>
                                                            setFieldValue(
                                                                `questions.${getQuestionIndex(
                                                                    questionField.id
                                                                )}.checked`,
                                                                evt.target.checked
                                                            )
                                                        }
                                                        disabled={!!exam.is_saved}
                                                        name={`questions.${index}.checked`}
                                                        value={
                                                            values.questions[getQuestionIndex(questionField.id)]
                                                                ?.checked
                                                        }
                                                        onBlur={handleBlur}
                                                        className="mb-3"
                                                        id={`questions.${index}.checked`}
                                                    />
                                                </Col>
                                                <Col xs={10}>
                                                    <h5>
                                                        {questionField.question_number}. {questionField.title}
                                                    </h5>
                                                    <p
                                                        dangerouslySetInnerHTML={{ __html: questionField.description }}
                                                    />
                                                </Col>
                                            </Row>
                                        ))
                                    }
                                />
                                <hr />
                            </div>
                        ))}
                        <Button type="submit" disabled={!!exam.is_saved}>
                            <span className="me-2">
                                <FaSave />
                            </span>
                            {t('Save')}
                        </Button>
                    </form>
                )}
            </Formik>
        </WhiteBox>
    );
}

export default SubDomainForm;
