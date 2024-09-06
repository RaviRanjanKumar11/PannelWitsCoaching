@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div class="card-body bg-warning mt-5">
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-header text-primary">
                    <i class="fas fa-university"></i> Institute Details
                </div>
                <div class="card-body">
                    @if (isset($institute))
                        <p><strong>Name:</strong> {{ $institute->name }}</p>
                        <p><strong>Address:</strong> {{ $institute->address }}</p>
                        <p><strong>Established:</strong> {{ $institute->established }}</p>
                    @else
                        <p>No institute data available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-header text-success">
                    <i class="fas fa-users"></i> Students Enrolled
                </div>
                <div class="card-body">
                    @if (isset($institute))
                        <p><strong>Total Students:</strong> {{ $institute->total_students }}</p>
                        <p><strong>Male:</strong> {{ $institute->male_students }}</p>
                        <p><strong>Female:</strong> {{ $institute->female_students }}</p>
                    @else
                        <p>No student data available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-header text-danger">
                    <i class="fas fa-chalkboard-teacher"></i> Courses Offered
                </div>
                <div class="card-body">
                    @if (isset($institute))
                        <p><strong>Total Courses:</strong> {{ $institute->total_courses }}</p>
                        <p><strong>Popular Courses:</strong> {{ $institute->popular_courses }}</p>
                    @else
                        <p>No course data available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

        
<div class="card-body">
    <div class="card-header text-center text-dark">
        Student Report
    </div>
    @if ($students->isEmpty())
        <p>No students found.</p>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr class="bg-success text-white">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Aadhar</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>PAN</th>
                    <th>Reg No</th>
                    <th>Address</th>
                    <th>Course</th>
                    <th>Duration</th>
                    <th>Photo</th>
                    <th>Sign</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->aadhar }}</td> 
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->pan }}</td>
                        <td>{{ $student->regNo }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->duration }}</td>
                        <td>
                            @if($student->photo)
                                <img src="{{ asset('storage/' . $student->photo) }}" alt="Photo" width="50" height="50">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($student->sign)
                                <img src="{{ asset('storage/' . $student->sign) }}" alt="Sign" width="50" height="50">
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Pagination Links -->
    {{-- <div class="d-flex justify-content-center">
        {{ $students->links() }}
    </div> --}}
    @endif
</div>



    <!-- Sticky social media icons -->
    <div class="social-icons">
        <ul class="list-unstyled text-end ">
            <li class="mb-2">
                <a href="#"><i class="fab fa-facebook ficon"></i></a>
            </li>
            <li class="mb-2">
                <a href="#"><i class="fab fa-twitter ficon"></i></a>
            </li>
            <li class="mb-2">
                <a href="#"><i class="fab fa-instagram ficon"></i></a>
            </li>
            <li class="mb-2">
                <a href="#"><i class="fab fa-linkedin ficon"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-github ficon"></i></a>
            </li>
        </ul>
    </div>





<!-- add massage container -->
<div id="chat-container">
    <div id="messages">
        <!-- Chat messages go here -->
        
    </div>
</div>
<button id="action-button" class="button" style="width: 130px; height: 3rem;">Contact now <br> 8084776565</button>



    <main>

      <div class="justify-content-center">
        <div class="loader"></div>
        <h1 class="text-center textnimcet">*** NIMCET TOPPER'S 2024 ***</h1>
        <div class="loader"></div>
      </div>



