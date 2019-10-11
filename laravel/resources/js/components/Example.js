import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        /*
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-10">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
        */
       
               
       <div class="mb-3 d-flex justify-content-between">
       <div class="pr-3">
           <h2 class="mb-1 h4 font-weight-bold">
           <a class="text-dark" href="./article.html">Nearly 200 Great Barrier Reef coral species also live in the deep sea</a>
           </h2>
           <p>
               There are more coral species lurking in the deep ocean that previously thought.
           </p>
           <div class="card-text text-muted small">
               Jake Bittle in SCIENCE
           </div>
           <small class="text-muted">Dec 12 &middot; 5 min read</small>
       </div>
   </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
