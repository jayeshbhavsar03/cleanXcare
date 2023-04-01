<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");

?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SCHEDULE</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

         <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
       
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#">CleanXCare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="HKHome.php">Home</a></li>
                     
                    </ul>
                </div>
               
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
             <div class="form-box">
    <div class="head">YOUR SCHEDULE </div>        

        <div class="form-group">
            
<div class="container-r1">
  

 


<script type="text/javascript">
$(document).ready(function($)
{
  //ajax row data
  var ajax_data =
  [

    {day:"Sunday", am:"available", pm:"unavailable"}, 
    {day:"Monday", am:"available", pm:"unavailable"},
    {day:"Tuesday", am:"available", pm:"unavailable"},
    {day:"Wednesday", am:"unavailable", pm:"available"},
    {day:"Thursday", am:"unavailable", pm:"available"},
    {day:"Friday", am:"unavailable", pm:"available"},
  ]



  var random_id = function  () 
  {
    var id_num = Math.random().toString(9).substr(2,3);
    var id_str = Math.random().toString(36).substr(2);
    
    return id_num + id_str;
  }


  //--->create data table > start
  var tbl = '';
  tbl +='<table class="table table-hover">'

    //--->create table header > start
    tbl +='<thead>';
      tbl +='<tr>';
      tbl +='<th>WEEK DAYS</th>';
      tbl +='<th>AM</th>';
      tbl +='<th>PM</th>';
      tbl +='<th>Edit</th>';
      tbl +='</tr>';
    tbl +='</thead>';
    //--->create table header > end

    
    //--->create table body > start
    tbl +='<tbody>';

      //--->create table body rows > start
      $.each(ajax_data, function(index, val) 
      {
        //you can replace with your database row id
        var row_id = random_id();

        //loop through ajax row data
        tbl +='<tr row_id="'+row_id+'">';
          tbl +='<td ><div  col_name="day">'+val['day']+'</div></td>';
          tbl +='<td ><div class="row_data" edit_type="click" col_name="am">'+val['am']+'</div></td>';
          tbl +='<td ><div class="row_data" edit_type="click" col_name="pm">'+val['pm']+'</div></td>';

          //--->edit options > start
          tbl +='<td>';
           
            tbl +='<span class="btn_edit" > <a href="#" class="btn btn-link " row_id="'+row_id+'" > Edit</a> </span>';


            //only show this button if edit button is clicked
            tbl +='<span class="btn_save"> <a href="#" class="btn btn-link"  row_id="'+row_id+'"> Save</a> | </span>';
            tbl +='<span class="btn_cancel"> <a href="#" class="btn btn-link" row_id="'+row_id+'"> Cancel</a> | </span>';

          tbl +='</td>';
          //--->edit options > end
          
        tbl +='</tr>';
      });

      //--->create table body rows > end

    tbl +='</tbody>';
    //--->create table body > end

  tbl +='</table>'  
  //--->create data table > end

  //out put table data
  $(document).find('.tbl_user_data').html(tbl);

  $(document).find('.btn_save').hide();
  $(document).find('.btn_cancel').hide(); 


  //--->make div editable > start
  $(document).on('click', '.row_data', function(event) 
  {
    event.preventDefault(); 

    if($(this).attr('edit_type') == 'button')
    {
      return false; 
    }

    //make div editable
    $(this).closest('div').attr('contenteditable', 'true');
    //add bg css
    $(this).addClass('bg-warning').css('padding','5px');

    $(this).focus();
  })  
  //--->make div editable > end


  //--->save single field data > start
  $(document).on('focusout', '.row_data', function(event) 
  {
    event.preventDefault();

    if($(this).attr('edit_type') == 'button')
    {
      return false; 
    }

    var row_id = $(this).closest('tr').attr('row_id'); 
    
    var row_div = $(this)       
    .removeClass('bg-warning') //add bg css
    .css('padding','')

    var col_name = row_div.attr('col_name'); 
    var col_val = row_div.html(); 

    var arr = {};
    arr[col_name] = col_val;

    //use the "arr" object for your ajax call
    $.extend(arr, {row_id:row_id});

    //out put to show
    $('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>');
    
  })  
  //--->save single field data > end

 
  //--->button > edit > start 

  $(document).on('click', '.btn_edit', function(event) 
  {


    event.preventDefault();
    var tbl_row = $(this).closest('tr');

    var row_id = tbl_row.attr('row_id');

    tbl_row.find('.btn_save').show();
    tbl_row.find('.btn_cancel').show();

    //hide edit button
    tbl_row.find('.btn_edit').hide(); 

    //make the whole row editable
    tbl_row.find('.row_data')
    .attr('contenteditable', 'true')
    .attr('edit_type', 'button')
    .addClass('bg-warning')
    .css('padding','3px')

    //--->add the original entry > start
    tbl_row.find('.row_data').each(function(index, val) 
    {  
      //this will help in case user decided to click on cancel button
      $(this).attr('original_entry', $(this).html());
    });     
    //--->add the original entry > end

  });
  //--->button > edit > end


  //--->button > cancel > start 
  $(document).on('click', '.btn_cancel', function(event) 
  {
    event.preventDefault();

    var tbl_row = $(this).closest('tr');

    var row_id = tbl_row.attr('row_id');

    //hide save and cacel buttons
    tbl_row.find('.btn_save').hide();
    tbl_row.find('.btn_cancel').hide();

    //show edit button
    tbl_row.find('.btn_edit').show();

    //make the whole row editable

    tbl_row.find('.row_data')
    .attr('edit_type', 'click')
    .removeClass('bg-warning')
    .css('padding','') 

    tbl_row.find('.row_data').each(function(index, val) 
    {   
      $(this).html( $(this).attr('original_entry') ); 
    });  
  });
  //--->button > cancel > end

  
  //--->save whole row entery > start 
  $(document).on('click', '.btn_save', function(event) 
  {
    event.preventDefault();
    var tbl_row = $(this).closest('tr');

    var row_id = tbl_row.attr('row_id');

    
    //hide save and cacel buttons
    tbl_row.find('.btn_save').hide();
    tbl_row.find('.btn_cancel').hide();

    //show edit button
    tbl_row.find('.btn_edit').show();


    //make the whole row editable
    tbl_row.find('.row_data')
    .attr('edit_type', 'click')
    .removeClass('bg-warning')
    .css('padding','') 

    //--->get row data > start
    var arr = {}; 
    tbl_row.find('.row_data').each(function(index, val) 
    {   
      var col_name = $(this).attr('col_name');  
      var col_val  =  $(this).html();
      arr[col_name] = col_val;
    });
    //--->get row data > end

    //use the "arr" object for your ajax call
    $.extend(arr, {row_id:row_id});

    //out put to show
    $('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>')
     

  });
  //--->save whole row entery > end


}); 
</script>


 <script>

     function date1() {
var d = new Date();
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
document.getElementById("demo").innerHTML = months[d.getMonth()];

}
window.addEventListener("load",date1,false)
  </script>     

<div class="panel panel-default">
  <div id ="demo" class="panel-heading"><b>  </b> </div>

  <div class="panel-body">
  
  <div class="tbl_user_data"></div>

  </div>

</div>

 <p style="color: red">please write available or unavailable </p>



</div>

        </div></div>
       
  

    

        </header>


   
    </body>
</html>
