import React from 'react';
import { Button } from 'react-bootstrap';
import { FaSave, FaBackward } from 'react-icons/fa';
import { useHistory } from 'react-router-dom';

function FormButtons() {
    const { goBack } = useHistory();
    return (
        <div className="d-flex">
            <Button variant="secondary" onClick={goBack}>
                <FaBackward />
                <span className="ps-2">Back</span>
            </Button>
            <Button type="submit" className="ms-3">
                <FaSave />
                <span className="ps-2">Save</span>
            </Button>
        </div>
    );
}

export default FormButtons;
