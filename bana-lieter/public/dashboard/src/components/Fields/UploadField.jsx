import { FaCheck, FaUpload } from 'react-icons/fa';
import { httpClient } from 'providers/helpers';
import React, { useEffect, useState } from 'react';
import { Form } from 'react-bootstrap';

function UploadField({ name, onChange, value, type = 'image', label, path, className, ...rest }) {
    const [selectedFile, setSelectedFile] = useState(null);

    const handleChange = (event) => {
        setSelectedFile(event.target.files[0]);
    };

    const handleSubmit = async () => {
        const formData = new FormData();
        formData.append(name, selectedFile);

        const res = await httpClient.post(path, formData);
        onChange(res.data.path);
    };

    useEffect(() => {
        if (selectedFile != null) {
            handleSubmit();
        }
    }, [selectedFile]);

    const additionalPros = {};
    if (type == 'image') {
        additionalPros.accept = 'image/png, image/jpeg';
    } else if (type == 'doc') {
        additionalPros.accept =
            'application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf';
    }

    return (
        <div className={className}>
            <Form.Label>{label}</Form.Label>
            <div className="upload-field">
                <Form.Control {...additionalPros} type="file" name={name} onChange={handleChange} {...rest} />
                <div className="inner">
                    {value && type == 'image' && <img src={value} />}
                    {value ? <FaCheck /> : <FaUpload />}
                </div>
            </div>
        </div>
    );
}

export default UploadField;
