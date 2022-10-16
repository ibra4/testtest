import React from 'react';
import { Alert } from 'react-bootstrap';
import { Link } from 'react-router-dom';

function NotFoundErrorMessage({ message }) {
    return (
        <div className="mt-5">
            <Alert variant="danger"><strong>Model Not Found: </strong>{message}</Alert>
            <Link className="text-primary" to="/">
                Go to home page
            </Link>
        </div>
    );
}

export default NotFoundErrorMessage;
