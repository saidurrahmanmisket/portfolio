 <!-- Projects Section-->
 <section class="py-5">
     <div class="container px-5 mb-5">
         <div class="text-center mb-5">
             <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
         </div>
         <div class="row gx-5 justify-content-center">
             <div id="allProject" class="col-lg-11 col-xl-9 col-xxl-8">

                 <!-- Project Card 2-->

             </div>
         </div>
     </div>
 </section>


 <script>
     getProjectList()
     async function getProjectList() {

         let url = "/projectData";
         try {
             let response = await axios.get(url);
             response.data.forEach((item) => {
                 document.getElementById("allProject").innerHTML +=
                     (`
             <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <a class="text-dark text-decoration-none" href="${item.previewLink}">
                            <div class="row align-content-center">
                                <div class="p-5 col-lg-7 col-xl-7 col-xxl-7 col-12">
                                    <h2 class="fw-bolder">${item.title}</h2>
                                    <p>${item.details}</p>
                                </div>
                                <div class="col-lg-5 col-xl-5 col-xxl-5 col-12 justify-content-center d-flex cardImg">
                                    <img class="img-fluid img-thumbnail cardImg" style="" src="${item.thumbnailLink}" alt="..." />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            `)

             })
         } catch (error) {
             console.log(error);
             alert(error)
         }
     }
 </script>