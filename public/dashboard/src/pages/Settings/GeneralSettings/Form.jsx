import TextField from 'components/Fields/TextField';
import TinyEditorField from 'components/Fields/TinyEditorField';
import UploadField from 'components/Fields/UploadField';
import WhiteBox from 'components/WhiteBox';
import { FieldArray, Formik } from 'formik';
import React from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function Form({ initialValues, config, onSubmit }) {
    const { t } = useTranslation();

    const renderSettingField = (setting, index, handleChange, setFieldValue, handleBlur, errors) => {
        switch (setting.type) {
            case 'textfield':
                return (
                    <TextField
                        label={t(setting.label)}
                        name={`settings.${index}.value`}
                        type={setting.type}
                        value={setting.value}
                        onChange={handleChange}
                        onBlur={handleBlur}
                        error={errors.settings && errors.settings[index] && errors.settings[index].value}
                    />
                );
            case 'uploadfield':
                return (
                    <UploadField
                        label={t(setting.label)}
                        name={`settings.${index}.value`}
                        type={setting.type}
                        value={setting.value}
                        onChange={handleChange}
                        onBlur={handleBlur}
                        error={errors.settings && errors.settings[index] && errors.settings[index].value}
                        className="mb-3"
                    />
                );

            case 'tinymcefield':
                return (
                    <TinyEditorField
                        label={t(setting.label)}
                        name={`settings.${index}.value`}
                        type={setting.type}
                        value={setting.value}
                        onChange={(value) => setFieldValue(`settings.${index}.value`, value)}
                        onBlur={handleBlur}
                        error={errors.settings && errors.settings[index] && errors.settings[index].value}
                        className="mb-3"
                    />
                );
        }
    };

    return (
        <Formik enableReinitialize initialValues={initialValues} onSubmit={onSubmit}>
            {({ values, errors, touched, handleChange, setFieldValue, handleBlur, handleSubmit, isSubmitting }) => (
                <WhiteBox>
                    <form onSubmit={handleSubmit}>
                        <FieldArray
                            name="settings"
                            render={(arrayHelpers) => (
                                <Row>
                                    {values.settings.map((setting, index) => (
                                        <Col md={setting.col ?? 12} key={index}>
                                            {renderSettingField(
                                                setting,
                                                index,
                                                handleChange,
                                                setFieldValue,
                                                handleBlur,
                                                errors
                                            )}
                                        </Col>
                                    ))}
                                </Row>
                            )}
                        />
                        <Button type="submit">{t('Save')}</Button>
                    </form>
                </WhiteBox>
            )}
        </Formik>
    );
}

export default Form;
