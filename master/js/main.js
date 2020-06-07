
function Ben_way_to_get_element(el){
  return document.getElementById(el);
}

function ajax_changetab_and_send_data(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          Ben_way_to_get_element(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
}


function mySearchFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("Search");
  filter = input.value.toUpperCase();
  table = document.getElementById("Tb1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function mySearchFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("Search1");
  filter = input.value.toUpperCase();
  table = document.getElementById("Tb1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function login1(){

 Ben_way_to_get_element('Message1').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";

 var username1=$('#username1').val();
 var password1=$('#password1').val();
 
 $.ajax({
     type:'POST',
     url: 'js/login1.php',
     data:{
         username1:username1,
         password1:password1,
 
     },
     
     success: function (response){
         $("#Message1").html(response);
     }
 
 });
 
 }

 $(document).ready(function(){


});

 // new plan

function new_plan(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Subscription . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var sub_name=Ben_way_to_get_element('sub_name').value;
        var sub_amount=Ben_way_to_get_element('sub_amount').value;
        var sub_descr=Ben_way_to_get_element('sub_descr').value;
      
        formdata.append('sub_name',sub_name);
        formdata.append('sub_amount',sub_amount);
        formdata.append('sub_descr',sub_descr);
      
        ajax1.open('POST', 'sub_data/new_subsciption_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}


 // new teacher

function new_teacher(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Teacher . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var t_username=Ben_way_to_get_element('t_username').value;
        var t_pass=Ben_way_to_get_element('t_pass').value;
        var tel=Ben_way_to_get_element('tel').value;
        var school=Ben_way_to_get_element('school').value;
        var level_name=Ben_way_to_get_element('level_name').value;
      
        formdata.append('t_username',t_username);
        formdata.append('t_pass',t_pass);
        formdata.append('tel',tel);
        formdata.append('school',school); 
        formdata.append('level_name',level_name);      
        ajax1.open('POST', 'teacher_data/new_teacher_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

// teacher update profile

function teacher_update_profile() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var t_id = Ben_way_to_get_element('t_id').value;
          var username = Ben_way_to_get_element('username').value;
          var f_name = Ben_way_to_get_element('f_name').value;
          var l_name=Ben_way_to_get_element('l_name').value;
          var email=Ben_way_to_get_element('email').value;
          var tel=Ben_way_to_get_element('tel').value;
          var password=Ben_way_to_get_element('password').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('t_id', t_id);
          formdata.append('username', username);
          formdata.append('f_name', f_name);
          formdata.append('l_name', l_name);
          formdata.append('email', email);
          formdata.append('tel', tel);
          formdata.append('password', password);
          formdata.append('profile', profile);

          ajax1.open('POST', 'teacher_data/profile_update_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}

// parent update profile

function parent_update_profile() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var t_id = Ben_way_to_get_element('t_id').value;
          var username = Ben_way_to_get_element('username').value;
          var f_name = Ben_way_to_get_element('f_name').value;
          var l_name=Ben_way_to_get_element('l_name').value;
          var email=Ben_way_to_get_element('email').value;
          var tel=Ben_way_to_get_element('tel').value;
          var password=Ben_way_to_get_element('password').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('t_id', t_id);
          formdata.append('username', username);
          formdata.append('f_name', f_name);
          formdata.append('l_name', l_name);
          formdata.append('email', email);
          formdata.append('tel', tel);
          formdata.append('password', password);
          formdata.append('profile', profile);

          ajax1.open('POST', 'parent_data/profile_update_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}


// new student from teacher

function teacher_new_student() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var school = Ben_way_to_get_element('school').value;
          var s_class = Ben_way_to_get_element('s_class').value;
          var s_username = Ben_way_to_get_element('s_username').value;
          var s_Fname = Ben_way_to_get_element('s_Fname').value;
          var s_Lname=Ben_way_to_get_element('s_Lname').value;
          var s_sex=Ben_way_to_get_element('s_sex').value;
          var s_pass=Ben_way_to_get_element('s_pass').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('school', school);
          formdata.append('s_class', s_class);
          formdata.append('s_username', s_username);
          formdata.append('s_Fname', s_Fname);
          formdata.append('s_Lname', s_Lname);
          formdata.append('s_sex', s_sex);
          formdata.append('s_pass', s_pass);
          formdata.append('profile', profile);

          ajax1.open('POST', 'student_data/new_student_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}

// new student from teacher

function parent_new_student() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var school = Ben_way_to_get_element('school').value;
          var s_class = Ben_way_to_get_element('s_class').value;
          var s_username = Ben_way_to_get_element('s_username').value;
          var s_Fname = Ben_way_to_get_element('s_Fname').value;
          var s_Lname=Ben_way_to_get_element('s_Lname').value;
          var s_sex=Ben_way_to_get_element('s_sex').value;
          var s_pass=Ben_way_to_get_element('s_pass').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('school', school);
          formdata.append('s_class', s_class);
          formdata.append('s_username', s_username);
          formdata.append('s_Fname', s_Fname);
          formdata.append('s_Lname', s_Lname);
          formdata.append('s_sex', s_sex);
          formdata.append('s_pass', s_pass);
          formdata.append('profile', profile);

          ajax1.open('POST', 'child_data/new_child_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}

// new school

function new_school(){
        Ben_way_to_get_element('new_client_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Account for you . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var email=Ben_way_to_get_element('email').value;
        var username=Ben_way_to_get_element('username').value;
        var password=Ben_way_to_get_element('password').value;
      
        formdata.append('email',email);
        formdata.append('username',username);
        formdata.append('password',password);
      
        ajax1.open('POST', 'school/school_data/new_client.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('new_client_message').innerHTML=ajax1.responseText;
      
        }; 
}

// new parent

function new_parent(){
        Ben_way_to_get_element('new_client_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Account for you . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var email=Ben_way_to_get_element('email').value;
        var username=Ben_way_to_get_element('username').value;
        var password=Ben_way_to_get_element('password').value;
      
        formdata.append('email',email);
        formdata.append('username',username);
        formdata.append('password',password);
      
        ajax1.open('POST', 'parent/parent_data/new_client.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('new_client_message').innerHTML=ajax1.responseText;
      
        }; 
}


 // master update profile

function master_profile_update(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Your Profile . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

          var m_id = Ben_way_to_get_element('m_id').value;
          var m_username = Ben_way_to_get_element('m_username').value;
          var m_Fname = Ben_way_to_get_element('m_Fname').value;
          var m_Lname = Ben_way_to_get_element('m_Lname').value;
          var m_mail = Ben_way_to_get_element('m_mail').value;
          var m_tel = Ben_way_to_get_element('m_tel').value;
          var m_pass = Ben_way_to_get_element('m_pass').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('m_id', m_id);
          formdata.append('m_username', m_username);
          formdata.append('m_Fname', m_Fname);
          formdata.append('m_Lname', m_Lname);
          formdata.append('m_mail', m_mail);
          formdata.append('m_tel', m_tel);
          formdata.append('m_pass', m_pass);
          formdata.append('profile', profile);
      
        ajax1.open('POST', 'admin_data/complete_profile_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

 // School update profile

function school_profile_update(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Your Profile . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

          var s_id = Ben_way_to_get_element('s_id').value;
          var s_username = Ben_way_to_get_element('s_username').value;
          var s_mail = Ben_way_to_get_element('s_mail').value;
          var s_tel = Ben_way_to_get_element('s_tel').value;
          var s_pass = Ben_way_to_get_element('s_pass').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('s_id', s_id);
          formdata.append('s_username', s_username);
          formdata.append('s_mail', s_mail);
          formdata.append('s_tel', s_tel);
          formdata.append('s_pass', s_pass);
          formdata.append('profile', profile);
      
        ajax1.open('POST', 'school_data/complete_profile_update_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

 // parent update profile

function parent_profile_update(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Your Profile . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

          var p_id = Ben_way_to_get_element('p_id').value;
          var p_Fname = Ben_way_to_get_element('p_Fname').value;
          var p_Lname = Ben_way_to_get_element('p_Lname').value;
          var p_mail = Ben_way_to_get_element('p_mail').value;
          var p_tel = Ben_way_to_get_element('p_tel').value;
          var p_pass = Ben_way_to_get_element('p_pass').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('p_id', p_id);
          formdata.append('p_Fname', p_Fname);
          formdata.append('p_Lname', p_Lname);
          formdata.append('p_mail', p_mail);
          formdata.append('p_tel', p_tel);
          formdata.append('p_pass', p_pass);
          formdata.append('profile', profile);
      
        ajax1.open('POST', 'parent_data/complete_profile_update_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

 // teacher update profile

function teacher_profile_update(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Your Profile . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

          var t_id = Ben_way_to_get_element('t_id').value;
          var t_Fname = Ben_way_to_get_element('t_Fname').value;
          var t_Lname = Ben_way_to_get_element('t_Lname').value;
          var t_mail = Ben_way_to_get_element('t_mail').value;
          var t_tel = Ben_way_to_get_element('t_tel').value;
          var t_pass = Ben_way_to_get_element('t_pass').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('t_id', t_id);
          formdata.append('t_Fname', t_Fname);
          formdata.append('t_Lname', t_Lname);
          formdata.append('t_mail', t_mail);
          formdata.append('t_tel', t_tel);
          formdata.append('t_pass', t_pass);
          formdata.append('profile', profile);
      
        ajax1.open('POST', 'teacher_data/complete_profile_update_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

 // new book details

function new_book(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Book . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

          var author = Ben_way_to_get_element('author').value;
          var b_name = Ben_way_to_get_element('b_name').value;
          var b_level = Ben_way_to_get_element('b_level').value;
          var b_summary = Ben_way_to_get_element('b_summary').value;
          var b_cover = Ben_way_to_get_element('b_cover').files[0];
          var b_attach = Ben_way_to_get_element('b_attach').files[0];

          formdata.append('author', author);
          formdata.append('b_name', b_name);
          formdata.append('b_level', b_level);
          formdata.append('b_summary', b_summary);
          formdata.append('b_cover', b_cover);
          formdata.append('b_attach', b_attach);
      
        ajax1.open('POST', 'book_data/new_book_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

// new plan

function new_level(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Students Level . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var l_number=Ben_way_to_get_element('l_number').value;
      
        formdata.append('l_number',l_number);
      
        ajax1.open('POST', 'level_data/new_level_details_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}


 // new school subcrption

function new_school_subscribe(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Subscription . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var plan=Ben_way_to_get_element('plan').value;
        var plan_name=Ben_way_to_get_element('plan_name').value;
        var month=Ben_way_to_get_element('month').value;
        var student=Ben_way_to_get_element('student').value;
        var school=Ben_way_to_get_element('school').value;
      
        formdata.append('plan',plan);
        formdata.append('plan_name',plan_name);
        formdata.append('month',month);
        formdata.append('student',student);
        formdata.append('school',school);      
        ajax1.open('POST', 'subscription_data/new_subscription_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

 // new parent subcrption

function new_parent_subscribe(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Subscription . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var plan=Ben_way_to_get_element('plan').value;
        var plan_name=Ben_way_to_get_element('plan_name').value;
        var month=Ben_way_to_get_element('month').value;
        var student=Ben_way_to_get_element('student').value;
        var school=Ben_way_to_get_element('school').value;
      
        formdata.append('plan',plan);
        formdata.append('plan_name',plan_name);
        formdata.append('month',month);
        formdata.append('student',student);
        formdata.append('school',school);      
        ajax1.open('POST', 'subscription_data/new_subscription_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}


// update plan

function update_plan(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var plan_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&plan_id="+plan_id;
     ajax_changetab_and_send_data('sub_data/update_plan.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// delete plan
function delete_plan_data(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var staff=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&staff="+staff;
     ajax_changetab_and_send_data('sub_data/delete_plan_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// View book

function view_book(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var b_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&b_id="+b_id;
     ajax_changetab_and_send_data('book_data/view_book.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// update book

function update_book(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var b_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&b_id="+b_id;
     ajax_changetab_and_send_data('book_data/update_book.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// delete book test
function delete_book_data(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var b_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&b_id="+b_id;
     ajax_changetab_and_send_data('book_data/delete_book_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// delete level
function delete_level_data(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var l_number=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&l_number="+l_number;
     ajax_changetab_and_send_data('level_data/delete_level_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// block school Data
function block_school(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var s_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&s_id="+s_id;
     ajax_changetab_and_send_data('school_data/block_school_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// activate school Data
function activate_school(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var s_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&s_id="+s_id;
     ajax_changetab_and_send_data('school_data/activate_school_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// block parent Data
function block_parent(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var p_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&p_id="+p_id;
     ajax_changetab_and_send_data('parent_data/block_parent_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// active parent Data
function activate_parent(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var p_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&p_id="+p_id;
     ajax_changetab_and_send_data('parent_data/active_parent_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// View messages

function read_messages(adminid){
    $("#loader_agenda_data").fadeOut(500);  
    setTimeout(function(){
      var sender_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&sender_id="+sender_id;
     ajax_changetab_and_send_data('teacher_data/view_message_content.php', 'loader_agenda_data_post', send_data1); 
    }, 500);
}


 // update plan details
function update_plan_data(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Plan Details . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

          var p_id=Ben_way_to_get_element('p_id').value;
          var p_name=Ben_way_to_get_element('p_name').value;
          var p_price=Ben_way_to_get_element('p_price').value;
          var p_descr=Ben_way_to_get_element('p_descr').value;

          formdata.append('p_id',p_id);
          formdata.append('p_name',p_name);
          formdata.append('p_price',p_price);
          formdata.append('p_descr',p_descr);
      
        ajax1.open('POST', 'sub_data/update_plan_details.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}


// update book

function update_book_data() {
          Ben_way_to_get_element('Message2').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Book Details . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var b_id = Ben_way_to_get_element('b_id').value;
          var author = Ben_way_to_get_element('author').value;
          var b_name = Ben_way_to_get_element('b_name').value;
          var b_level = Ben_way_to_get_element('b_level').value;
          var b_summary = Ben_way_to_get_element('b_summary').value;
          var b_cover = Ben_way_to_get_element('b_cover').files[0];
          var b_attach = Ben_way_to_get_element('b_attach').files[0];

          formdata.append('b_id', b_id);
          formdata.append('author', author);
          formdata.append('b_name', b_name);
          formdata.append('b_level', b_level);
          formdata.append('b_summary', b_summary);
          formdata.append('b_cover', b_cover);
          formdata.append('b_attach', b_attach);

          ajax1.open('POST', 'book_data/update_book_details_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('Message2').innerHTML = ajax1.responseText;

      };
}

// message area

// Teacher chat
function send_admin_message() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Sending Message to Admin . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var user_id = Ben_way_to_get_element('user_id').value;
          var message_content = Ben_way_to_get_element('message_content').value;

          formdata.append('user_id', user_id);
          formdata.append('message_content', message_content);

          ajax1.open('POST', 'teacher_data/send_student_message.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}