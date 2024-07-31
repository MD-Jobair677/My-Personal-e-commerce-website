
@extends('frontend.frontend_layout.forntend_layout')



@section('content')
<main>
      <div class="container-fluid "   >
        <!-- Bootstrap Container -->
        <div class="row ">

          <!-- First Column (col-4) -->

         

        
          
          <div id="filter-card" class=" filter-slide col-lg-3 col-xl-2 sticky-sidebar" style="height:100vh;" >

            


            <!-- shorting start -->
            <div class="card mt-2"  >
              <div class="card-header">
                Shorting
              </div>
              <select class="" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              
            </div>
            <!-- shorting end -->

            <!-- aCourding -->

           
            <div class="accordion" id="accordionPanelsStayOpenExample">

              <!--all barnd start -->
              <div class="accordion-item mt-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                   All Brand
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <div>
                      <input type="checkbox" id="brand">
                    <label for="brand">All Brand </label> <span class="me-4"><img src="../asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" alt="" width="20px"></span>

                    </div>
                   
                    <div>
                      <input type="checkbox" id="brand">
                    <label for="brand">All Brand </label> <span class="me-4"><img src="../asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" alt="" width="20px"></span>

                    </div>
                   
                    <div>
                      <input type="checkbox" id="brand">
                    <label for="brand">All Brand </label> <span class="me-4"><img src="../asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" alt="" width="20px"></span>

                    </div>
                   
                   
                    <div>
                      <input type="checkbox" id="brand">
                      <label for="brand">All Brand </label> <span class="me-4"><img src="../asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" alt="" width="20px"></span>

                    </div>
                    
                    


                  </div>
                </div>
              </div>

                 <!--all barnd end -->

                 <!-- spacial price satrst -->

              <div class="accordion-item mt-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                   Offer
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <div>
                      <input type="checkbox" id="offer">
                      <label for="offer">By more save more</label>
                    </div>
                    <div>
                      <input type="checkbox" id="offer">
                      <label for="offer">Spicial Offer</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- spacial price end -->

              <div class="accordion-item mt-2 mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Discount 
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <div>
                      <input type="checkbox" id="doscount">
                      <label for="doscount">30% more</label>
                    </div>
                    <div>
                      <input type="checkbox" id="doscount">
                      <label for="doscount">40% more</label>
                    </div>
                    <div>
                      <input type="checkbox" id="doscount">
                      <label for="doscount">50% more</label>
                    </div>
                    <div>
                      <input type="checkbox" id="doscount">
                      <label for="doscount">60% more</label>
                    </div>
                  </div>
                </div>
              </div>

            </div> 



            
        






          <!-- range -->
          <label for="customRange2" class="form-label">Example range</label>
          <input type="text" class="js-range-slider brandvalu " name="my_range" value="" />
          <!-- rangeend -->
        
          <div class="accordion-item mt-2">
            <h2 class="accordion-header" id="headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                    Accordion Item #38888
                    <i class="icon"></i>
                </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Lorem, ipsum.</p>
                </div>
            </div>
        </div>



        

          </div>
       

        


          <!-- Second Column (col-8) -->
          <div class=" col-md-12 col-lg-9 col-xl-10 custom-column  overflow-auto" style="height:100vh;" >

            <div class="row">

             

           

            <!-- owl curusol start -->
            



            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel hight">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('frontend/asset/image/carousel-1.jpg')}}" class="d-block w-100 image-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('frontend/asset/image/carousel-2.jpg')}}" class="d-block w-100 image-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                   <img src="{{asset('frontend/asset/image/carousel-3.jpg')}}" class="d-block w-100 image-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../asset/image/carousel-3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>


           
          
            <!-- owl curusol end -->

            <!-- <img class="filter" src="/svg/filter.svg" alt=""> -->



            <div>


              <div class="d-flex justify-content-between align-items-center  mt-2 justify-content-center" >

             

              <div class="">
                <span class="pt-4 fs-5">Clothing And Accessories</span> <span>(Showing 1  40 products of 50,123 products)</span>
              </div>
             

              <div class="d-flex justify-content-between align-items-center d-lg-none d-md-block">
                <button id="filter-slide"  class="btn btn-primary"><img  src="/svg/filter.svg" alt="" width="30px"></button>
              </div>

              
            </div>


              <!-- all product -->
              <div>

                <div class="row">
                  
                 
                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                      <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>


                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                         <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>



                 
                  
                 
                 
                 


                </div>

                <!-- allproduct end -->

                <!-- future product start -->

                <h4 class="mt-2">Future Product</h1>
                <div class="row">


                 
                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                         <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>

                  
                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                       <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>

                  
                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                       <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>

                  
                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                         <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>

                  
                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>


                  
                  <div class="col-12 col-sm-6  col-md-4 col-lg-4 col-xl-3">
                    <div class="card shadow mt-3">
                      <div class="image-container">
                      <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">ব্র্যান্ডের নাম: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">পণ্যের নাম</h5>
                        <p class="card-text">মূল্য: <span class="price">$290 </span><span><del>$300</del></span></p>
                        <div class="d-flex justify-content-between">
                          <button id="cart" type="button" class="btn">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>  
                  </div>

                 

                </div>
                <!-- future product end -->


              </div>
             
              


            </div>

        


          </div>
        </div>
      </div>



      <!-- All brand cards start -->
<div class="container-fluid mt-2 z-0">
  <p>All Brand (Showing 4 brands of 50 brands)</p>
  <div class="row">
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="{{asset('frontend/asset/image/cloth-logo-3.jpg')}}" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/cloth-logo-3.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/cloth-logo-3.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/cloth-logo-3.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
             
            </div>
          </div>
        </div>
      </div>
    </div>

   

  </div>
</div>
<!-- All brand cards end -->

<div class="container-fluid">
  <div class="row">
    <h3 class="col-12">What do you want to buy!</h3>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card">
        <div class="row no-gutters  g-0">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/medicine-4.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Medicine</h5>
              <p class="card-text">Content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row no-gutters  g-0">
          <div class="col-4">
            <img src="../asset/image/cloth-2.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Any type of clothes</h5>
              <p class="card-text">Total clothes.</p>
          
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row no-gutters  g-0">
          <div class="col-4">
            <img src="../asset/image/girl-item-1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Girl Item</h5>
              <p class="card-text">Total Girl item.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row no-gutters  g-0">
          <div class="col-4">
            <img src="../asset/image/cloth-2.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Boys Item</h5>
              <p class="card-text">Content is a little bit longer.</p>
          
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/cupple-item -1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Couple Item</h5>
              <p class="card-text">Content is a little bit longer.</p>
     
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/new-couple.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">New Couple Item</h5>
              <p class="card-text">Content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/new reallationship-1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">New Relationship</h5>
              <p class="card-text">Content is a little bit longer.</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/new reallationship-1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">New Relationship</h5>
              <p class="card-text">Content is a little bit longer.</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>

    


  </div>


</div>

    </main>

@endsection