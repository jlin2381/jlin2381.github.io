<?php 
  $pageTitle = "CPP | diversScoreApp";
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
				<h5 style="color: white;">diversScoreApp</h5>
					
<pre><code style="color: white;">
 <pre class="prettyprint card shadow-lg p-3 mb-5 bg-dark rounded opacity-75">#include &lt;iostream&gt;
using namespace std;

void printHeader();
const int MAX_NUMBER_SCORES = 7;
void fillArray(int a[], int size, int &numberUsed);
void sort(int a[], int numberUsed);
void swapValues(int& v1, int& v2);
int indexOfSmallest(const int a[], int startIndex, int numberUsed);
double difficulty = 0;
double overall = 0;

int main() {
	cout << "Enter degree of difficulty:\n";
	cin >> difficulty;

	int score[MAX_NUMBER_SCORES],numberUsed;
	cout << "Enter scores" << endl;
	fillArray(score, MAX_NUMBER_SCORES, numberUsed);
	sort(score, numberUsed);
		
	double total = 0;
	for (int index = 1; index < numberUsed - 1; index++)

	total = (total + score[index]);

	overall = (difficulty * total * .6);
	cout << overall << endl;
	system("Pause");
	return 0;
}


void fillArray(int a[], int size, int& numberUsed) {
	cout << "Enter up to " << size << " nonnegative whole numbers.\n"
	<< "Mark the end of the list with a negative number.\n";
	int next, index = 0;
	cin >> next;
	while ((next >= 0) && (index < size)) {
		a[index] = next;
		index++;
		cin >> next;
	}
	numberUsed = index;	
}

void sort(int a[], int numberUsed) {
	int indexOfNextSmallest;
	for (int index = 0; index < numberUsed - 1; index++)
	{//Place the correct value in a[index]:
		indexOfNextSmallest =
			indexOfSmallest(a, index, numberUsed);
		swapValues(a[index], a[indexOfNextSmallest]);
		//a[0] <= a[1] <=...<= a[index] are the smallest of the original array
		//elements. The rest of the elements are in the remaining positions.
	}
}

void swapValues(int& v1, int& v2) {
	int temp;
	temp = v1;
	v1 = v2;
	v2 = temp;
}

int indexOfSmallest(const int a[], int startIndex, int numberUsed) {
	int min = a[startIndex],
		indexOfMin = startIndex;
	for(int index = startIndex + 1; index < numberUsed; index++)
		if (a[index] < min)
		{
			min = a[index];
			indexOfMin = index;
			//min is the smallest of a[startIndex] through a[index]
		}
	return indexOfMin;
}
 </pre>
</code></pre>

<div style="padding-bottom: 100px;">
  <img src="includes\pics\diverScreen.png" alt="" style=" margin-left: auto; margin-right: auto;">
</div>

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

            
            