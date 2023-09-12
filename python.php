<?php 
  $pageTitle = "Python | employeeApp";
  include'includes/head.php';
  include'includes/nav.php'; 
  
?>
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?Lang=ruby&amp;skin=desert"></script>
		<!--skin names:default, desert, sunburst, sons-of-obsidian, doxy-->
  <body>
    <div class="header">
      <!-- SIDEBAR -->
      <div class="side-nav">
        <a href="index.php" class="logo">
          <img class="rounded-circle logo-img" src="includes/pics/me_original.jpg" height=200px width=200px>
        </a>

        <p style="color: #e2e9f7;">
          Jason Lindsey Portfolio<br>
          Student of Computer Science &<br>
          Engineering | Database Administrator |<br>
          System Administrator | Aviation<br>
          Quality Control | Veteran    
        </p>

        <i class="fa-brands fa-linkedin fa-lg" style="color: #e2e9f7;"></i> 
        <i class="fa-brands fa-github fa-lg" style="color: #e2e9f7;"></i>  

      </div>

      <!-- MAIN CONTENT -->
      <div class="main" style="margin-top: -100px;">
        <div class="container">
          <video id="background-video" autoplay loop muted>
            <source src="includes/pics/code.mp4" type="video/mp4"></video>

            <br><br><br><br><br><br>
             
            <div>           
				<h5 style="color: white;">employeeApp</h5>
					
<pre><code style="color: white;">
 <pre class="prettyprint card shadow-lg p-3 mb-5 bg-dark rounded opacity-75">class Employee:
    def __init__(self, name, number):
        self.__name = name
        self.__number = number
        
    def set_name(self, name):
        self.__name = name
        
    def set_num(self, number):
        self.__number = number
        
    def get_name(self):
        return self.__name
        
    def get_num(self):
        return self.__number

class SoftwareDeveloper(Employee):
    def __init__(self, name, number, shift, hourly_rate):
        super().__init__(name, number)
        self.__shift = shift
        self.__hourly_rate = hourly_rate
        
    def set_shift(self, shift):
        self.__shift = shift
        
    def set_rate(self, hourly_rate):
        self.__hourly_rate = hourly_rate
        
    def get_shift(self):
        return self.__shift
        
    def get_rate(self):
        return self.__hourly_rate


emp = SoftwareDeveloper("", "", 0, 0)


emp.set_name(input("Please enter employee name: "))
emp.set_num(input("Please enter employee number: "))
print("1 = Day Shift | 2 = Night Shift")
emp.set_shift(int(input("Please enter shift number (1 or 2): ")))
emp.set_rate(float(input("Please enter hourly pay rate: ")))

print("\nDetails are:")
print("\nEmployee name:", emp.get_name())
print("Employee number:", emp.get_num())
print("Shift number:", emp.get_shift())
print("Hourly pay rate: $", format(emp.get_rate(), ".2f"), sep="")


 </pre>
</code></pre>


<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="image1.jpg" class="card-img-top" alt="Image 1">
            <div class="card-body">
              <h5 class="card-title">Card 1</h5>
              <p class="card-text">Description for Card 1.</p>
              <a href="#" class="btn btn-primary">Button 1</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="image2.jpg" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Description for Card 2.</p>
              <a href="#" class="btn btn-primary">Button 2</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="image3.jpg" class="card-img-top" alt="Image 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Description for Card 3.</p>
              <a href="#" class="btn btn-primary">Button 3</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Add more carousel-items for additional sets of cards -->
  </div>
  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


		  </div> 
    </div>
  </body>
</html>

            
            