<section>
  <div class="container shadowcount">
      <div class="row">
          <div class="col-12 col-sm-6 col-md-3 mb-4">
              <div class="results-summary-container">
                  <div class="confetti">
                    <div class="confetti">
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                    </div>
                      <!-- Confetti pieces -->
                      <!-- You can keep your existing confetti elements here -->
                  </div>
                  <div class="results-summary-container__result">
                      <div class="heading-tertiary">Your Result</div>
                      <div class="result-box">
                          <!-- Adjusted image size for responsiveness -->
                          <img src="{{ asset('assets/img/mani.jpeg') }}" class="img-fluid" alt="Result Image">
                      </div>
                      <div class="result-text-box">
                          <div class="heading-secondary">excellent</div>
                          <p class="paragraph">
                              You scored higher than all of the people who have taken these tests.
                          </p>
                      </div>
                      <div class="summary__cta text-center">
                          <button class="btn btn__continue">Continue</button>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="col-12 col-sm-6 col-md-3 mb-4">
              <div class="results-summary-container">
                  <div class="confetti">
                    <div class="confetti">
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                    </div> 
                  </div>
                  <div class="results-summary-container__result">
                      <div class="heading-tertiary">Your Result</div>
                      <div class="result-box">
                         
                          <img src="assets/img/rudra.jpeg" class="img-fluid" alt="Result Image">
                      </div>
                      <div class="result-text-box">
                          <div class="heading-secondary">excellent</div>
                          <p class="paragraph">
                              You scored higher than 65% of the people who have taken these tests.
                          </p>
                      </div>
                      <div class="summary__cta text-center">
                          <button class="btn btn__continue">Continue</button>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="col-12 col-sm-6 col-md-3 mb-4">
              <div class="results-summary-container">
                  <div class="confetti">
                    <div class="confetti">
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                    </div>  
                  </div>
                  <div class="results-summary-container__result">
                      <div class="heading-tertiary">Your Result</div>
                      <div class="result-box">
                          
                          <img src="assets/img/swati.jpeg" class="img-fluid" alt="Result Image">
                      </div>
                      <div class="result-text-box">
                          <div class="heading-secondary">excellent</div>
                          <p class="paragraph">
                              You scored higher than 45% of the people who have taken these tests.
                          </p>
                      </div>
                      <div class="summary__cta text-center">
                          <button class="btn btn__continue">Continue</button>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="col-12 col-sm-6 col-md-3 mb-4">
              <div class="results-summary-container">
                  <div class="confetti">
                    <div class="confetti">
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                      <div class="confetti-piece"></div>
                    </div> 
                  </div>
                  <div class="results-summary-container__result">
                      <div class="heading-tertiary">Your Result</div>
                      <div class="result-box">
                         
                          <img src="assets/img/anish.jpeg" class="img-fluid" alt="Result Image">
                      </div>
                      <div class="result-text-box">
                          <div class="heading-secondary">excellent</div>
                          <p class="paragraph">
                              You scored higher than 35% of the people who have taken these tests.
                          </p>
                      </div>
                      <div class="summary__cta text-center">
                          <button class="btn btn__continue">Continue</button>
                      </div>
                  </div>
              </div>
          </div>
          
      </div>
  </div>
</section>


<!--  add animation card -->




<!-- smalls cards -->
<section class="justify-content-center mt-4 shadowcount">
  <div class="container mt-2">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="loader"></div>
            <div class="textnimcet"><strong>LIFE AT WITS EDUCATION </strong></div>
            <div class="loader"></div>
        </div>
    </div>
</div>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="card card-block">
        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
      <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
          <p>If someone is a student of a particular subject, they know about it and are interested in it:</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="card card-block">
        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
      <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
          <p>If someone is a student of a particular subject, they know about it and are interested in it:</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="card card-block">
        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
      <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset">
          <p>If someone is a student of a particular subject, they know about it and are interested in it:</p>
        </div>
      </div>
          <div class="col-md-3 col-sm-6">
              <div class="card card-block">
              <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
            <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
                <p>If someone is a student of a particular subject, they know about it and are interested in it:</p>
      </div>
      </div>    
    </div>
    
    </div>

</section> 





<!-- new  -->
 <div class="container shadowcount">
<!-- <h2>Bootstrap Cards Varation: </h2>
<h3>Same Aspect Ratio ―</h3> -->
<div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
          <br>
          <div class="textnimcet"><h3><strong style="color: darkblue;">NEWS COVERAGE</strong></h3></div>
          <div class="loader"></div>
          <br>
      </div>
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-4">
      <div class="card">
          <img src="assets/img/p-1.jpeg" class="card-img-top" alt="...">
          Wits Education creates History, Produces AIR 1 from Muzaffarpur Wits Education has created the history by producing AIR 1 in All India NIMCET..
          <a href="#" class="button d-flex justify-content-center">Read Now</a>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card">
          <img src="assets/img/p2jpeg.jpeg" class="card-img-top" alt="...">
          Wits Education creates History, Produces AIR 1 from Muzaffarpur Wits Education has created the history by producing AIR 1 in All India NIMCET Entrance in third year of starting the course.
          <a href="#" class="button d-flex justify-content-center">Read Now</a>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card">
          <img src="assets/img/wits.jpeg" class="card-img-top" alt="...">
          Wits Education creates History, Produces AIR 1 from Muzaffarpur Wits Education has created the history by producing AIR 1 in All India NIMCET Entrance in third year of starting the course.
          <a href="#" class="button d-flex justify-content-center">Read Now</a>
          
      </div>
  </div>
</div>

<h3 class="text-center text-white  p-4"><strong style="color: darkblue; background-color: white;">POPULAR COURSES</strong></h3>
<div class="loader"></div>
<div class="row mb-5 cstm-height-card">
  <div class="col-md-4">
      <div class="card">
          <img src="assets/img/tops.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
          <div class="d-flex justify-content-center">
            <a href="#" class="button  text-center">Read Now</a>
          </div>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card">
          <img src="assets/img/h6.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
          <div class="d-flex justify-content-center">
            <a href="#" class="button  text-center">Read Now</a>
          </div>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card">
          <img src="assets/img/h4.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
          <div class="d-flex justify-content-center">
            <a href="#" class="button  text-center">Read Now</a>
          </div>
      </div>
  </div>
</div>

