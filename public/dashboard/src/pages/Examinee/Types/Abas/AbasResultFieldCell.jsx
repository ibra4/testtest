import { Field } from 'formik';
import React from 'react';

function AbasResultFieldCell({ index, value, setFieldValue, canEdit, checked }) {
    return (
        <td className={`abas-result-cell${checked ? ' checked' : ''}`}>
            <label htmlFor={`question-${index}-${value}`} className="w-100">
                <Field
                    id={`question-${index}-${value}`}
                    type="radio"
                    name={`questions.${index}.result`}
                    value={value}
                    disabled={canEdit}
                    onChange={() => setFieldValue(`questions.${index}.result`, value)}
                />
                {value}
            </label>
        </td>
    );
}

export default AbasResultFieldCell;
