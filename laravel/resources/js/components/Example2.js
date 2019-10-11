import React from 'react';
import ReactDOM from 'react-dom';

function Example2() {
    return (
        <div className="row justify-content-center">
            <div className="col-md-12 mb-3">
                <div className="card">
                    <div className="card-header">Example Component</div>

                    <div className="card-body">I'm an example component!</div>
                </div>
            </div>
        </div>
    );
}

export default Example2;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
