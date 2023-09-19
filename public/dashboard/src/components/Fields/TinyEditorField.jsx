import React, { useRef } from 'react';
import { Editor } from '@tinymce/tinymce-react';
import { getLangcode, httpClient } from 'providers/helpers';
import { Form } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function TinyEditorField({ name, onChange, value, label, error, helperText, className }) {
    const { t } = useTranslation();
    const editorRef = useRef(null);
    const langcode = getLangcode();

    const handleImageUpload = (cb, value, meta) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = async () => {
            const file = input.files[0];
            const formData = new FormData();
            formData.append('file', file);
            const res = await httpClient.post('/tinycme/upload', formData);
            cb(res.data.path, { title: res.data.name });
        };
        input.click();
    };

    return (
        <div className={className}>
            <Form.Label>{t(label)}</Form.Label>
            <div className="input-group has-validation">
                <div className={`form-control${!!error ? ' is-invalid' : ''}`}>
                    <Editor
                        onEditorChange={onChange}
                        tinymceScriptSrc={'/tinymce/tinymce.min.js'}
                        onInit={(evt, editor) => (editorRef.current = editor)}
                        value={value}
                        init={{
                            height: 500,
                            menubar: false,
                            plugins: [
                                'advlist',
                                'autolink',
                                'lists',
                                'link',
                                'image',
                                'charmap',
                                'anchor',
                                'searchreplace',
                                'visualblocks',
                                'code',
                                'fullscreen',
                                'insertdatetime',
                                'media',
                                'table',
                                'preview',
                                'help',
                                'wordcount'
                            ],
                            toolbar: `
                    | undo redo 
                    | blocks fontsize
                    | bold italic underline strikethrough forecolor
                    | alignleft aligncenter alignright alignjustify
                    | link image media table 
                    | bullist numlist outdent indent 
                    | removeformat
                    | help`,
                            content_style: `body { font-family:Helvetica,Arial,sans-serif; font-size:14px; direction: ${
                                langcode == 'ar' ? 'rtl' : 'ltr'
                            }`,
                            // images_upload_url: '/api/admins/upload',
                            file_picker_callback: handleImageUpload,
                            relative_urls: false
                        }}
                    />
                </div>
                <div className="invalid-feedback">{error && error}</div>
                {helperText && <small className="text-muted w-100">{helperText && t(helperText)}</small>}
            </div>
        </div>
    );
}

export default TinyEditorField;
// undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat
