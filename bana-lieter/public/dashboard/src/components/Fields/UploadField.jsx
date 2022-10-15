import { faUpload } from '@fortawesome/fontawesome-free-solid';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { httpClient } from 'providers/helpers';
import React, { useEffect, useState } from 'react';
import { Col, Form, Row } from 'react-bootstrap';

function UploadField({ name, onChange, value, label, path, ...rest }) {
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
        <>
            <Form.Label>{label}</Form.Label>
            <Row className="upload-field">
                <Form.Control type="file" name={name} onChange={handleChange} {...rest} />
                {value && <Col lg={4}><img src={value} /></Col>}
                <Col lg={8}>
                    <div className="upload-text">
                        <FontAwesomeIcon icon={faUpload} />
                        <h3 className="ms-3">
                        {value ? value : "Upload Image"}
                        </h3>
                    </div>
                </Col>
            </Row>
        </>
    );
}

export default UploadField;
