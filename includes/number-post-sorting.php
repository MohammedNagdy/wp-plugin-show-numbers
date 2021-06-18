<div class="site-content">
  <h1 class="page-title">Welcome to Numbers Page!</h1>
  <p>This is post type numbers page</br> You can see the numbers of the custom field value</p></br>
  <p> Click on the button to show the sorted numbers</p>



<?php
/*
    Name: Sorting posts
    Descritpion: Shows the posts of type number and it has button to
        sort the numbers
*/

// Numbers Array
$num_array = array();
$sorted_arr = array();


// Create a new query to fetch all the values in the custome field 
// of post number
$num_query = new WP_Query(array
    (
        'post_type' => 'number'
        )
);

// Loop through posts to get cutom fields and store them in the array
while( $num_query->have_posts() ): 
    $num_query->the_post();
    $custom = get_post_custom( get_the_ID());
    $my_field = $custom['value'];
    foreach( $my_field as $key => $value){
        
        array_push($num_array, $value);
        array_push($sorted_arr, $value);
    }
endwhile;

// function to show the default order
function default_order($arr){
    // Loop to show the numbers
    foreach( $arr as $num){
        ?> <h4 id="default" style="display: block;"> <?php echo  $num;?></h4>
            <?php
    }
}


// function to show the correct acending order
function sorted_order($arr){
    rsort($arr);
    $len = count($arr); 
    for($i = $len-1; $i >= 0; $i--){
        ?> <h4 id="sorted" style="display: none;"> <?php echo  $arr[$i];?></h4>
            <?php
    }
}


// Get the post from the button to sort or unsort the numbers
default_order($num_array);
sorted_order($sorted_arr);


?>

    <!--Button Sort-->
    <button id="sorter" onclick="show()">Show Sort</button>

    <script>
    function show() {
        let sorted = document.querySelectorAll("#sorted");
        let unsorted = document.querySelectorAll("#default");
        for(let i =0; i< sorted.length; i++){
            if (unsorted[i].style.display === "none") {
                unsorted[i].style.display = "block";
                sorted[i].style.display = "none";
            } else {
                unsorted[i].style.display = "none";
                sorted[i].style.display = "block";
            }
        }
    }

    </script>




</div>