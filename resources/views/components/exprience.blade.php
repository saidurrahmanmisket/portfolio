<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-gradient fw-bolder mb-0">Experience</h2>
                    <a class="btn btn-primary px-4 py-3 bg-gradient-primary-to-secondary border-0"
                        href="{{ asset(' #! ') }}">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Download Resume
                    </a>
                </div>
                <div id="AllExperience">


                </div>
            </section>
        </div>
    </div>

</div>

<script>
    Experience()
    async function Experience() {
        let url = "/experienceData";
        let response = await axios.get(url);

        response.data.forEach((item) => {
            let languages = document.getElementById('AllExperience').innerHTML +=
                (`
                <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-gradient fw-bolder mb-2">${item.duration}</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">${item.title}</div>
                                    </div>
                                    <div class="fst-italic">
                                        <div class="small text-muted">${item.designation}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>${item.details}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                 `)
        })

    }
</script>
