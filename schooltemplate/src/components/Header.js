import React from 'react'

function Header() {
  return (
    <>

<nav className="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="/" className="navbar-brand">
                <h1 className="m-0 text-primary"><i className="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" className="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarCollapse">
                <div className="navbar-nav mx-auto">
                    <a href="/" className="nav-item nav-link active">Home</a>
                    <a href="about" className="nav-item nav-link">About Us</a>
                    <a href="/studentlist" className="nav-item nav-link">Student </a>
                    <a href="/teacherlist" className="nav-item nav-link">Teacher </a>
                    
                    <a href="/contact" className="nav-item nav-link">Contact Us</a>
                    <a href="http://localhost:8080/users/signin" className="nav-item nav-link">Admin</a>
                </div>
                <a href="/FGG" className="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i className="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
     
    </>
  )
}

export default Header