<div class="row mb-5 cstm-height-card">
    <div class="col-md-4">
        <div class="card">
            <img src="assets/img/c-lang.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
            <div class="d-flex justify-content-center">
                <a href="#" class="button  text-center">Read Now</a>
              </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="assets/img/webd.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
            <div class="d-flex justify-content-center">
                <a href="#" class="button  text-center">Read Now</a>
              </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="assets/img/firstsem.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
            <div class="d-flex justify-content-center">
                <a href="#" class="button  text-center">Read Now</a>
              </div>
        </div>
    </div>
  </div>

  <div class="row mb-5 cstm-height-card">
    <div class="col-md-4">
        <div class="card">
            <img src="assets/img/c++lang.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
            <div class="d-flex justify-content-center">
                <a href="#" class="button  text-center">Read Now</a>
              </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="assets/img/python.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
            <div class="d-flex justify-content-center">
                <a href="#" class="button  text-center">Read Now</a>
              </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="assets/img/nimcet.jpeg" class="card-img-top" alt="..." style="height: 280px; width: 300px;">
            <div class="d-flex justify-content-center">
                <a href="#" class="button  text-center">Read Now</a>
              </div>
        </div>
    </div>
  </div>

</div>



<!-- cards -->
 <div class="py-5 shadowcount">
    <h3 class="text-center"><strong class="text-center" style="background-color: wheat; color: darkblue; width: 10rem;">Exams we cover</strong></h3>
    <div class="loader"></div>
<div class="container">
<div class="row hidden-md-up">
  <div class="col-md-4">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title text-center"><strong>NIMCET</strong></h4>
        
        <p class="card-text p-y-1 text-primary">Get access to all premium mock papers (Topic wise + Subject wise + Full length mock Papers)</p>
        
            <a href="#" class="button  text-center">join Now</a>
          
        <!-- <img src="img/"> -->
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title text-center"><strong>MCA BHU</strong></h4>
               <p class="card-text p-y-1 text-primary">Get access to all premium mock papers (Topic wise + Subject wise + Full length mock Papers) .</p>
               <a href="#" class="button  text-center">join Now</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title text-center"><strong>MCA JNU</strong></h4>
        
        <p class="card-text p-y-1 text-primary">Get access to all premium mock papers (Topic wise + Subject wise + Full length mock Papers) .</p>
        <a href="#" class="button  text-center">join Now</a>
      </div>
    </div>
  </div>
</div><br>
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title text-center"><strong>CUET PG MCA</strong></h4>
        
        <p class="card-text p-y-1 text-primary">Get access to all premium mock papers (Topic wise + Subject wise + Full length mock Papers).</p>
        <a href="#" class="button  text-center">join Now</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title text-center"><strong>TANCET</strong></h4>
        
        <p class="card-text p-y-1 text-primary">Get access to all premium mock papers (Topic wise + Subject wise + Full length mock Papers).</p>
        <a href="#" class="button  text-center">join Now</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title text-center"><strong>MAH CET MCA</strong></h4>
        
        <p class="card-text p-y-1 text-primary">Get access to all premium mock papers (Topic wise + Subject wise + Full length mock Papers).</p>
        <a href="#" class="button  text-center">join Now</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<br>
 <!-- end new section -->


 <!-- add certification section -->
  
<!-- add certificate section -->
<div class="react-blog__area blog__area pt---120 pb---120 graybg-home " style="box-shadow: inset 0px 35px 25px #ffffffe0, inset 10px 0px 25px #0000004b,
inset 40px 0px 20px #ffffff, inset -10px 0px 25px #0000004b,
inset -40px 0px 20px #fff, inset 0px 10px 10px #000000e0,
inset 0px -15px 25px #00000036, 10px 25px 40px -10px #00000060;">
    <div class="container blog__width">
        <div class="react__title__section text-center">                           
            <h2 class="react__tittle"><strong>CERTIFICATE'S</strong></h2>
            <div class="loader"></div>
            <br>
        </div>
        <div class="row mt-4">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="blog__card mb-50 new-card-class">
                    <div class="blog__thumb w-img p-relative">
                        <img src="assets/img/iso.jpeg" alt="This the first card image">
                        
                    </div>
                   
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="blog__card mb-50 new-card-class">
                    <div class="blog__thumb w-img p-relative">
                        <img src="assets/img/iso2.jpeg" alt="This the first card image">
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="blog__card mb-50 new-card-class">
                    <div class="blog__thumb w-img p-relative">
                        <img src="assets/img/iso3.jpeg" alt="This the first card image">
                        
                    </div>
                   
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="blog__card mb-50 new-card-class">
                    <div class="blog__thumb w-img p-relative">
                        <img src="assets/img/iso4.jpeg" alt="This the first card image" class="R1">
                       
                    </div>
                    
                </div>
            </div>
        </div>                        
    </div>
</div>
<br>
 <!-- end certificate section -->
  <!-- end certificate section -->


















@endsection
