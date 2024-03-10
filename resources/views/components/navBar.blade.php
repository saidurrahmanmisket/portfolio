  <!-- Navigation-->
  <nav class="navbar shadow-sm sticky-top navbar-expand-lg navbar-light bg-white py-3">
      <div class="container px-5">
          <a class="navbar-brand" href="{{ url('/') }}"><span
                  class="fw-bolder text-gradient display-6 text-gradient">SAIDUR</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                  class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                  <li id="nav-item" class="nav-item"><a class="nav-link" href="{{ url('/') }}"> <button
                              class="btn bg-gradient-primary-to-secondary text-white"> Home</button></a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/resume') }}"> <button
                              class="btn bg-gradient-primary-to-secondary text-white"> Resume</button></a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/projects') }}"> <button
                              class="btn bg-gradient-primary-to-secondary text-white"> Projects</button></a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}"> <button
                              class="btn bg-gradient-primary-to-secondary text-white"> Contact</button></a></li>
              </ul>
          </div>
      </div>
  </nav>
