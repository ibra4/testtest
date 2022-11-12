import React from 'react';
import { Button } from 'react-bootstrap';
import { FaSave, FaBackward } from 'react-icons/fa';
import { useHistory } from 'react-router-dom';

function FormButtons({ back = true }) {
    const { goBack } = useHistory();
    return (
        <div className="d-flex">
            {back && (
                <Button variant="secondary" onClick={goBack} className="me-2">
                    <FaBackward />
                    <span className="ps-2">Back</span>
                </Button>
            )}
            <Button type="submit">
                <FaSave />
                <span className="ps-2">Save</span>
            </Button>
        </div>
    );
}

export default FormButtons;
