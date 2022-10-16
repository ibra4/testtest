import { faUpload } from '@fortawesome/fontawesome-free-solid';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { httpClient } from 'providers/helpers';
import React, { useEffect, useState } from 'react';
import { Col, Form, Row } from 'react-bootstrap';

function UploadField({ name, onChange, value, label, path, className, ...rest }) {
    const [selectedFile, setSelectedFile] = useState(null);

    const handleChange = (event) => {
        setSelectedFile(event.target.files[0]);
    };

    const handleSubmit = async () => {
        const formData = new FormData();
        formData.append('image', selectedFile);

        const res = await httpClient.post(path, formData);
        onChange(res.data.path);
    };

    useEffect(() => {
        if (selectedFile != null) {
            handleSubmit();
        }
    }, [selectedFile]);

    return (
        <div className={className}>
            <Form.Label>{label}</Form.Label>
            <Row className="upload-field">
                <Form.Control type="file" name={name} onChange={handleChange} {...rest} />
                <div className="inner">
                    {value && <img src={value} />}
                    <FontAwesomeIcon icon={faUpload} />
                </div>
            </Row>
        </div>
    );
}

export default UploadField;
